<?php

class PluginFanaonesmsConfig extends CommonDBTM
{
    public static function defaults(): array
    {
        return [
            'enabled'         => 0,
            'api_key'         => '',
            'sender'          => '',
            'phone_field'     => 'mobile',
            'events'          => json_encode(['ticket_new'], JSON_UNESCAPED_UNICODE),
            'message_prefix'  => 'FanaOne',
        ];
    }

    public static function values(): array
    {
        $values = array_merge(
            self::defaults(),
            Config::getConfigurationValues('plugin:fanaonesms')
        );
        if (!empty($values['api_key'])) {
            $values['api_key'] = (new GLPIKey())->decrypt((string) $values['api_key']);
        }
        return $values;
    }

    public static function eventLabels(): array
    {
        return [
            'ticket_new'     => 'ثبت درخواست جدید',
            'ticket_update'  => 'ویرایش درخواست',
            'ticket_solved'  => 'حل شدن درخواست',
            'ticket_closed'  => 'بسته شدن درخواست',
            'followup_add'   => 'ثبت پیگیری جدید',
            'task_add'       => 'ثبت وظیفه جدید',
        ];
    }

    public static function save(array $input): void
    {
        $current = self::values();
        $apiKey = trim((string) ($input['api_key'] ?? ''));
        if ($apiKey === '') {
            $apiKey = (string) $current['api_key'];
        }
        $events = array_values(array_intersect(
            array_keys(self::eventLabels()),
            (array) ($input['events'] ?? [])
        ));
        Config::setConfigurationValues('plugin:fanaonesms', [
            'enabled'        => isset($input['enabled']) ? 1 : 0,
            'api_key'        => $apiKey,
            'sender'         => trim((string) ($input['sender'] ?? '')),
            'phone_field'    => in_array(($input['phone_field'] ?? ''), ['mobile', 'phone', 'phone2'], true)
                ? $input['phone_field'] : 'mobile',
            'events'         => json_encode($events, JSON_UNESCAPED_UNICODE),
            'message_prefix' => trim((string) ($input['message_prefix'] ?? 'FanaOne')),
        ]);
    }
}
