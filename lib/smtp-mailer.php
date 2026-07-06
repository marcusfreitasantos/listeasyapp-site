<?php

declare(strict_types=1);

function smtp_send_mail(array $config, string $to, string $subject, string $body, string $replyToEmail, string $replyToName): bool
{
    $host = (string) ($config['host'] ?? '');
    $port = (int) ($config['port'] ?? 465);
    $username = (string) ($config['username'] ?? '');
    $password = (string) ($config['password'] ?? '');
    $fromEmail = (string) ($config['from_email'] ?? $username);
    $fromName = (string) ($config['from_name'] ?? 'ListEasy Support');
    $encryption = (string) ($config['encryption'] ?? 'ssl');

    if ($host === '' || $username === '' || $password === '' || $fromEmail === '') {
        error_log('SMTP mail configuration is incomplete.');
        return false;
    }

    $transport = $encryption === 'ssl' ? 'ssl://' : '';
    $socket = @stream_socket_client(
        $transport . $host . ':' . $port,
        $errno,
        $errstr,
        20,
        STREAM_CLIENT_CONNECT
    );

    if (!is_resource($socket)) {
        error_log(sprintf('SMTP connection failed: %s (%d)', $errstr, $errno));
        return false;
    }

    stream_set_timeout($socket, 20);

    try {
        smtp_expect($socket, [220]);
        smtp_command($socket, 'EHLO ' . smtp_local_hostname(), [250]);

        if ($encryption === 'tls') {
            smtp_command($socket, 'STARTTLS', [220]);
            if (!stream_socket_enable_crypto($socket, true, STREAM_CRYPTO_METHOD_TLS_CLIENT)) {
                throw new RuntimeException('SMTP STARTTLS negotiation failed.');
            }
            smtp_command($socket, 'EHLO ' . smtp_local_hostname(), [250]);
        }

        smtp_command($socket, 'AUTH LOGIN', [334]);
        smtp_command($socket, base64_encode($username), [334]);
        smtp_command($socket, base64_encode($password), [235]);
        smtp_command($socket, 'MAIL FROM:<' . $fromEmail . '>', [250]);
        smtp_command($socket, 'RCPT TO:<' . $to . '>', [250, 251]);
        smtp_command($socket, 'DATA', [354]);

        $headers = [
            'Date: ' . date(DATE_RFC2822),
            'From: ' . smtp_format_address($fromEmail, $fromName),
            'Reply-To: ' . smtp_format_address($replyToEmail, $replyToName),
            'To: ' . $to,
            'Subject: ' . smtp_encode_header($subject),
            'MIME-Version: 1.0',
            'Content-Type: text/plain; charset=UTF-8',
            'Content-Transfer-Encoding: 8bit',
        ];

        fwrite($socket, implode("\r\n", $headers) . "\r\n\r\n" . smtp_dot_stuff($body) . "\r\n.\r\n");
        smtp_expect($socket, [250]);
        smtp_command($socket, 'QUIT', [221]);
        fclose($socket);

        return true;
    } catch (RuntimeException $exception) {
        error_log('SMTP send failed: ' . $exception->getMessage());
        @fwrite($socket, "QUIT\r\n");
        fclose($socket);
        return false;
    }
}

function smtp_command($socket, string $command, array $expectedCodes): string
{
    fwrite($socket, $command . "\r\n");
    return smtp_expect($socket, $expectedCodes);
}

function smtp_expect($socket, array $expectedCodes): string
{
    $response = '';

    while (($line = fgets($socket, 515)) !== false) {
        $response .= $line;

        if (strlen($line) >= 4 && $line[3] === ' ') {
            $code = (int) substr($line, 0, 3);

            if (!in_array($code, $expectedCodes, true)) {
                throw new RuntimeException(trim($response));
            }

            return $response;
        }
    }

    throw new RuntimeException('SMTP server did not return a complete response.');
}

function smtp_format_address(string $email, string $name): string
{
    $email = trim(str_replace(["\r", "\n"], '', $email));
    $name = trim(str_replace(["\r", "\n", '"'], [' ', ' ', ''], $name));

    if ($name === '') {
        return '<' . $email . '>';
    }

    return '"' . smtp_encode_header($name) . '" <' . $email . '>';
}

function smtp_encode_header(string $value): string
{
    if (preg_match('/[^\x20-\x7E]/', $value) !== 1) {
        return str_replace(["\r", "\n"], '', $value);
    }

    return '=?UTF-8?B?' . base64_encode($value) . '?=';
}

function smtp_dot_stuff(string $body): string
{
    $normalized = str_replace(["\r\n", "\r"], "\n", $body);
    $lines = explode("\n", $normalized);

    foreach ($lines as $index => $line) {
        if (isset($line[0]) && $line[0] === '.') {
            $lines[$index] = '.' . $line;
        }
    }

    return implode("\r\n", $lines);
}

function smtp_local_hostname(): string
{
    $host = gethostname();

    return is_string($host) && $host !== '' ? $host : 'localhost';
}
