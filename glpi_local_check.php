<?php
/**
 * GLPI local read-only diagnostic. Does not change application or database.
 * Remove after checking.
 */
if (!in_array($_SERVER['REMOTE_ADDR'] ?? '', ['127.0.0.1', '::1'], true)) {
    http_response_code(403);
    exit('This diagnostic may only be accessed from localhost.');
}
header('Content-Type: text/html; charset=utf-8');
$root = __DIR__;
$checks = [
    'Main index.php'           => is_file($root . '/index.php'),
    'Install install.php'      => is_file($root . '/install/install.php'),
    'Install install.php.bak'  => is_file($root . '/install/install.php.bak'),
    'Database config.php'      => is_file($root . '/config/config_db.php'),
    'Database config.php.bak'  => is_file($root . '/config/config_db.php.bak'),
    'Vendor autoload.php'      => is_file($root . '/vendor/autoload.php'),
    'SQL schema file'          => is_file($root . '/install/mysql/glpi-empty.sql'),
    'Config writable'          => is_writable($root . '/config'),
    'Files writable'           => is_writable($root . '/files'),
];
$extensions = ['intl','mysqli','curl','gd','mbstring','dom','simplexml','xmlreader','xmlwriter','zlib','zip'];
function h($s) {return htmlspecialchars((string)$s, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');}
$dirurl = rtrim(str_replace('\\','/',dirname($_SERVER['SCRIPT_NAME'] ?? '/')), '/');
$versionok = version_compare(PHP_VERSION, '7.4.0', '>=') && version_compare(PHP_VERSION,'8.3.0','<');
?>
<!doctype html><html lang="en"><head><meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1">
<title>GLPI Local Check</title>
<style>body{font:16px system-ui,Arial;max-width:850px;margin:30px auto;padding:15px;color:#1d2939}table{border-collapse:collapse;width:100%;margin:15px 0}td,th{border:1px solid #ddd;padding:10px;text-align:left}th{background:#f5f6f8}.yes{color:#067647;font-weight:bold}.no{color:#b42318;font-weight:bold}code{word-break:break-all;background:#f2f4f7;padding:2px 4px}h1,h2{color:#123c62}p{line-height:1.6}</style>
</head><body>
<h1>GLPI local installation diagnostics</h1>
<p>Read only - no project files, database, or settings are modified.</p>
<p><b>Actual application directory:</b> <code><?= h($root) ?></code></p>
<p><b>PHP version:</b> <?= h(PHP_VERSION) ?> &mdash; <span class="<?= $versionok?'yes':'no' ?>"><?= $versionok?'Supported by the uploaded project entry point':'Outside the version range in the project entry point' ?></span></p>
<p><b>Expected installer URL:</b> <code><?= h($dirurl . '/install/install.php') ?></code></p>
<h2>Project files</h2><table><tr><th>Check</th><th>Result</th></tr>
<?php foreach ($checks as $title => $ok): ?>
<tr><td><?= h($title) ?></td><td class="<?= $ok?'yes':'no' ?>"><?= $ok?'YES':'NO' ?></td></tr>
<?php endforeach; ?></table>
<h2>PHP extensions</h2><table><tr><th>Extension</th><th>Loaded?</th></tr>
<?php foreach ($extensions as $ext): $ok=extension_loaded($ext); ?>
<tr><td><?= h($ext) ?></td><td class="<?= $ok?'yes':'no' ?>"><?= $ok?'YES':'NO' ?></td></tr>
<?php endforeach; ?></table>
<p><b>Note:</b> The setup may need a database that contains no tables. Do not install over a database holding important information.</p>
<p><b>Security:</b> Delete <code>glpi_local_check.php</code> from the web directory after troubleshooting.</p>
</body></html>
