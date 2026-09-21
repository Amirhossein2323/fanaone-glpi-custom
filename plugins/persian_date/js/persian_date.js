function loadScript(src, callback) {
    let script = document.createElement('script');
    script.src = src;
    script.onload = callback;
    script.onerror = function() {
        console.error("Failed to load script from: " + src);
    };
    document.head.appendChild(script);
}

loadScript('/plugins/persian_date/lib/jdate.min.js', () => {
    console.log('jalali-date loaded successfully');
    convertTextNodesToPersianDate(document.body);
});

function convertTextNodesToPersianDate(root) {
    const walker = document.createTreeWalker(
        root,
        NodeFilter.SHOW_TEXT,
        null,
        false
    );

    // فقط سال‌های میلادی 1900–2099
    const dateTimeRegex = /\b(19|20)\d{2}[-/]\d{1,2}[-/]\d{1,2} \d{2}:\d{2}\b/g;
    const dateOnlyRegex = /\b(19|20)\d{2}[-/]\d{1,2}[-/]\d{1,2}\b/g;
    // برای YYYY-MM فقط خط‌تیره تا خروجی جلالی (که با / است) دوباره match نشود
    const yearMonthRegex = /\b(19|20)\d{2}-\d{1,2}\b/g;

    let node;
    while (node = walker.nextNode()) {
        let text = node.nodeValue;
        let newText = text;

        // تاریخ و ساعت
        const dateTimeMatches = text.match(dateTimeRegex) || [];
        dateTimeMatches.forEach(dateStr => {
            const parts = dateStr.split(/[-: ]/);
            const year = parseInt(parts[0], 10);
            const month = parseInt(parts[1], 10) - 1;
            const day = parseInt(parts[2], 10);
            const hour = parseInt(parts[3], 10);
            const minute = parseInt(parts[4], 10);

            const gregorianDate = new Date(year, month, day, hour, minute);
            const jdate = new JDate(gregorianDate);

            const persianDateStr = `${jdate.getFullYear()}/${jdate.getMonth().toString().padStart(2, '0')}/${jdate.getDate().toString().padStart(2, '0')} ${hour.toString().padStart(2, '0')}:${minute.toString().padStart(2, '0')}`;
            newText = newText.replace(dateStr, persianDateStr);
        });

        // تاریخ کامل (سال-ماه-روز)
        const dateOnlyMatches = text.match(dateOnlyRegex) || [];
        dateOnlyMatches.forEach(dateStr => {
            // اگر به‌همراه ساعت تبدیل شده، رها کن
            if (dateTimeMatches.some(dt => dt.startsWith(dateStr))) return;

            const parts = dateStr.split(/[-/]/);
            const year = parseInt(parts[0], 10);
            const month = parseInt(parts[1], 10) - 1;
            const day = parseInt(parts[2], 10);

            const gregorianDate = new Date(year, month, day);
            const jdate = new JDate(gregorianDate);

            const persianDateStr = `${jdate.getFullYear()}/${jdate.getMonth().toString().padStart(2, '0')}/${jdate.getDate().toString().padStart(2, '0')}`;
            newText = newText.replace(dateStr, persianDateStr);
        });

        // تاریخ کوتاه (فقط سال-ماه با خط‌تیره)
        const yearMonthMatches = text.match(yearMonthRegex) || [];
        yearMonthMatches.forEach(dateStr => {
            // اگر تاریخ کامل شروع‌شده با همین الگو وجود دارد، دوباره تبدیل نکن
            if (dateOnlyMatches.some(d => d.startsWith(dateStr))) return;

            const parts = dateStr.split(/-/);
            const year = parseInt(parts[0], 10);
            const month = parseInt(parts[1], 10) - 1;

            // روز وسط ماه برای پایداری تبدیل
            const gregorianDate = new Date(year, month, 15);
            const jdate = new JDate(gregorianDate);

            // فقط سال/ماه جلالی
            const persianDateStr = `${jdate.getFullYear()}/${jdate.getMonth().toString().padStart(2, '0')}`;
            newText = newText.replace(dateStr, persianDateStr);
        });

        if (newText !== text) {
            node.nodeValue = newText;
        }
    }
}

// جلوگیری از تبدیل‌های تکراری روی نودهای جدید
const observer = new MutationObserver(function(mutations) {
    mutations.forEach(function(mutation) {
        mutation.addedNodes.forEach(function(node) {
            if (node.nodeType === Node.TEXT_NODE || node.nodeType === Node.ELEMENT_NODE) {
                convertTextNodesToPersianDate(node);
            }
        });
    });
});

observer.observe(document.body, {
    childList: true,
    subtree: true
});
