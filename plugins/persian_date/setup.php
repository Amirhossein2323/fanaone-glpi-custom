<?php

function plugin_init_persian_date() {
    global $PLUGIN_HOOKS;

    $PLUGIN_HOOKS['add_javascript']['persian_date'] = 'js/persian_date.js';
    $PLUGIN_HOOKS['csrf_compliant']['persian_date'] = true;
}

function plugin_version_persian_date() {
    return [
        'name'           => "Persian Date",
        'version'        => '1.0.0',
        'author'         => 'Emran Rostamzadeh', 
        'license'        => 'GPLv2+',
        'homepage'       => '',
        'minGlpiVersion' => '10.0.0'
    ];
}

function plugin_persian_date_check_prerequisites() {
    return true;
}

function plugin_persian_date_check_config() {
    return true;
}

function plugin_persian_date_install() {
    return true;
}

function plugin_persian_date_uninstall() {
    return true;
}

function plugin_persian_date_is_csrf_compliant() {
    return true;
}

