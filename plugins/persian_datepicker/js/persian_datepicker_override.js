(function() {
  // تنظیمات فرمت‌ها
  const G_FORMAT = "YYYY-MM-DD HH:mm:ss";
  const J_FORMAT = "jYYYY/jMM/jDD HH:mm:ss";
  const JDP_FORMAT = "yyyy/mm/dd HH:mm:ss";

  // تبدیل با moment-jalaali (اولویت) یا JDate (fallback)
  function gToJ(gStr) {
    if (window.moment) {
      const j = moment(gStr, G_FORMAT).format(J_FORMAT);
      return j !== "Invalid date" ? j : "";
    }
    if (window.JDate) {
      const m = gStr.match(/^(\d{4})-(\d{2})-(\d{2})(?: (\d{2}):(\d{2}):(\d{2}))?$/);
      if (!m) return "";
      const d = new Date(+m[1], +m[2]-1, +m[3], m[4]?+m[4]:0, m[5]?+m[5]:0, m[6]?+m[6]:0);
      const [jy, jm, jd] = JDate.toJalali(d);
      const HH = String(d.getHours()).padStart(2,'0');
      const mm = String(d.getMinutes()).padStart(2,'0');
      const ss = String(d.getSeconds()).padStart(2,'0');
      return `${jy}/${String(jm).padStart(2,'0')}/${String(jd).padStart(2,'0')} ${HH}:${mm}:${ss}`;
    }
    return "";
  }

  function jToG(jStr) {
    if (window.moment) {
      const g = moment(jStr, J_FORMAT).format(G_FORMAT);
      return g !== "Invalid date" ? g : "";
    }
    if (window.JDate) {
      const m = jStr.match(/^(\d{4})\/(\d{2})\/(\d{2}) (\d{2}):(\d{2})(?::(\d{2}))?$/);
      if (!m) return "";
      const gdate = JDate.toGregorian(+m[1], +m[2], +m[3]);
      gdate.setHours(+m[4], +m[5], m[6]?+m[6]:0);
      const yyyy = gdate.getFullYear();
      const MM    = String(gdate.getMonth()+1).padStart(2,'0');
      const dd    = String(gdate.getDate()).padStart(2,'0');
      const HH    = String(gdate.getHours()).padStart(2,'0');
      const mm    = String(gdate.getMinutes()).padStart(2,'0');
      const ss    = String(gdate.getSeconds()).padStart(2,'0');
      return `${yyyy}-${MM}-${dd} ${HH}:${mm}:${ss}`;
    }
    return "";
  }

  // راه‌اندازی jalaliDatepicker برای یک input مشخص
  function bindJdp(input) {
    if (!input.id) input.id = "jdp_" + Math.random().toString(36).slice(2);
    if (window.jalaliDatepicker) {
      window.jalaliDatepicker.startWatch({
        selector: "#" + input.id,
        time: true,
        format: JDP_FORMAT
      });
    }
  }

  // همگام‌سازی رویدادها
  function attachSync(jInput, hidden) {
    function sync() {
      const val = jInput.value.trim();
      if (!val || !hidden) return;
      const g = jToG(val);
      if (g) {
        hidden.value = g;
        hidden.dispatchEvent(new Event('input', { bubbles: true }));
        hidden.dispatchEvent(new Event('change', { bubbles: true }));
      }
    }
    jInput.addEventListener("input", sync);
    jInput.addEventListener("change", sync);
    jInput.addEventListener("blur", sync);

    // fallback دوره‌ای اگر پلاگین رویدادها را تریگر نکند
    let last = jInput.value;
    setInterval(() => {
      const now = jInput.value;
      if (now !== last) { last = now; sync(); }
    }, 400);
  }

  // مقداردهی اولیه
  function fillInitial(jInput, hidden) {
    if (!hidden || !hidden.value) return;
    const j = gToJ(hidden.value);
    if (j) jInput.value = j;
  }

  // پردازش wrapperهای flatpickr
  function processWrappers() {
    const wrappers = document.querySelectorAll(".input-group.flex-grow-1.flatpickr");
    wrappers.forEach(wrap => {
      if (wrap.dataset.jalaliApplied === "true") return;
      wrap.dataset.jalaliApplied = "true";

      const hidden = wrap.querySelector('input[type="hidden"]');
      const originalText = wrap.querySelector('input[type="text"]');

      // ساخت یا یافتن ورودی شمسی کنار wrapper
      let jInput = wrap.parentElement.querySelector('input[data-jdp]');
      if (!jInput) {
        jInput = document.createElement("input");
        jInput.type = "text";
        jInput.className = "form-control rounded-start ps-2 input";
        jInput.setAttribute("data-jdp", "");
        jInput.setAttribute("placeholder", "تاریخ شمسی را انتخاب کنید");
        wrap.parentElement.appendChild(jInput);
      }

      // غیرفعال‌سازی flatpickr تا مقدار نمایش دست‌کاری نشود
      wrap.style.display = "none";
      if (originalText && originalText._flatpickr) {
        try { originalText._flatpickr.destroy(); } catch(e) {}
      }

      fillInitial(jInput, hidden);
      bindJdp(jInput);
      attachSync(jInput, hidden);
    });
  }

  // پردازش اینپوت‌های تکی با data-jdp
  function processSingles() {
    const singles = document.querySelectorAll('input[data-jdp]:not([type="hidden"])');
    singles.forEach(input => {
      if (input.dataset.jalaliApplied === "true") return;

      // پیدا کردن hidden متناظر:
      // 1) نزدیک‌ترین hidden در همان container
      let hidden = input.closest('.input-group, .form-group, td, div')?.querySelector('input[type="hidden"]');
      // 2) اگر نبود، بر اساس name بدون _jalali
      if (!hidden && input.name) {
        const baseName = input.name.replace(/_jalali$/, "");
        hidden = document.querySelector(`input[type="hidden"][name="${baseName}"]`);
      }

      if (!hidden) return; // اگر hidden متناظر پیدا نشد، ادامه نده

      input.dataset.jalaliApplied = "true";
      fillInitial(input, hidden);
      bindJdp(input);
      attachSync(input, hidden);
    });
  }

  // اسکن دوره‌ای برای پوشش محتوای دینامیک
  function scanAll() {
    processWrappers();
    processSingles();
  }

  document.addEventListener("DOMContentLoaded", scanAll);
  // برای محتوای Ajax/دینامیک:
  setInterval(scanAll, 800);
})();
