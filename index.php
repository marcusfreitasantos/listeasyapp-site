<?php

declare(strict_types=1);

require __DIR__ . '/config/site.php';

$pageTitle = 'ListEasy | Organize suas compras com mais praticidade';
$highlights = [
    [
        'title' => 'Compartilhe em segundos',
        'text' => 'Convide outras pessoas com poucos toques e mantenha todo mundo atualizado sobre o que falta comprar.',
    ],
    [
        'title' => 'Controle visual dos itens',
        'text' => 'Acompanhe o total da lista, marque produtos comprados e veja quantidades e precos com clareza.',
    ],
    [
        'title' => 'Exporte e envie em PDF',
        'text' => 'Gere uma versao limpa da sua lista para mandar por e-mail, Whatsapp ou guardar como registro.',
    ],
];

$featureCards = [
    [
        'eyebrow' => 'Lista inteligente',
        'title' => 'Tudo o que voce precisa para comprar sem esquecer nada.',
        'text' => 'Crie listas por ocasiao, pesquise itens rapidamente e acompanhe o valor total enquanto faz as compras.',
        'image' => $site['screenshots'][0],
        'image_alt' => 'Tela de acompanhamento da lista de compras no aplicativo',
    ],
    [
        'eyebrow' => 'Compartilhamento simples',
        'title' => 'Em apenas um clique, compartilhe suas listas com quem voce quiser.',
        'text' => 'Ideal para casais, familias e equipes que precisam colaborar na mesma compra sem trocar mensagens o tempo todo.',
        'image' => $site['screenshots'][2],
        'image_alt' => 'Tela de convite para compartilhar lista no aplicativo',
    ],
    [
        'eyebrow' => 'Compras organizadas',
        'title' => 'Exporte em PDF e mantenha suas listas sempre acessiveis.',
        'text' => 'Transforme sua lista em um documento pronto para enviar ou consultar quando precisar, com o mesmo visual claro do app.',
        'image' => $site['screenshots'][3],
        'image_alt' => 'Tela de exportacao da lista em PDF no aplicativo',
    ],
];

require __DIR__ . '/components/header.php';
?>
<section class="hero">
    <div class="hero-pattern" aria-hidden="true"></div>
    <div class="container hero-grid">
        <div class="hero-copy">
            <span class="kicker">Mais praticidade para sua rotina</span>
            <h1>ListEasy facilita sua vida na hora de organizar, compartilhar e economizar.</h1>
            <p>Inspirado na agilidade dos anuncios da marca, o app ajuda voce a criar listas de compras bonitas, objetivas e prontas para serem usadas em conjunto.</p>
            <div class="hero-actions">
                <a class="button" href="<?= htmlspecialchars($site['play_store_url'], ENT_QUOTES, 'UTF-8') ?>" target="_blank" rel="noreferrer">Baixe agora na Play Store</a>
                <a class="button button-ghost" href="#galeria">Ver telas do app</a>
            </div>
            <div class="hero-proof">
                <div>
                    <strong>Compartilhe listas</strong>
                    <span>com familia, amigos ou equipe</span>
                </div>
                <div>
                    <strong>Exporte em PDF</strong>
                    <span>e envie por onde preferir</span>
                </div>
            </div>
        </div>
        <div class="hero-visual">
            <div class="phone-stack">
                <figure class="phone-card phone-card-back">
                    <img src="<?= htmlspecialchars($site['screenshots'][2], ENT_QUOTES, 'UTF-8') ?>" alt="Tela de compartilhamento do aplicativo ListEasy">
                </figure>
                <figure class="phone-card phone-card-front">
                    <img src="<?= htmlspecialchars($site['screenshots'][0], ENT_QUOTES, 'UTF-8') ?>" alt="Tela principal da lista de compras no aplicativo ListEasy">
                </figure>
            </div>
        </div>
    </div>
</section>

<section class="highlights" id="beneficios">
    <div class="container">
        <div class="section-heading centered">
            <span class="kicker">Por que usar</span>
            <h2>Menos improviso no mercado, mais controle no seu dia.</h2>
            <p>Os anuncios destacam rapidez, colaboracao e organizacao. Trouxemos essa mesma mensagem para uma landing page clara e direta.</p>
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

<section class="campaign-section">
    <div class="container">
        <div class="section-heading">
            <span class="kicker">Identidade visual</span>
            <h2>A mesma energia dos anuncios, agora em uma experiencia completa na web.</h2>
            <p>O contraste entre fundo escuro, linhas geometricas e amarelo vibrante reforca a personalidade do ListEasy do primeiro clique ate a instalacao do app.</p>
        </div>
        <div class="campaign-grid">
            <?php foreach ($site['google_ads'] as $position => $campaign): ?>
                <figure class="campaign-card">
                    <img src="<?= htmlspecialchars($campaign, ENT_QUOTES, 'UTF-8') ?>" alt="Peca da campanha visual <?= $position + 1 ?> do ListEasy">
                </figure>
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
                    <a class="text-link" href="<?= htmlspecialchars($site['play_store_url'], ENT_QUOTES, 'UTF-8') ?>" target="_blank" rel="noreferrer">Quero testar o ListEasy</a>
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
            <span class="kicker">Telas do aplicativo</span>
            <h2>Veja como o ListEasy funciona na pratica.</h2>
            <p>Uma galeria com os principais fluxos do app para reforcar a proposta visual e mostrar a experiencia real para quem visita a pagina.</p>
        </div>
        <div class="gallery-grid">
            <?php foreach ($site['screenshots'] as $position => $screenshot): ?>
                <figure class="gallery-card">
                    <img src="<?= htmlspecialchars($screenshot, ENT_QUOTES, 'UTF-8') ?>" alt="Screenshot <?= $position + 1 ?> do aplicativo ListEasy">
                </figure>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="cta-band">
    <div class="container cta-band-inner">
        <div>
            <span class="kicker">Baixe agora</span>
            <h2>Suas compras sempre organizadas, dentro e fora do mercado.</h2>
            <p>Use o ListEasy para planejar melhor, dividir tarefas e acompanhar tudo com uma interface elegante e objetiva.</p>
        </div>
        <a class="button" href="<?= htmlspecialchars($site['play_store_url'], ENT_QUOTES, 'UTF-8') ?>" target="_blank" rel="noreferrer">Instalar na Play Store</a>
    </div>
</section>
<?php require __DIR__ . '/components/footer.php'; ?>
