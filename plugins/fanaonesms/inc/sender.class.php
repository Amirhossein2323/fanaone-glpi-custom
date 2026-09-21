<?php

class PluginFanaonesmsSender
{
    public static function notify(string $event, Ticket $ticket): void
    {
        $config = PluginFanaonesmsConfig::values();
        $events = json_decode((string) $config['events'], true) ?: [];
        if (!(int) $config['enabled'] || !in_array($event, $events, true) || empty($config['api_key'])) {
            return;
        }

        foreach (self::requesterMobiles($ticket, (string) $config['phone_field']) as $mobile) {
            self::send($mobile, self::message($event, $ticket, (string) $config['message_prefix']), $config);
        }
    }

    public static function send(string $receptor, string $message, array $config = []): array
    {
        $config = array_merge(PluginFanaonesmsConfig::values(), $config);
        $receptor = self::normalizeMobile($receptor);
        if (!$receptor || empty($config['api_key'])) {
            return ['ok' => false, 'message' => 'شماره موبایل یا کلید API معتبر نیست.'];
        }

        $url = 'https://api.kavenegar.com/v1/' . rawurlencode((string) $config['api_key']) . '/sms/send.json';
        $curl = curl_init($url);
        curl_setopt_array($curl, [
            CURLOPT_POST           => true,
            CURLOPT_POSTFIELDS     => http_build_query([
                'receptor' => $receptor,
                'sender'   => (string) $config['sender'],
                'message'  => $message,
            ]),
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_CONNECTTIMEOUT => 8,
            CURLOPT_TIMEOUT        => 15,
            CURLOPT_HTTPHEADER     => ['Accept: application/json', 'Content-Type: application/x-www-form-urlencoded'],
        ]);
        $body = curl_exec($curl);
        $error = curl_error($curl);
        $statusCode = (int) curl_getinfo($curl, CURLINFO_HTTP_CODE);
        curl_close($curl);

        $response = json_decode((string) $body, true);
        $apiStatus = (int) ($response['return']['status'] ?? 0);
        $ok = $statusCode === 200 && $apiStatus === 200;
        $result = [
            'ok'      => $ok,
            'message' => $ok ? 'پیامک با موفقیت ارسال شد.' : ($response['return']['message'] ?? $error ?: 'خطا در ارتباط با کاوه‌نگار'),
        ];
        if (!$ok) {
            Toolbox::logError('FanaOne SMS: ' . $result['message']);
        }
        return $result;
    }

    private static function requesterMobiles(Ticket $ticket, string $field): array
    {
        global $DB;
        $mobiles = [];
        $iterator = $DB->request([
            'SELECT' => ['users_id'],
            'FROM'   => 'glpi_tickets_users',
            'WHERE'  => ['tickets_id' => (int) $ticket->getID(), 'type' => CommonITILActor::REQUESTER],
        ]);
        foreach ($iterator as $row) {
            $user = new User();
            if ($user->getFromDB((int) $row['users_id'])) {
                $mobile = self::normalizeMobile((string) ($user->fields[$field] ?? ''));
                if ($mobile) {
                    $mobiles[] = $mobile;
                }
            }
        }
        return array_values(array_unique($mobiles));
    }

    private static function message(string $event, Ticket $ticket, string $prefix): string
    {
        $labels = PluginFanaonesmsConfig::eventLabels();
        $title = trim(strip_tags((string) ($ticket->fields['name'] ?? '')));
        $title = function_exists('mb_substr') ? mb_substr($title, 0, 80) : substr($title, 0, 80);
        return trim($prefix . "\n" . ($labels[$event] ?? 'اعلان درخواست') . "\nشماره: " . $ticket->getID() . "\n" . $title);
    }

    private static function normalizeMobile(string $mobile): string
    {
        $mobile = preg_replace('/\D+/', '', $mobile);
        if (str_starts_with($mobile, '0098')) {
            $mobile = '0' . substr($mobile, 4);
        } elseif (str_starts_with($mobile, '98') && strlen($mobile) === 12) {
            $mobile = '0' . substr($mobile, 2);
        }
        return preg_match('/^09\d{9}$/', $mobile) ? $mobile : '';
    }
}
