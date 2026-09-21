<?php

define('PLUGIN_FANAONESMS_VERSION', '1.0.0');
define('PLUGIN_FANAONESMS_MIN_GLPI', '10.0.0');
define('PLUGIN_FANAONESMS_MAX_GLPI', '10.1.0');

function plugin_init_fanaonesms()
{
    global $PLUGIN_HOOKS;

    $PLUGIN_HOOKS['csrf_compliant']['fanaonesms'] = true;
    $PLUGIN_HOOKS['config_page']['fanaonesms'] = 'front/config.php';
    $PLUGIN_HOOKS['item_add']['fanaonesms'] = 'plugin_fanaonesms_item_add';
    $PLUGIN_HOOKS['item_update']['fanaonesms'] = 'plugin_fanaonesms_item_update';
    $PLUGIN_HOOKS['secured_configs']['fanaonesms'] = ['api_key'];

    Plugin::registerClass('PluginFanaonesmsConfig');
    Plugin::registerClass('PluginFanaonesmsSender');
}

function plugin_version_fanaonesms()
{
    return [
        'name'           => 'پیامک کاوه‌نگار FanaOne',
        'version'        => PLUGIN_FANAONESMS_VERSION,
        'author'         => 'FanaOne',
        'license'        => 'GPLv3+',
        'homepage'       => 'https://kavenegar.com/',
        'requirements'   => [
            'glpi' => [
                'min' => PLUGIN_FANAONESMS_MIN_GLPI,
                'max' => PLUGIN_FANAONESMS_MAX_GLPI,
            ],
        ],
    ];
}

function plugin_fanaonesms_check_prerequisites()
{
    return version_compare(GLPI_VERSION, PLUGIN_FANAONESMS_MIN_GLPI, '>=')
        && version_compare(GLPI_VERSION, PLUGIN_FANAONESMS_MAX_GLPI, '<');
}

function plugin_fanaonesms_check_config($verbose = false)
{
    return true;
}
