(function () {
   'use strict';

   const G_DATE = 'YYYY-MM-DD';
   const G_DATETIME = 'YYYY-MM-DD HH:mm:ss';
   const J_DATE = 'jYYYY/jMM/jDD';
   const J_DATETIME = 'jYYYY/jMM/jDD HH:mm:ss';

   function latinDigits(value) {
      return String(value).replace(/[۰-۹]/g, (digit) => String('۰۱۲۳۴۵۶۷۸۹'.indexOf(digit)));
   }

   function persianDigits(value) {
      return String(value).replace(/\d/g, (digit) => '۰۱۲۳۴۵۶۷۸۹'[Number(digit)]);
   }

   function toJalali(value, withTime) {
      if (!value || !window.moment) return '';
      const parsed = moment(value, withTime ? [G_DATETIME, 'YYYY-MM-DD HH:mm'] : G_DATE, true);
      return parsed.isValid() ? persianDigits(parsed.format(withTime ? J_DATETIME : J_DATE)) : '';
   }

   function toGregorian(value, withTime) {
      if (!value || !window.moment) return '';
      const parsed = moment(latinDigits(value), withTime ? [J_DATETIME, 'jYYYY/jMM/jDD HH:mm'] : J_DATE, true);
      return parsed.isValid() ? parsed.format(withTime ? G_DATETIME : G_DATE) : '';
   }

   function bindPicker(wrapper) {
      if (wrapper.dataset.persianBound === '1') return;
      const fp = wrapper._flatpickr || wrapper.querySelector('[data-input]')?._flatpickr;
      if (!fp || !fp.altInput || !fp.input) return;

      wrapper.dataset.persianBound = '1';
      const visible = fp.altInput;
      const hidden = fp.input;
      const withTime = Boolean(fp.config.enableTime);
      // Do not disable GLPI's original picker. It is the accessible fallback
      // and must stay usable if the Jalali widget fails to initialize.
      visible.removeAttribute('readonly');
      visible.setAttribute('autocomplete', 'off');
      visible.setAttribute('data-jdp', '');
      if (!withTime) visible.setAttribute('data-jdp-only-date', 'true');
      visible.setAttribute('dir', 'ltr');
      visible.setAttribute('placeholder', withTime ? '۱۴۰۳/۰۱/۰۱ ۱۲:۰۰:۰۰' : '۱۴۰۳/۰۱/۰۱');

      // Preserve the Flatpickr toggle and its original event handlers.

      const refresh = () => {
         const converted = toJalali(hidden.value, withTime);
         if (converted) visible.value = converted;
      };
      refresh();

      let syncing = false;
      const sync = () => {
         if (syncing) return;
         const converted = toGregorian(visible.value.trim(), withTime);
         if (!converted && visible.value.trim() !== '') return;
         syncing = true;
         fp.setDate(converted || null, true, withTime ? 'Y-m-d H:i:S' : 'Y-m-d');
         hidden.value = converted;
         window.setTimeout(() => { refresh(); syncing = false; }, 0);
      };
      visible.addEventListener('change', sync);
      visible.addEventListener('blur', sync);
   }

   function scan() {
      document.documentElement.setAttribute('lang', 'fa');
      document.documentElement.setAttribute('dir', 'rtl');
      document.body?.classList.toggle('page-preference', window.location.pathname.endsWith('/preference.php'));
      document.querySelectorAll('.flatpickr').forEach(bindPicker);
      if (window.jalaliDatepicker && !document.documentElement.dataset.jdpStarted) {
         document.documentElement.dataset.jdpStarted = '1';
         jalaliDatepicker.startWatch({ selector: '[data-jdp]', time: true, format: 'yyyy/mm/dd HH:mm:ss', autoHide: true });
      }
   }

   function bindEntityDropdown() {
      if (document.documentElement.dataset.entityDropdownBound === '1') return;
      document.documentElement.dataset.entityDropdownBound = '1';

      document.addEventListener('click', (event) => {
         const toggle = event.target.closest('.entity-dropdown-toggle');
         const openMenus = document.querySelectorAll('.entity-dropdown-toggle + .dropdown-menu.show');

         if (toggle) {
            event.preventDefault();
            event.stopImmediatePropagation();
            const menu = toggle.nextElementSibling;
            if (!menu?.classList.contains('dropdown-menu')) return;
            const shouldOpen = !menu.classList.contains('show');
            openMenus.forEach((item) => item.classList.remove('show'));
            document.querySelectorAll('.entity-dropdown-toggle[aria-expanded="true"]')
               .forEach((item) => item.setAttribute('aria-expanded', 'false'));
            menu.classList.toggle('show', shouldOpen);
            toggle.setAttribute('aria-expanded', shouldOpen ? 'true' : 'false');
            return;
         }

         if (!event.target.closest('.user-menu .dropstart > .dropdown-menu')) {
            openMenus.forEach((item) => item.classList.remove('show'));
            document.querySelectorAll('.entity-dropdown-toggle[aria-expanded="true"]')
               .forEach((item) => item.setAttribute('aria-expanded', 'false'));
         }
      }, true);
   }

   function convertTextDates(root) {
      if (!window.moment || !root) return;
      const walker = document.createTreeWalker(root, NodeFilter.SHOW_TEXT);
      const nodes = [];
      while (walker.nextNode()) nodes.push(walker.currentNode);
      nodes.forEach((node) => {
         const parent = node.parentElement;
         if (!parent || parent.closest('script,style,input,textarea,code,pre,[data-no-jalali]')) return;
         node.nodeValue = node.nodeValue.replace(/\b(19|20)\d{2}-\d{2}-\d{2}\b/g, (date) => toJalali(date, false) || date);
      });
   }

   function normalizeBrandAndTranslations(root) {
      if (!root) return;
      const replacements = new Map([
         ['For security reasons, please change the password for the default users:', 'برای افزایش امنیت، رمز عبور حساب‌های پیش‌فرض را تغییر دهید:'],
         ['Root entity', 'موجودیت اصلی'],
         ['Super-Admin', 'مدیر سامانه'],
         ['GLPI', 'FanaOne Service Desk'],
         // Do not disguise a real login name; change account credentials in GLPI instead.
         ['post-only', 'کاربر محدود'],
         ['tech', 'کارشناس'],
         ['normal', 'کاربر عادی'],
         ['Add a filter', 'افزودن فیلتر'],
         ['By default, a software may be linked to a ticket', 'به‌صورت پیش‌فرض، یک نرم‌افزار می‌تواند به درخواست مرتبط شود'],
         ['Check the SQL replica', 'بررسی نسخه همگام پایگاه داده SQL'],
         ['Check tokens related to "DYNAMIC" row format migration.', 'بررسی نشانه‌های مربوط به مهاجرت قالب ردیف «DYNAMIC».'],
         ['Classic (toolbar on top)', 'کلاسیک (نوار ابزار در بالا)'],
         ['This item is not published yet', 'این مورد هنوز منتشر نشده است'],
         ['Helpdesk', 'میز خدمت'],
         ['Search', 'جستجو'],
         ['Clear search', 'پاک‌کردن جستجو'],
         ['Select all', 'انتخاب همه'],
         ['Notifications', 'اعلان‌ها'],
         ['Notification', 'اعلان'],
         ['No notification', 'اعلانی وجود ندارد'],
         ['Mark as read', 'علامت‌گذاری به‌عنوان خوانده‌شده'],
         ['Enable notifications', 'فعال‌سازی اعلان‌ها'],
         ['Browser notifications', 'اعلان‌های مرورگر'],
         ['Email notifications', 'اعلان‌های ایمیلی'],
      ]);
      const translateValue = (sourceValue) => {
         let value = sourceValue;
         replacements.forEach((translated, source) => {
            value = value.replaceAll(source, translated);
         });
         return value;
      };
      const walker = document.createTreeWalker(root, NodeFilter.SHOW_TEXT);
      const nodes = [];
      while (walker.nextNode()) nodes.push(walker.currentNode);
      nodes.forEach((node) => {
         if (!node.parentElement || node.parentElement.closest('script,style,code,pre')) return;
         const value = translateValue(node.nodeValue);
         if (value !== node.nodeValue) node.nodeValue = value;
      });

      const attributeRoot = root.nodeType === Node.ELEMENT_NODE ? root : document;
      attributeRoot.querySelectorAll('[title], [placeholder], [aria-label]').forEach((element) => {
         ['title', 'placeholder', 'aria-label'].forEach((attribute) => {
            if (!element.hasAttribute(attribute)) return;
            const current = element.getAttribute(attribute);
            const translated = translateValue(current);
            if (translated !== current) element.setAttribute(attribute, translated);
         });
      });

      document.querySelectorAll('#navbar-menu > .navbar-nav > .nav-item > .nav-link .menu-label')
         .forEach((label, index) => {
            const labels = ['دارایی‌ها', 'پشتیبانی', 'مدیریت خدمات', 'ابزارها', 'مدیریت سامانه', 'تنظیمات'];
            if (labels[index] && label.textContent !== labels[index]) label.textContent = labels[index];
         });

      document.querySelectorAll('.avatar').forEach((avatar) => {
         if (avatar.textContent.trim() === 'GL') avatar.textContent = 'F1';
      });
      document.querySelectorAll('[title]').forEach((element) => {
         if (/glpi/i.test(element.title)) element.title = element.title.replace(/glpi/gi, 'FanaOne');
      });
   }

   document.addEventListener('DOMContentLoaded', () => {
      scan();
      bindEntityDropdown();
      convertTextDates(document.body);
      normalizeBrandAndTranslations(document.body);
      const observer = new MutationObserver((mutations) => {
         scan();
         mutations.forEach((mutation) => mutation.addedNodes.forEach((node) => {
            if (node.nodeType === Node.ELEMENT_NODE) convertTextDates(node);
            if (node.nodeType === Node.ELEMENT_NODE) normalizeBrandAndTranslations(node);
         }));
      });
      observer.observe(document.body, { childList: true, subtree: true });
   });
})();
