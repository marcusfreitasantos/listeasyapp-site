<?php

declare(strict_types=1);

$mailConfig = [
    'host' => getenv('SMTP_HOST') ?: 'smtp.titan.email',
    'port' => (int) (getenv('SMTP_PORT') ?: 465),
    'encryption' => getenv('SMTP_ENCRYPTION') ?: 'ssl',
    'username' => getenv('SMTP_USERNAME') ?: 'support@listeasyapp.work.gd',
    'password' => getenv('SMTP_PASSWORD') ?: '',
    'from_email' => getenv('MAIL_FROM_ADDRESS') ?: 'support@listeasyapp.work.gd',
    'from_name' => getenv('MAIL_FROM_NAME') ?: 'ListEasy Support',
    'support_email' => getenv('SUPPORT_EMAIL') ?: 'support@listeasyapp.work.gd',
];

$localMailConfig = __DIR__ . '/mail.local.php';

if (is_file($localMailConfig)) {
    $mailConfig = array_merge($mailConfig, require $localMailConfig);
}

return $mailConfig;
