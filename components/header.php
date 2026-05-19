<?php

declare(strict_types=1);

if (!isset($site)) {
    require __DIR__ . '/../config/site.php';
}
?><!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($pageTitle ?? ($site['name'] . ' | Landing Page'), ENT_QUOTES, 'UTF-8') ?></title>
    <meta name="description" content="<?= htmlspecialchars($site['description'], ENT_QUOTES, 'UTF-8') ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;700;800&family=Sora:wght@600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="public/assets/css/style.css">
</head>
<body>
<div class="site-shell">
    <header class="site-header">
        <div class="container header-inner">
            <a class="brand" href="index.php">
                <img src="<?= htmlspecialchars($site['logo_path'], ENT_QUOTES, 'UTF-8') ?>" alt="Logo do ListEasy">
            </a>
            <nav class="site-nav" aria-label="Navegacao principal">
                <a href="#beneficios">Beneficios</a>
                <a href="#recursos">Recursos</a>
                <a href="#galeria">Telas</a>
                <a href="#download">Download</a>
                <a href="privacy-policy.php">Privacidade</a>
            </nav>
            <a class="button button-small button-outline" href="<?= htmlspecialchars($site['play_store_url'], ENT_QUOTES, 'UTF-8') ?>" target="_blank" rel="noreferrer">Baixar app</a>
        </div>
    </header>
    <main>
