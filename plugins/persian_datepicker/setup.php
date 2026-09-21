<?php
function plugin_init_persian_datepicker() {
    global $PLUGIN_HOOKS;

    $PLUGIN_HOOKS['add_javascript']['persian_datepicker'] = [
    'lib/date-picker/jdate.main.js',
    'lib/date-picker/jalalidatepicker.min.js',
    'js/persian_datepicker_override.js'
    ];

    $PLUGIN_HOOKS['add_css']['persian_datepicker'] = [
        'lib/date-picker/jalalidatepicker.min.css'
    ];

    $PLUGIN_HOOKS['csrf_compliant']['persian_datepicker'] = true;
}

function plugin_version_persian_datepicker() {
    return [
        'name'           => "Persian Datepicker",
        'version'        => '1.0.0',
        'author'         => 'Emran Rostamzadeh',
        'license'        => 'GPLv3',
        'minGlpiVersion' => '10.0'
    ];
}

function plugin_persian_datepicker_check_prerequisites() {
    return true;
}

function plugin_persian_datepicker_check_config() {
    return true;
}

function plugin_persian_datepicker_install() {
    return true;
}

function plugin_persian_datepicker_uninstall() {
    return true;
}

function plugin_persian_datepicker_is_csrf_compliant() {
    return true;
}
