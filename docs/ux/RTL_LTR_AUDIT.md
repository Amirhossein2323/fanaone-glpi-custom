# ممیزی دوم راست‌چین / چپ‌چین — GLPI 10.0.6

**تاریخ:** ۲۶ نوامبر ۲۰۲۶  
**مخزن:** `Amirhossein2323/fanaone-glpi-custom`  
**شاخهٔ تغییرات:** `ux/audit-and-shared-experience-20261115`  
**مبنای بررسی:** سورس GLPI 10.0.6، قالب فعال FanaOne، لایه‌های CSS اختصاصی و دو تصویر ارسالی کاربر.

## جمع‌بندی

سه ایراد قابل اثبات از روی سورس پیدا و با CSS محدود اصلاح شد. تغییرات فقط در شاخهٔ UX ثبت شده‌اند؛ شاخهٔ `main` تغییر نکرده و Pull Request شمارهٔ ۱ به‌روزرسانی شده است.

این ممیزی شامل بررسی ایستا (static source review) است. به دلیل نداشتن نشانی و دسترسی به یک محیط staging احراز هویت‌شده، ادعای تست بصری تمام مسیرها یا تمام نقش‌های کاربری نمی‌شود. تست‌های CI نیز آزمون ساختاری/منبع هستند، نه جایگزین بررسی مرورگر.

## ایرادهای تأییدشده و اصلاح

### ۱) کارت‌های صفحهٔ پایگاه دانش

**شاهد سورس**
- `src/Knowbase.php` متد `showSearchView()` سه پنل «جدیدترین»، «آخرین به‌روزرسانی» و «پربازدید» را داخل `.fanaone-kb-overview` می‌سازد.
- `src/KnowbaseItem.php` متد `showRecentPopular()` برای محتوای هر ردیف از `<td class='left'><div class='kb'>...` استفاده می‌کند.
- `css/legacy/includes/_styles.scss` کلاس‌های قدیمی `.kb`، `.kb_resume` و `.tdkb` را صراحتاً چپ‌چین تعریف می‌کند.
- قانون قبلی FanaOne سلول‌های جدول را هدف می‌گرفت، اما خود `.kb` داخل سلول همچنان قانون قدیمی `text-align:left` را دریافت می‌کرد.

**اصلاح**
- در `public/fanaone-ui-fixes.css` محتوای KB و سلول‌های عنوان/متن مقاله در حالت RTL با `text-align:start` و `direction:rtl` تنظیم شد.
- فاصلهٔ قدیمی `padding-left` در `.kb_resume` به فاصلهٔ منطقی `padding-inline-start` منتقل شد.
- فاصلهٔ آیکون/لینک دانش نیز با ویژگی منطقی تنظیم شد.
- سلول‌های قدیمی فرم که صرفاً دکمهٔ «ارسال» دارند عمداً به‌صورت عمومی override نشدند.

### ۲) نوار پایینی صفحهٔ تیکت و سایر اشیای ITIL

**شاهد سورس**
- در `templates/components/itilobject/footer.html.twig` گروه `.timeline-buttons` ابتدا و گروه `.form-buttons` بعد از آن در یک نوار Flex قرار دارند.
- سند در حالت فارسی `dir=rtl` است؛ در نتیجه ترتیب Flex پیش‌فرض، گروه عملیات timeline را در سمت راست و گروه ذخیره/حذف فرم را در سمت چپ قرار می‌داد، در حالی که timeline در پنل چپ و فیلدهای فرم در پنل راست قرار دارند.
- همین قالب برای صفحه‌های مشترک Ticket / Problem / Change استفاده می‌شود.

**اصلاح**
- فقط نوار `#itil-footer .buttons-bar` در RTL از مسیر Flex چپ‌به‌راست استفاده می‌کند تا گروه اول زیر پنل timeline در چپ و گروه دوم زیر پنل فیلدها در راست قرار بگیرد.
- جهت داخلی گروه timeline حفظ شده و ترتیب دکمه‌های ذخیره/حذف نیز برای RTL به‌صورت آینه‌ای تنظیم شده است؛ منطق و نام دکمه‌ها بدون تغییر مانده‌اند.
- منطق submit، نام دکمه‌ها، CSRF، مجوزها و ساختار فرم تغییر نکرده است.

### ۳) زیرمنوی نوار کناری جمع‌شده

**شاهد سورس**
- قالب FanaOne نوار کناری عمودی را در سمت راست قرار می‌دهد.
- `css/includes/components/_global-menu.scss` در حالت `navbar-collapsed` زیرمنو را با `left: calc(100% + 1px)` باز می‌کرد؛ این موقعیت برای نوار کناری LTR است و در حالت RTL زیرمنو را به سمت بیرون صفحه می‌فرستد.

**اصلاح**
- در `public/fanaone-ux.css` فقط حالت دسکتاپِ منوی عمودیِ جمع‌شده در RTL به `right: calc(100% + 1px)` تغییر مسیر داده شد.
- محل pseudo-element و نشانگر active زیرمنو نیز در همان محدوده به سمت راست منتقل شد.
- منوی افقی و حالت بازِ نوار کناری تحت این قانون قرار نمی‌گیرند.

## محدودهٔ سورس‌هایی که برای جلوگیری از اصلاح بی‌دلیل مرور شدند

| بخش | فایل‌ها / ناحیه‌ها | تصمیم |
|---|---|---|
| پوسته و قالب اصلی | `templates/layout/parts/head.html.twig`, `css/palettes/fanava.scss` | ترتیب بارگذاری CSS و RTL پایه بررسی شد؛ رفتارهای عمدی LTR در ورودی تاریخ و گروه‌های Select2 حفظ شد |
| پایگاه دانش | `src/Knowbase.php`, `src/KnowbaseItem.php`, `css/legacy/includes/_styles.scss`, `public/fanaone-ui-fixes.css` | سه کلاس معنایی KB اصلاح شد؛ از override عمومی تمام کلاس‌های `.left` اجتناب شد |
| تیکت و ITIL | `templates/components/itilobject/footer.html.twig`, `layout.html.twig`, `css/includes/components/itilobject/_footer.scss`, `_layout.scss`, `_timeline.scss` | ترتیب دو گروه footer اصلاح شد؛ border و scrollbarهای دارای نقش مشخص حفظ شدند |
| منوی کناری | `css/includes/components/_global-menu.scss`, `css/palettes/fanava.scss` | فقط جهت flyout در حالت جمع‌شدهٔ RTL اصلاح شد |
| تاریخ و فرم‌های فارسی | `js/persian-ui.js`, `public/fanaone-ui-fixes.css`, بخش Select2/Flatpickr در `fanava.scss` | جاهایی که LTR برای ترتیب دکمه/مقدار تاریخ عمدی است تغییر نکرد |
| ورود و افزودن دارایی به تیکت | `public/css/golpakhsh-overrides.css` | قواعد فیزیکیِ محدود به login و Select2 کنترل‌شده بررسی شد؛ تغییر جدیدی لازم نبود |
| GenericObject | `plugins/genericobject/css/styles.css` | فقط فاصلهٔ آیکون/متن با padding فیزیکی دیده شد؛ بدون شاهد تصویری تغییر داده نشد |
| Formcreator | `plugins/formcreator/css/styles.scss` | تعدادی قاعدهٔ فیزیکی LTR در فرم‌ساز، کارت کاتالوگ و wizard وجود دارد؛ چون بعضی از آن‌ها با GridStack/drag-and-drop و موقعیت‌دهی منو مرتبط‌اند، بدون مشاهدهٔ صفحهٔ واقعی override نشدند و در تست staging علامت‌گذاری شدند |
| صفحه‌های مستندات | `css/includes/components/_documentation.scss` | موقعیت ثابتِ فهرست مستندات با مختصات چپ تعریف شده؛ تا زمان تأیید استفاده از این صفحه در رابط فارسی تغییر داده نشد |

## تست‌های خودکار اضافه‌شده

فایل `tests/ux/rtl-layout.test.cjs` موارد زیر را کنترل می‌کند:
1. override شدن کلاس‌های قدیمی KB در محدودهٔ RTL؛
2. عدم override عمومی تمام سلول‌های `.left`؛
3. ترتیب DOM گروه timeline و فرم در footer و جهت جداگانهٔ هر گروه؛
4. محدود ماندن تغییرات footer به حالت RTL؛
5. باز شدن زیرمنوی نوار کناری جمع‌شده به سمت محتوای صفحه.

Workflow `.github/workflows/ux-smoke.yml` اکنون همهٔ تست‌های `tests/ux/*.test.cjs` را اجرا می‌کند.

**نتیجهٔ اجرای CI روی commit `cf7f72c7`: موفق**  
- Push run: [45707559842](https://github.com/Amirhossein2323/fanaone-glpi-custom/actions/runs/45707559842)
- Pull request run: [45707569860](https://github.com/Amirhossein2323/fanaone-glpi-custom/actions/runs/45707569860)

## تست‌های لازم در محیط staging — هنوز انجام‌نشده

- [ ] پایگاه دانش: سه کارت در نقش helpdesk و حالت public، با متن فارسی و ترکیبی فارسی/انگلیسی
- [ ] صفحهٔ یک مقاله: عنوان، متن، محتوای Rich Text، پیوست و اطلاعات نویسنده
- [ ] تیکت: footer در عرض‌های 320، 768، 1024 و 1440 پیکسل
- [ ] تیکت: پنل فیلدها در حالت عادی، expanded و collapsed
- [ ] تیکت: ترتیب و عملکرد Save، Delete، Reply، dropdown و panel toggles
- [ ] منوی عمودی: حالت باز و جمع‌شده، باز شدن زیرمنو، hover و keyboard focus
- [ ] Formcreator: فرم نهایی کاربر، فهرست کاتالوگ، wizard و صفحهٔ طراحی/drag-and-drop
- [ ] مقایسهٔ اسکرین‌شات قبل/بعد و بررسی overflow افقی
- [ ] تست صفحه‌کلید و زوم 200٪

## مرز تغییرات

در این مرحله هیچ فایل PHP، route، database schema، permission یا منطق گردش کار تیکت تغییر نکرده است. هیچ منطق یا ساختار Twig تغییر نکرد؛ فقط مقدار نسخهٔ query-string دو فایل CSS در `templates/layout/parts/head.html.twig` برای cache-busting به‌روزرسانی شد. تغییرات ظاهری در دو فایل CSS و تست‌های ایستای مرتبط محدود مانده‌اند؛ workflow و مستندات نیز برای اجرای/ثبت آزمون به‌روزرسانی شدند.

تا زمان اجرای چک‌لیست staging، این اصلاحات باید در وضعیت Draft باقی بمانند و در `main` ادغام نشوند.
