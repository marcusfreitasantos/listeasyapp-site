<?php

declare(strict_types=1);

require_once __DIR__ . '/site.php';

$supportedLocales = [
    'pt-BR' => [
        'label' => 'PT-BR',
        'html_lang' => 'pt-BR',
        'flag' => 'br',
    ],
    'en' => [
        'label' => 'EN',
        'html_lang' => 'en',
        'flag' => 'us',
    ],
];

$translations = [
    'pt-BR' => [
        'site.tagline' => 'Organize suas compras, compartilhe listas e economize tempo.',
        'site.description' => 'O ListEasy facilita a organizacao de listas de compras com compartilhamento, controle visual dos itens e exportacao em PDF.',
        'nav.benefits' => 'Beneficios',
        'nav.features' => 'Recursos',
        'nav.screens' => 'Telas',
        'nav.download' => 'Download',
        'nav.privacy' => 'Privacidade',
        'nav.download_app' => 'Baixar app',
        'lang.switch_label' => 'Alterar idioma',
        'lang.pt' => 'Portugues (Brasil)',
        'lang.en' => 'English (USA)',
        'footer.description' => 'Listas mais praticas para compras em familia, no mercado ou no dia a dia.',
        'footer.privacy' => 'Politica de Privacidade',
        'footer.cta' => 'Pronto para organizar sua proxima compra?',
        'footer.cta_button' => 'Abrir na Play Store',
        'home.title' => 'ListEasy | Organize suas compras com mais praticidade',
        'home.hero.kicker' => 'Mais praticidade para sua rotina',
        'home.hero.title' => 'ListEasy facilita sua vida na hora de organizar, compartilhar e economizar.',
        'home.hero.body' => 'Inspirado na agilidade dos anuncios da marca, o app ajuda voce a criar listas de compras bonitas, objetivas e prontas para serem usadas em conjunto.',
        'home.hero.cta_primary' => 'Baixe agora na Play Store',
        'home.hero.cta_secondary' => 'Ver telas do app',
        'home.hero.proof_1_title' => 'Compartilhe listas',
        'home.hero.proof_1_text' => 'com familia, amigos ou equipe',
        'home.hero.proof_2_title' => 'Exporte em PDF',
        'home.hero.proof_2_text' => 'e envie por onde preferir',
        'home.hero.alt_back' => 'Tela de compartilhamento do aplicativo ListEasy',
        'home.hero.alt_front' => 'Tela principal da lista de compras no aplicativo ListEasy',
        'home.benefits.kicker' => 'Por que usar',
        'home.benefits.title' => 'Menos improviso no mercado, mais controle no seu dia.',
        'home.benefits.body' => 'Os anuncios destacam rapidez, colaboracao e organizacao. Trouxemos essa mesma mensagem para uma landing page clara e direta.',
        'home.highlight_1.title' => 'Compartilhe em segundos',
        'home.highlight_1.text' => 'Convide outras pessoas com poucos toques e mantenha todo mundo atualizado sobre o que falta comprar.',
        'home.highlight_2.title' => 'Controle visual dos itens',
        'home.highlight_2.text' => 'Acompanhe o total da lista, marque produtos comprados e veja quantidades e precos com clareza.',
        'home.highlight_3.title' => 'Exporte e envie em PDF',
        'home.highlight_3.text' => 'Gere uma versao limpa da sua lista para mandar por e-mail, Whatsapp ou guardar como registro.',
        'home.campaign.kicker' => 'Identidade visual',
        'home.campaign.title' => 'A mesma energia dos anuncios, agora em uma experiencia completa na web.',
        'home.campaign.body' => 'O contraste entre fundo escuro, linhas geometricas e amarelo vibrante reforca a personalidade do ListEasy do primeiro clique ate a instalacao do app.',
        'home.campaign.alt' => 'Peca da campanha visual %d do ListEasy',
        'home.feature_1.eyebrow' => 'Lista inteligente',
        'home.feature_1.title' => 'Tudo o que voce precisa para comprar sem esquecer nada.',
        'home.feature_1.text' => 'Crie listas por ocasião, pesquise itens rapidamente e acompanhe o valor total enquanto faz as compras.',
        'home.feature_1.alt' => 'Tela de acompanhamento da lista de compras no aplicativo',
        'home.feature_2.eyebrow' => 'Compartilhamento simples',
        'home.feature_2.title' => 'Em apenas um clique, compartilhe suas listas com quem voce quiser.',
        'home.feature_2.text' => 'Ideal para casais, familias e equipes que precisam colaborar na mesma compra sem trocar mensagens o tempo todo.',
        'home.feature_2.alt' => 'Tela de convite para compartilhar lista no aplicativo',
        'home.feature_3.eyebrow' => 'Compras organizadas',
        'home.feature_3.title' => 'Exporte em PDF e mantenha suas listas sempre acessiveis.',
        'home.feature_3.text' => 'Transforme sua lista em um documento pronto para enviar ou consultar quando precisar, com o mesmo visual claro do app.',
        'home.feature_3.alt' => 'Tela de exportacao da lista em PDF no aplicativo',
        'home.feature.link' => 'Quero testar o ListEasy',
        'home.gallery.kicker' => 'Telas do aplicativo',
        'home.gallery.title' => 'Veja como o ListEasy funciona na pratica.',
        'home.gallery.body' => 'Clique nas imagens abaixo para ampliar.',
        'home.gallery.alt' => 'Screenshot %d do aplicativo ListEasy',
        'home.cta.kicker' => 'Baixe agora',
        'home.cta.title' => 'Suas compras sempre organizadas, dentro e fora do mercado.',
        'home.cta.body' => 'Use o ListEasy para planejar melhor, dividir tarefas e acompanhar tudo com uma interface elegante e objetiva.',
        'home.cta.button' => 'Instalar na Play Store',
        'privacy.title' => 'ListEasy | Politica de Privacidade',
        'privacy.kicker' => 'Privacidade',
        'privacy.heading' => 'Politica de Privacidade - List Easy',
    ],
    'en' => [
        'site.tagline' => 'Organize your shopping, share lists, and save time.',
        'site.description' => 'ListEasy makes shopping list management easier with sharing, visual item tracking, and PDF export.',
        'nav.benefits' => 'Benefits',
        'nav.features' => 'Features',
        'nav.screens' => 'Screens',
        'nav.download' => 'Download',
        'nav.privacy' => 'Privacy',
        'nav.download_app' => 'Get the app',
        'lang.switch_label' => 'Change language',
        'lang.pt' => 'Portuguese (Brazil)',
        'lang.en' => 'English (USA)',
        'footer.description' => 'More practical shopping lists for family routines, grocery runs, and everyday planning.',
        'footer.privacy' => 'Privacy Policy',
        'footer.cta' => 'Ready to organize your next shopping trip?',
        'footer.cta_button' => 'Open on Play Store',
        'home.title' => 'ListEasy | Organize your shopping with less effort',
        'home.hero.kicker' => 'More ease for your routine',
        'home.hero.title' => 'ListEasy makes life easier when it comes to organizing, sharing, and saving.',
        'home.hero.body' => 'Inspired by the speed and clarity of the brand ads, the app helps you build beautiful, practical shopping lists that are ready to use together.',
        'home.hero.cta_primary' => 'Download now on Play Store',
        'home.hero.cta_secondary' => 'See app screens',
        'home.hero.proof_1_title' => 'Share lists',
        'home.hero.proof_1_text' => 'with family, friends, or your team',
        'home.hero.proof_2_title' => 'Export to PDF',
        'home.hero.proof_2_text' => 'and send it however you prefer',
        'home.hero.alt_back' => 'ListEasy app sharing screen',
        'home.hero.alt_front' => 'ListEasy app main shopping list screen',
        'home.benefits.kicker' => 'Why use it',
        'home.benefits.title' => 'Less improvisation at the store, more control in your day.',
        'home.benefits.body' => 'The ad campaign highlights speed, collaboration, and organization. We brought that same message into a clear, direct landing page.',
        'home.highlight_1.title' => 'Share in seconds',
        'home.highlight_1.text' => 'Invite other people in just a few taps and keep everyone updated on what still needs to be purchased.',
        'home.highlight_2.title' => 'Visual control of every item',
        'home.highlight_2.text' => 'Track the total cost, mark purchased products, and see quantities and prices with clarity.',
        'home.highlight_3.title' => 'Export and send as PDF',
        'home.highlight_3.text' => 'Generate a clean version of your list to send by email, WhatsApp, or keep as a record.',
        'home.campaign.kicker' => 'Visual identity',
        'home.campaign.title' => 'The same energy from the ads, now in a complete web experience.',
        'home.campaign.body' => 'The contrast of the dark background, geometric lines, and vibrant yellow reinforces the ListEasy personality from first click to installation.',
        'home.campaign.alt' => 'ListEasy campaign artwork %d',
        'home.feature_1.eyebrow' => 'Smart list',
        'home.feature_1.title' => 'Everything you need to shop without forgetting anything.',
        'home.feature_1.text' => 'Create lists by occasion, search for items quickly, and follow the running total while you shop.',
        'home.feature_1.alt' => 'Shopping list tracking screen inside the app',
        'home.feature_2.eyebrow' => 'Simple sharing',
        'home.feature_2.title' => 'In just one click, share your lists with anyone you want.',
        'home.feature_2.text' => 'Perfect for couples, families, and teams who need to collaborate on the same shopping trip without constant messages.',
        'home.feature_2.alt' => 'Invite screen to share a list in the app',
        'home.feature_3.eyebrow' => 'Organized purchases',
        'home.feature_3.title' => 'Export to PDF and keep your lists always accessible.',
        'home.feature_3.text' => 'Turn your list into a document ready to send or review whenever you need it, with the same clean look as the app.',
        'home.feature_3.alt' => 'PDF export screen inside the app',
        'home.feature.link' => 'I want to try ListEasy',
        'home.gallery.kicker' => 'App screens',
        'home.gallery.title' => 'See how ListEasy works in practice.',
        'home.gallery.body' => 'Click on the images below to enlarge.',
        'home.gallery.alt' => 'ListEasy app screenshot %d',
        'home.cta.kicker' => 'Download now',
        'home.cta.title' => 'Your shopping always organized, inside and outside the store.',
        'home.cta.body' => 'Use ListEasy to plan better, split tasks, and keep track of everything with an elegant, objective interface.',
        'home.cta.button' => 'Install on Play Store',
        'privacy.title' => 'ListEasy | Privacy Policy',
        'privacy.kicker' => 'Privacy',
        'privacy.heading' => 'Privacy Policy - List Easy',
    ],
];

$locale = 'pt-BR';

if (isset($_GET['lang']) && is_string($_GET['lang']) && isset($supportedLocales[$_GET['lang']])) {
    $locale = $_GET['lang'];
    setcookie('listeasy_lang', $locale, [
        'expires' => time() + (60 * 60 * 24 * 365),
        'path' => '/',
        'samesite' => 'Lax',
    ]);
} elseif (isset($_COOKIE['listeasy_lang']) && is_string($_COOKIE['listeasy_lang']) && isset($supportedLocales[$_COOKIE['listeasy_lang']])) {
    $locale = $_COOKIE['listeasy_lang'];
}

function t(string $key, array $replace = []): string
{
    global $translations, $locale;

    $value = $translations[$locale][$key] ?? $translations['en'][$key] ?? $key;

    foreach ($replace as $search => $replacement) {
        $value = str_replace(':' . $search, (string) $replacement, $value);
    }

    return $value;
}

function current_locale(): string
{
    global $locale;

    return $locale;
}

function locale_meta(): array
{
    global $supportedLocales, $locale;

    return $supportedLocales[$locale];
}

function switch_locale_url(string $targetLocale): string
{
    $path = basename(parse_url($_SERVER['REQUEST_URI'] ?? 'index.php', PHP_URL_PATH) ?: 'index.php');
    $query = $_GET;
    $query['lang'] = $targetLocale;

    return $path . '?' . http_build_query($query);
}

function page_url(string $path, array $query = [], string $fragment = ''): string
{
    $query = array_merge(['lang' => current_locale()], $query);
    $url = $path;
    $queryString = http_build_query($query);

    if ($queryString !== '') {
        $url .= '?' . $queryString;
    }

    if ($fragment !== '') {
        $url .= '#' . ltrim($fragment, '#');
    }

    return $url;
}
