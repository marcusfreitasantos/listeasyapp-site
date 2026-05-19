<?php

declare(strict_types=1);

require __DIR__ . '/config/i18n.php';
require __DIR__ . '/config/privacy-content.php';

$pageTitle = t('privacy.title');
$privacySections = $privacyContent[current_locale()] ?? $privacyContent['en'];

require __DIR__ . '/components/header.php';
?>
<section class="legal-page">
    <div class="container">
        <article class="legal-shell">
            <span class="kicker"><?= htmlspecialchars(t('privacy.kicker'), ENT_QUOTES, 'UTF-8') ?></span>
            <h1><?= htmlspecialchars(t('privacy.heading'), ENT_QUOTES, 'UTF-8') ?></h1>

            <?php foreach ($privacySections as $section): ?>
                <h2><?= htmlspecialchars($section['heading'], ENT_QUOTES, 'UTF-8') ?></h2>

                <?php foreach ($section['paragraphs'] as $paragraph): ?>
                    <p>
                        <?php
                        $formattedParagraph = htmlspecialchars($paragraph, ENT_QUOTES, 'UTF-8');
                        $formattedParagraph = str_replace('marcusfreitasantos@gmail.com', '<a href="mailto:marcusfreitasantos@gmail.com">marcusfreitasantos@gmail.com</a>', $formattedParagraph);
                        echo $formattedParagraph;
                        ?>
                    </p>
                <?php endforeach; ?>

                <?php if (isset($section['links'])): ?>
                    <ul>
                        <?php foreach ($section['links'] as $link): ?>
                            <li>
                                <a href="<?= htmlspecialchars($link['url'], ENT_QUOTES, 'UTF-8') ?>" target="_blank" rel="noreferrer">
                                    <?= htmlspecialchars($link['label'], ENT_QUOTES, 'UTF-8') ?>
                                </a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>

                <?php if (isset($section['list'])): ?>
                    <ul>
                        <?php foreach ($section['list'] as $item): ?>
                            <li><?= htmlspecialchars($item, ENT_QUOTES, 'UTF-8') ?></li>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>
            <?php endforeach; ?>
        </article>
    </div>
</section>
<?php require __DIR__ . '/components/footer.php'; ?>
