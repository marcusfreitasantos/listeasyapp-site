<?php

declare(strict_types=1);

require __DIR__ . '/config/i18n.php';

$pageTitle = t('home.title');
$highlights = [
    [
        'title' => t('home.highlight_1.title'),
        'text' => t('home.highlight_1.text'),
    ],
    [
        'title' => t('home.highlight_2.title'),
        'text' => t('home.highlight_2.text'),
    ],
    [
        'title' => t('home.highlight_3.title'),
        'text' => t('home.highlight_3.text'),
    ],
];

$featureCards = [
    [
        'eyebrow' => t('home.feature_1.eyebrow'),
        'title' => t('home.feature_1.title'),
        'text' => t('home.feature_1.text'),
        'image' => $site['screenshots'][0],
        'image_alt' => t('home.feature_1.alt'),
    ],
    [
        'eyebrow' => t('home.feature_2.eyebrow'),
        'title' => t('home.feature_2.title'),
        'text' => t('home.feature_2.text'),
        'image' => $site['screenshots'][2],
        'image_alt' => t('home.feature_2.alt'),
    ],
    [
        'eyebrow' => t('home.feature_3.eyebrow'),
        'title' => t('home.feature_3.title'),
        'text' => t('home.feature_3.text'),
        'image' => $site['screenshots'][3],
        'image_alt' => t('home.feature_3.alt'),
    ],
];

require __DIR__ . '/components/header.php';
?>
<section class="hero">
    <div class="hero-pattern" aria-hidden="true"></div>
    <div class="container hero-grid">
        <div class="hero-copy">
            <span class="kicker"><?= htmlspecialchars(t('home.hero.kicker'), ENT_QUOTES, 'UTF-8') ?></span>
            <h1><?= htmlspecialchars(t('home.hero.title'), ENT_QUOTES, 'UTF-8') ?></h1>
            <p><?= htmlspecialchars(t('home.hero.body'), ENT_QUOTES, 'UTF-8') ?></p>
            <div class="hero-actions">
                <a class="button" href="<?= htmlspecialchars($site['app_store_url'], ENT_QUOTES, 'UTF-8') ?>" target="_blank" rel="noreferrer"><?= htmlspecialchars(t('home.hero.cta_ios'), ENT_QUOTES, 'UTF-8') ?></a>
                <a class="button button-ghost" href="<?= htmlspecialchars($site['play_store_url'], ENT_QUOTES, 'UTF-8') ?>" target="_blank" rel="noreferrer"><?= htmlspecialchars(t('home.hero.cta_primary'), ENT_QUOTES, 'UTF-8') ?></a>
            </div>
            <div class="hero-proof">
                <div>
                    <strong><?= htmlspecialchars(t('home.hero.proof_1_title'), ENT_QUOTES, 'UTF-8') ?></strong>
                    <span><?= htmlspecialchars(t('home.hero.proof_1_text'), ENT_QUOTES, 'UTF-8') ?></span>
                </div>
                <div>
                    <strong><?= htmlspecialchars(t('home.hero.proof_2_title'), ENT_QUOTES, 'UTF-8') ?></strong>
                    <span><?= htmlspecialchars(t('home.hero.proof_2_text'), ENT_QUOTES, 'UTF-8') ?></span>
                </div>
            </div>
        </div>
        <div class="hero-visual">
            <div class="phone-stack">
                <figure class="phone-card phone-card-back">
                    <img src="<?= htmlspecialchars($site['screenshots'][2], ENT_QUOTES, 'UTF-8') ?>" alt="<?= htmlspecialchars(t('home.hero.alt_back'), ENT_QUOTES, 'UTF-8') ?>">
                </figure>
                <figure class="phone-card phone-card-front">
                    <img src="<?= htmlspecialchars($site['screenshots'][0], ENT_QUOTES, 'UTF-8') ?>" alt="<?= htmlspecialchars(t('home.hero.alt_front'), ENT_QUOTES, 'UTF-8') ?>">
                </figure>
            </div>
        </div>
    </div>
</section>

<section class="highlights" id="beneficios">
    <div class="container">
        <div class="section-heading centered">
            <span class="kicker"><?= htmlspecialchars(t('home.benefits.kicker'), ENT_QUOTES, 'UTF-8') ?></span>
            <h2><?= htmlspecialchars(t('home.benefits.title'), ENT_QUOTES, 'UTF-8') ?></h2>
        </div>
        <div class="highlight-grid">
            <?php foreach ($highlights as $item): ?>
                <article class="highlight-card">
                    <div class="highlight-index"></div>
                    <h3><?= htmlspecialchars($item['title'], ENT_QUOTES, 'UTF-8') ?></h3>
                    <p><?= htmlspecialchars($item['text'], ENT_QUOTES, 'UTF-8') ?></p>
                </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="feature-showcase" id="recursos">
    <div class="container">
        <?php foreach ($featureCards as $index => $feature): ?>
            <article class="feature-row <?= $index % 2 === 1 ? 'feature-row-reverse' : '' ?>">
                <div class="feature-copy">
                    <span class="kicker"><?= htmlspecialchars($feature['eyebrow'], ENT_QUOTES, 'UTF-8') ?></span>
                    <h2><?= htmlspecialchars($feature['title'], ENT_QUOTES, 'UTF-8') ?></h2>
                    <p><?= htmlspecialchars($feature['text'], ENT_QUOTES, 'UTF-8') ?></p>
                    <div class="store-buttons store-buttons-inline">
                        <a class="text-link" href="<?= htmlspecialchars($site['play_store_url'], ENT_QUOTES, 'UTF-8') ?>" target="_blank" rel="noreferrer"><?= htmlspecialchars(t('footer.cta_button'), ENT_QUOTES, 'UTF-8') ?></a>
                        <a class="text-link" href="<?= htmlspecialchars($site['app_store_url'], ENT_QUOTES, 'UTF-8') ?>" target="_blank" rel="noreferrer"><?= htmlspecialchars(t('footer.cta_ios_button'), ENT_QUOTES, 'UTF-8') ?></a>
                    </div>
                </div>
                <div class="feature-visual">
                    <div class="feature-frame">
                        <img src="<?= htmlspecialchars($feature['image'], ENT_QUOTES, 'UTF-8') ?>" alt="<?= htmlspecialchars($feature['image_alt'], ENT_QUOTES, 'UTF-8') ?>">
                    </div>
                </div>
            </article>
        <?php endforeach; ?>
    </div>
</section>

<section class="gallery-section" id="galeria">
    <div class="container">
        <div class="section-heading">
            <span class="kicker"><?= htmlspecialchars(t('home.gallery.kicker'), ENT_QUOTES, 'UTF-8') ?></span>
            <h2><?= htmlspecialchars(t('home.gallery.title'), ENT_QUOTES, 'UTF-8') ?></h2>
            <p><?= htmlspecialchars(t('home.gallery.body'), ENT_QUOTES, 'UTF-8') ?></p>
        </div>
        <div class="gallery-grid">
            <?php foreach ($site['screenshots'] as $position => $screenshot): ?>
                <figure class="gallery-card">
                    <img src="<?= htmlspecialchars($screenshot, ENT_QUOTES, 'UTF-8') ?>" alt="<?= htmlspecialchars(sprintf(t('home.gallery.alt'), $position + 1), ENT_QUOTES, 'UTF-8') ?>">
                </figure>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="cta-band">
    <div class="container cta-band-inner">
        <div>
            <span class="kicker"><?= htmlspecialchars(t('home.cta.kicker'), ENT_QUOTES, 'UTF-8') ?></span>
            <h2><?= htmlspecialchars(t('home.cta.title'), ENT_QUOTES, 'UTF-8') ?></h2>
            <p><?= htmlspecialchars(t('home.cta.body'), ENT_QUOTES, 'UTF-8') ?></p>
        </div>
    </div>
</section>
<?php require __DIR__ . '/components/footer.php'; ?>
