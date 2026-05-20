<?php

declare(strict_types=1);

if (!isset($site)) {
    require __DIR__ . '/../config/i18n.php';
}

$currentPath = basename(parse_url($_SERVER['REQUEST_URI'] ?? 'index.php', PHP_URL_PATH) ?: 'index.php');
$isHomePage = $currentPath === 'index.php' || $currentPath === '';
$localeData = locale_meta();
$homeBenefitsUrl = $isHomePage ? '#beneficios' : page_url('index.php', [], 'beneficios');
$homeFeaturesUrl = $isHomePage ? '#recursos' : page_url('index.php', [], 'recursos');
$homeScreensUrl = $isHomePage ? '#galeria' : page_url('index.php', [], 'galeria');
$homeDownloadUrl = $isHomePage ? '#download' : page_url('index.php', [], 'download');
?><!DOCTYPE html>
<html lang="<?= htmlspecialchars($localeData['html_lang'], ENT_QUOTES, 'UTF-8') ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($pageTitle ?? ($site['name'] . ' | Landing Page'), ENT_QUOTES, 'UTF-8') ?></title>
    <meta name="description" content="<?= htmlspecialchars(t('site.description'), ENT_QUOTES, 'UTF-8') ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;700;800&family=Sora:wght@600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="public/assets/css/style.css">
    <link rel="icon" type="image/x-icon" href="assets/favicon.png">
</head>
<body>
<div class="site-shell">
    <header class="site-header">
        <div class="container header-inner">
            <a class="brand" href="<?= htmlspecialchars(page_url('index.php'), ENT_QUOTES, 'UTF-8') ?>">
                <img src="<?= htmlspecialchars($site['logo_path'], ENT_QUOTES, 'UTF-8') ?>" alt="<?= htmlspecialchars($site['name'], ENT_QUOTES, 'UTF-8') ?>">
            </a>
            <nav class="site-nav" aria-label="<?= htmlspecialchars(t('nav.features'), ENT_QUOTES, 'UTF-8') ?>">
                <a href="<?= htmlspecialchars($homeBenefitsUrl, ENT_QUOTES, 'UTF-8') ?>"><?= htmlspecialchars(t('nav.benefits'), ENT_QUOTES, 'UTF-8') ?></a>
                <a href="<?= htmlspecialchars($homeFeaturesUrl, ENT_QUOTES, 'UTF-8') ?>"><?= htmlspecialchars(t('nav.features'), ENT_QUOTES, 'UTF-8') ?></a>
                <a href="<?= htmlspecialchars($homeScreensUrl, ENT_QUOTES, 'UTF-8') ?>"><?= htmlspecialchars(t('nav.screens'), ENT_QUOTES, 'UTF-8') ?></a>
                <a href="<?= htmlspecialchars($homeDownloadUrl, ENT_QUOTES, 'UTF-8') ?>"><?= htmlspecialchars(t('nav.download'), ENT_QUOTES, 'UTF-8') ?></a>
                <a href="<?= htmlspecialchars(page_url('privacy-policy.php'), ENT_QUOTES, 'UTF-8') ?>"><?= htmlspecialchars(t('nav.privacy'), ENT_QUOTES, 'UTF-8') ?></a>
            </nav>
            <div class="header-actions">
                <div class="language-switcher" aria-label="<?= htmlspecialchars(t('lang.switch_label'), ENT_QUOTES, 'UTF-8') ?>">
                    <?php foreach ($supportedLocales as $code => $meta): ?>
                        <a
                            class="language-pill <?= $code === current_locale() ? 'is-active' : '' ?>"
                            href="<?= htmlspecialchars(switch_locale_url($code), ENT_QUOTES, 'UTF-8') ?>"
                            lang="<?= htmlspecialchars($meta['html_lang'], ENT_QUOTES, 'UTF-8') ?>"
                            <?= $code === current_locale() ? 'aria-current="page"' : '' ?>
                        >
                            <span class="flag flag-<?= htmlspecialchars($meta['flag'], ENT_QUOTES, 'UTF-8') ?>" aria-hidden="true"></span>
                            <span><?= htmlspecialchars($meta['label'], ENT_QUOTES, 'UTF-8') ?></span>
                        </a>
                    <?php endforeach; ?>
                </div>
                <a class="button button-small button-outline" href="<?= htmlspecialchars($site['play_store_url'], ENT_QUOTES, 'UTF-8') ?>" target="_blank" rel="noreferrer"><?= htmlspecialchars(t('nav.download_app'), ENT_QUOTES, 'UTF-8') ?></a>
            </div>
        </div>
    </header>
    <main>
