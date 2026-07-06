<?php

declare(strict_types=1);

require __DIR__ . '/config/i18n.php';
require __DIR__ . '/lib/smtp-mailer.php';

$pageTitle = t('support.title');
$mailConfig = require __DIR__ . '/config/mail.php';
$supportEmail = (string) $mailConfig['support_email'];
$formStatus = null;
$formMessage = null;
$formValues = [
    'name' => '',
    'email' => '',
    'subject' => '',
    'device' => '',
    'message' => '',
];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    foreach ($formValues as $field => $value) {
        $formValues[$field] = trim((string) ($_POST[$field] ?? ''));
    }

    $honeypot = trim((string) ($_POST['website'] ?? ''));
    $requiredFields = $formValues['name'] !== ''
        && $formValues['email'] !== ''
        && $formValues['subject'] !== ''
        && $formValues['message'] !== '';

    if ($honeypot !== '') {
        $formStatus = 'success';
        $formMessage = t('support.form_success');
    } elseif (!$requiredFields) {
        $formStatus = 'error';
        $formMessage = t('support.form_required');
    } elseif (!filter_var($formValues['email'], FILTER_VALIDATE_EMAIL)) {
        $formStatus = 'error';
        $formMessage = t('support.form_invalid_email');
    } else {
        $safeName = trim(preg_replace('/[\r\n]+/', ' ', $formValues['name']) ?? '');
        $safeEmail = trim(preg_replace('/[\r\n]+/', '', $formValues['email']) ?? '');
        $safeSubject = substr(trim(preg_replace('/[\r\n]+/', ' ', $formValues['subject']) ?? ''), 0, 120);
        $subject = 'ListEasy Support: ' . $safeSubject;
        $body = implode("\n\n", [
            'New ListEasy support request',
            'Name: ' . $safeName,
            'Email: ' . $safeEmail,
            'Device/app version: ' . ($formValues['device'] !== '' ? $formValues['device'] : 'Not provided'),
            'Message:',
            $formValues['message'],
        ]);
        if (smtp_send_mail($mailConfig, $supportEmail, $subject, $body, $safeEmail, $safeName)) {
            $formStatus = 'success';
            $formMessage = t('support.form_success');
            $formValues = array_fill_keys(array_keys($formValues), '');
        } else {
            $formStatus = 'error';
            $formMessage = t('support.form_error');
        }
    }
}

$supportCards = [
    [
        'title' => t('support.card_1_title'),
        'text' => t('support.card_1_text'),
    ],
    [
        'title' => t('support.card_2_title'),
        'text' => t('support.card_2_text'),
    ],
    [
        'title' => t('support.card_3_title'),
        'text' => t('support.card_3_text'),
    ],
];

require __DIR__ . '/components/header.php';
?>
<section class="support-page">
    <div class="container support-hero">
        <div>
            <span class="kicker"><?= htmlspecialchars(t('support.kicker'), ENT_QUOTES, 'UTF-8') ?></span>
            <h1><?= htmlspecialchars(t('support.heading'), ENT_QUOTES, 'UTF-8') ?></h1>
            <p><?= htmlspecialchars(t('support.intro'), ENT_QUOTES, 'UTF-8') ?></p>
        </div>
        <div class="support-meta">
            <div>
                <span><?= htmlspecialchars(t('support.response_time_label'), ENT_QUOTES, 'UTF-8') ?></span>
                <strong><?= htmlspecialchars(t('support.response_time_text'), ENT_QUOTES, 'UTF-8') ?></strong>
            </div>
            <div>
                <span><?= htmlspecialchars(t('support.email_label'), ENT_QUOTES, 'UTF-8') ?></span>
                <strong><?= htmlspecialchars(t('support.email_text'), ENT_QUOTES, 'UTF-8') ?></strong>
            </div>
        </div>
    </div>

    <div class="container support-grid">
        <?php foreach ($supportCards as $card): ?>
            <article class="support-card">
                <h2><?= htmlspecialchars($card['title'], ENT_QUOTES, 'UTF-8') ?></h2>
                <p><?= htmlspecialchars($card['text'], ENT_QUOTES, 'UTF-8') ?></p>
            </article>
        <?php endforeach; ?>
    </div>

    <div class="container support-privacy">
        <div>
            <h2><?= htmlspecialchars(t('support.privacy_title'), ENT_QUOTES, 'UTF-8') ?></h2>
            <p><?= htmlspecialchars(t('support.privacy_text'), ENT_QUOTES, 'UTF-8') ?></p>
        </div>
        <a class="button button-ghost" href="<?= htmlspecialchars(page_url('privacy-policy.php'), ENT_QUOTES, 'UTF-8') ?>"><?= htmlspecialchars(t('support.privacy_link'), ENT_QUOTES, 'UTF-8') ?></a>
    </div>

    <div class="container support-form-section">
        <div class="section-heading">
            <span class="kicker"><?= htmlspecialchars(t('support.kicker'), ENT_QUOTES, 'UTF-8') ?></span>
            <h2><?= htmlspecialchars(t('support.form_title'), ENT_QUOTES, 'UTF-8') ?></h2>
            <p><?= htmlspecialchars(t('support.form_text'), ENT_QUOTES, 'UTF-8') ?></p>
        </div>

        <?php if ($formMessage !== null): ?>
            <div class="form-alert form-alert-<?= htmlspecialchars((string) $formStatus, ENT_QUOTES, 'UTF-8') ?>" role="status">
                <?= htmlspecialchars($formMessage, ENT_QUOTES, 'UTF-8') ?>
            </div>
        <?php endif; ?>

        <form class="support-form" action="<?= htmlspecialchars(page_url('support.php'), ENT_QUOTES, 'UTF-8') ?>" method="post">
            <div class="form-row">
                <label>
                    <span><?= htmlspecialchars(t('support.form_name'), ENT_QUOTES, 'UTF-8') ?></span>
                    <input type="text" name="name" value="<?= htmlspecialchars($formValues['name'], ENT_QUOTES, 'UTF-8') ?>" required autocomplete="name">
                </label>
                <label>
                    <span><?= htmlspecialchars(t('support.form_email'), ENT_QUOTES, 'UTF-8') ?></span>
                    <input type="email" name="email" value="<?= htmlspecialchars($formValues['email'], ENT_QUOTES, 'UTF-8') ?>" required autocomplete="email">
                </label>
            </div>
            <label>
                <span><?= htmlspecialchars(t('support.form_subject'), ENT_QUOTES, 'UTF-8') ?></span>
                <input type="text" name="subject" value="<?= htmlspecialchars($formValues['subject'], ENT_QUOTES, 'UTF-8') ?>" required>
            </label>
            <label>
                <span><?= htmlspecialchars(t('support.form_device'), ENT_QUOTES, 'UTF-8') ?></span>
                <input type="text" name="device" value="<?= htmlspecialchars($formValues['device'], ENT_QUOTES, 'UTF-8') ?>">
            </label>
            <label>
                <span><?= htmlspecialchars(t('support.form_message'), ENT_QUOTES, 'UTF-8') ?></span>
                <textarea name="message" rows="7" required><?= htmlspecialchars($formValues['message'], ENT_QUOTES, 'UTF-8') ?></textarea>
            </label>
            <label class="form-honeypot" aria-hidden="true">
                <span>Website</span>
                <input type="text" name="website" tabindex="-1" autocomplete="off">
            </label>
            <button class="button" type="submit"><?= htmlspecialchars(t('support.form_submit'), ENT_QUOTES, 'UTF-8') ?></button>
        </form>
    </div>
</section>
<?php require __DIR__ . '/components/footer.php'; ?>
