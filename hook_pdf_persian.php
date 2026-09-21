<?php
/**
 * تبدیل تاریخ‌های میلادی به شمسی در خروجی PDF
 */

// تابع تبدیل میلادی به شمسی
function convertDateToJalali($date_str) {
    // اگر تاریخ خالی بود، همان را برگردان
    if (empty($date_str)) return $date_str;

    // الگوی پیدا کردن تاریخ (YYYY-MM-DD)
    // این الگو تاریخ‌هایی مثل 2026-01-07 را پیدا می‌کند
    $pattern = '/(\d{4})-(\d{2})-(\d{2})/';

    // تابع جایگزینی برای هر تاریخ پیدا شده
    $callback = function($matches) {
        $g_y = $matches[1];
        $g_m = $matches[2];
        $g_d = $matches[3];

        // الگوریتم تبدیل
        $g_days_in_month = array(31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31);
        $j_days_in_month = array(31, 31, 31, 31, 31, 31, 30, 30, 30, 30, 30, 29);

        $gy = $g_y - 1600;
        $gm = $g_m - 1;
        $gd = $g_d - 1;

        $g_day_no = 365 * $gy + floor(($gy + 3) / 4) - floor(($gy + 99) / 100) + floor(($gy + 399) / 400);

        for ($i = 0; $i < $gm; ++$i)
            $g_day_no += $g_days_in_month[$i];
        if ($gm > 1 && (($gy % 4 == 0 && $gy % 100 != 0) || ($gy % 400 == 0)))
            ++$g_day_no;
        $g_day_no += $gd;

        $j_day_no = $g_day_no - 79;

        $j_np = floor($j_day_no / 12053);
        $j_day_no %= 12053;

        $jy = 979 + 33 * $j_np + 4 * floor($j_day_no / 1461);
        $j_day_no %= 1461;

        if ($j_day_no >= 366) {
            $jy += floor(($j_day_no - 1) / 365);
            $j_day_no = ($j_day_no - 1) % 365;
        }

        for ($i = 0; $i < 11 && $j_day_no >= $j_days_in_month[$i]; ++$i)
            $j_day_no -= $j_days_in_month[$i];
        $jm = $i + 1;
        $jd = $j_day_no + 1;

        return sprintf("%04d/%02d/%02d", $jy, $jm, $jd);
    };

    // اجرای جایگزینی روی متن
    return preg_replace_callback($pattern, $callback, $date_str);
}

// ثبت هوک در GLPI
// این هوک قبل از نمایش هر سلول در PDF اجرا می‌شود
$GLOBALS['PLUGIN_HOOKS']['display_pdf']['persian_date'] = 'hook_pdf_display_jalali';

function hook_pdf_display_jalali($params) {
    if (isset($params['item']) && isset($params['value'])) {
        // اگر مقدار شامل تاریخ بود، تبدیل کن
        $params['value'] = convertDateToJalali($params['value']);
    }
    return $params;
}
