<?php

include('../../../inc/includes.php');
Session::checkRight('config', UPDATE);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['save'])) {
        PluginFanaonesmsConfig::save($_POST);
        Session::addMessageAfterRedirect('تنظیمات پیامک ذخیره شد.', true, INFO);
        Html::redirect($_SERVER['PHP_SELF']);
    }
    if (isset($_POST['test'])) {
        $config = PluginFanaonesmsConfig::values();
        $result = PluginFanaonesmsSender::send(
            (string) ($_POST['test_mobile'] ?? ''),
            'پیام آزمایشی سامانه FanaOne',
            $config
        );
        Session::addMessageAfterRedirect($result['message'], true, $result['ok'] ? INFO : ERROR);
        Html::redirect($_SERVER['PHP_SELF']);
    }
}

$config = PluginFanaonesmsConfig::values();
$enabledEvents = json_decode((string) $config['events'], true) ?: [];

Html::header('پیامک کاوه‌نگار', $_SERVER['PHP_SELF'], 'config', 'plugins');
echo "<div class='container-xl fanaone-sms-config' dir='rtl'><div class='card'><div class='card-header'><h2 class='card-title'>تنظیمات پیامک کاوه‌نگار</h2></div><div class='card-body'>";
echo "<form method='post' action='" . Html::cleanInputText($_SERVER['PHP_SELF']) . "'>";
echo "<div class='mb-3 form-check form-switch'><input class='form-check-input' type='checkbox' name='enabled' id='sms_enabled' " . ((int) $config['enabled'] ? 'checked' : '') . "><label class='form-check-label' for='sms_enabled'>فعال‌سازی ارسال پیامک</label></div>";
echo "<div class='row g-3'><div class='col-md-6'><label class='form-label'>کلید API کاوه‌نگار</label><input class='form-control' type='password' name='api_key' value='' placeholder='" . (!empty($config['api_key']) ? 'کلید ذخیره شده است؛ برای حفظ آن خالی بگذارید' : 'کلید API را وارد کنید') . "' autocomplete='new-password'></div>";
echo "<div class='col-md-6'><label class='form-label'>شماره خط ارسال‌کننده</label><input class='form-control' type='text' name='sender' value='" . Html::cleanInputText($config['sender']) . "'></div>";
echo "<div class='col-md-6'><label class='form-label'>فیلد شماره گیرنده</label><select class='form-select' name='phone_field'>";
foreach (['mobile' => 'موبایل', 'phone' => 'تلفن اصلی', 'phone2' => 'تلفن دوم'] as $value => $label) {
    echo "<option value='$value' " . ($config['phone_field'] === $value ? 'selected' : '') . ">$label</option>";
}
echo "</select></div><div class='col-md-6'><label class='form-label'>پیشوند متن پیامک</label><input class='form-control' type='text' name='message_prefix' value='" . Html::cleanInputText($config['message_prefix']) . "'></div></div>";
echo "<h3 class='mt-4 mb-3'>رویدادهای مجاز برای ارسال پیامک</h3><div class='row'>";
foreach (PluginFanaonesmsConfig::eventLabels() as $event => $label) {
    $checked = in_array($event, $enabledEvents, true) ? 'checked' : '';
    echo "<div class='col-md-4 mb-2'><label class='form-check'><input class='form-check-input' type='checkbox' name='events[]' value='$event' $checked><span class='form-check-label'>$label</span></label></div>";
}
echo "</div><div class='mt-4'><button class='btn btn-primary' type='submit' name='save' value='1'><i class='ti ti-device-floppy'></i> ذخیره تنظیمات</button></div>";
Html::closeForm();

echo "<hr class='my-4'><h3>ارسال پیامک آزمایشی</h3>";
echo "<form method='post' action='" . Html::cleanInputText($_SERVER['PHP_SELF']) . "'>";
echo "<div class='input-group mt-3' style='max-width:32rem'><input class='form-control' type='tel' name='test_mobile' placeholder='09123456789' required><button class='btn btn-outline-primary' type='submit' name='test' value='1'><i class='ti ti-send'></i> ارسال آزمایشی</button></div>";
Html::closeForm();
echo "</div></div></div>";
Html::footer();
