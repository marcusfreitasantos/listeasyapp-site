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
        'site.description' => 'O ListEasy facilita a organizacao de listas de compras com compartilhamento, controle visual dos itens e exportacao em PDF. Disponivel para Android e iOS.',
        'nav.benefits' => 'Beneficios',
        'nav.features' => 'Recursos',
        'nav.screens' => 'Telas',
        'nav.download' => 'Download',
        'nav.support' => 'Suporte',
        'nav.privacy' => 'Privacidade',
        'nav.download_app' => 'Baixar app',
        'nav.download_android' => 'Android',
        'nav.download_ios' => 'iOS',
        'lang.switch_label' => 'Alterar idioma',
        'lang.pt' => 'Portugues (Brasil)',
        'lang.en' => 'English (USA)',
        'footer.description' => 'Listas mais práticas para compras em família, no mercado ou no dia a dia.',
        'footer.privacy' => 'Política de Privacidade',
        'footer.cta' => 'Pronto para organizar sua próxima compra?',
        'footer.cta_button' => 'Abrir na Play Store',
        'footer.cta_ios_button' => 'Abrir na App Store',
        'footer.data_delete_text' => 'Se você quiser solicitar a remocao completa dos dados vinculados ao seu uso do ListEasy, entre em contato por e-mail. Sua solicitacão sera analisada e respondida em tempo razoável.',
        'footer.data_delete_button' => 'Enviar e-mail para exclusão de dados',
        'home.title' => 'ListEasy | Organize suas compras com mais praticidade',
        'home.hero.kicker' => 'Mais praticidade para sua rotina',
        'home.hero.title' => 'ListEasy facilita sua vida na hora de organizar, compartilhar e economizar.',
        'home.hero.body' => 'Um app para Android e iOS que ajuda você a criar listas de compras bonitas, objetivas e prontas para serem usadas em conjunto.',
        'home.hero.cta_primary' => 'Baixe agora na Play Store',
        'home.hero.cta_ios' => 'Baixe na App Store',
        'home.hero.cta_secondary' => 'Ver telas do app',
        'home.hero.proof_1_title' => 'Compartilhe listas',
        'home.hero.proof_1_text' => 'com família, amigos ou equipe',
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
        'home.highlight_2.text' => 'Acompanhe o total da lista, marque produtos comprados e veja quantidades e preços com clareza.',
        'home.highlight_3.title' => 'Exporte e envie em PDF',
        'home.highlight_3.text' => 'Gere uma versão limpa da sua lista para mandar por e-mail, Whatsapp ou guardar como registro.',
        'home.campaign.kicker' => 'Identidade visual',
        'home.campaign.title' => 'A mesma energia dos anuncios, agora em uma experiencia completa na web.',
        'home.campaign.body' => 'O contraste entre fundo escuro, linhas geometricas e amarelo vibrante reforca a personalidade do ListEasy do primeiro clique ate a instalacao do app.',
        'home.campaign.alt' => 'Peca da campanha visual %d do ListEasy',
        'home.feature_1.eyebrow' => 'Lista inteligente',
        'home.feature_1.title' => 'Tudo o que você precisa para comprar sem esquecer nada.',
        'home.feature_1.text' => 'Crie listas por ocasião, pesquise itens rapidamente e acompanhe o valor total enquanto faz as compras.',
        'home.feature_1.alt' => 'Tela de acompanhamento da lista de compras no aplicativo',
        'home.feature_2.eyebrow' => 'Compartilhamento simples',
        'home.feature_2.title' => 'Em apenas um clique, compartilhe suas listas com quem você quiser.',
        'home.feature_2.text' => 'Ideal para casais, famílias e equipes que precisam colaborar na mesma compra sem trocar mensagens o tempo todo.',
        'home.feature_2.alt' => 'Tela de convite para compartilhar lista no aplicativo',
        'home.feature_3.eyebrow' => 'Compras organizadas',
        'home.feature_3.title' => 'Exporte em PDF e mantenha suas listas sempre acessíveis.',
        'home.feature_3.text' => 'Transforme sua lista em um documento pronto para enviar ou consultar quando precisar.',
        'home.feature_3.alt' => 'Tela de exportacao da lista em PDF no aplicativo',
        'home.feature.link' => 'Quero testar o ListEasy',
        'home.gallery.kicker' => 'Telas do aplicativo',
        'home.gallery.title' => 'Veja como o ListEasy funciona na prática.',
        'home.gallery.body' => 'Clique nas imagens abaixo para ampliar.',
        'home.gallery.alt' => 'Screenshot %d do aplicativo ListEasy',
        'home.cta.kicker' => 'Baixe agora',
        'home.cta.title' => 'Suas compras sempre organizadas, dentro e fora do mercado.',
        'home.cta.body' => 'Use o ListEasy no Android ou iOS para planejar melhor, dividir tarefas e acompanhar tudo com uma interface elegante e objetiva.',
        'home.cta.button' => 'Instalar na Play Store',
        'home.cta.ios_button' => 'Instalar na App Store',
        'privacy.title' => 'ListEasy | Política de Privacidade',
        'privacy.kicker' => 'Privacidade',
        'privacy.heading' => 'Política de Privacidade - List Easy',
        'support.title' => 'ListEasy | Suporte',
        'support.kicker' => 'Suporte',
        'support.heading' => 'Suporte ListEasy',
        'support.intro' => 'Precisa de ajuda com o ListEasy? Esta pagina reúne os caminhos principais para resolver dúvidas sobre acesso, listas, compartilhamento, exportação e privacidade.',
        'support.response_time_label' => 'Tempo de resposta',
        'support.response_time_text' => 'Normalmente respondemos em ate 3 dias uteis.',
        'support.email_label' => 'E-mail de suporte',
        'support.email_text' => 'support@listeasyapp.work.gd',
        'support.email_cta' => 'Enviar e-mail para o suporte',
        'support.card_1_title' => 'Problemas de acesso',
        'support.card_1_text' => 'Informe o e-mail usado no aplicativo, o modelo do aparelho e o que aconteceu antes do erro aparecer.',
        'support.card_2_title' => 'Listas e compartilhamento',
        'support.card_2_text' => 'Descreva se o problema envolve criar listas, editar itens, convidar usuários ou acessar uma lista compartilhada.',
        'support.card_3_title' => 'Exportação em PDF',
        'support.card_3_text' => 'Envie detalhes sobre a lista, o botão usado e se o arquivo foi gerado, aberto ou compartilhado corretamente.',
        'support.privacy_title' => 'Privacidade e dados',
        'support.privacy_text' => 'Para detalhes sobre coleta, uso e retenção de dados, consulte a política de privacidade. Para excluir seus dados, use o contato específico no rodapé da página.',
        'support.privacy_link' => 'Abrir política de privacidade',
        'support.form_title' => 'Fale com o suporte',
        'support.form_text' => 'Preencha o formulário abaixo com o máximo de detalhes possível para facilitar a análise.',
        'support.form_name' => 'Nome',
        'support.form_email' => 'E-mail',
        'support.form_subject' => 'Assunto',
        'support.form_message' => 'Mensagem',
        'support.form_device' => 'Dispositivo e versão do app (opcional)',
        'support.form_submit' => 'Enviar mensagem',
        'support.form_success' => 'Sua mensagem foi enviada. Obrigado por entrar em contato com o suporte do ListEasy.',
        'support.form_error' => 'Não foi possível enviar sua mensagem agora. Tente novamente em alguns minutos ou envie um e-mail diretamente para support@listeasyapp.work.gd.',
        'support.form_required' => 'Preencha nome, e-mail, assunto e mensagem para enviar o formulário.',
        'support.form_invalid_email' => 'Informe um e-mail válido para que possamos responder.',
        ],
    'en' => [
        'site.tagline' => 'Organize your shopping, share lists, and save time.',
        'site.description' => 'ListEasy makes shopping list management easier with sharing, visual item tracking, and PDF export. Available for Android and iOS.',
        'nav.benefits' => 'Benefits',
        'nav.features' => 'Features',
        'nav.screens' => 'Screens',
        'nav.download' => 'Download',
        'nav.support' => 'Support',
        'nav.privacy' => 'Privacy',
        'nav.download_app' => 'Get the app',
        'nav.download_android' => 'Android',
        'nav.download_ios' => 'iOS',
        'lang.switch_label' => 'Change language',
        'lang.pt' => 'Portuguese (Brazil)',
        'lang.en' => 'English (USA)',
        'footer.description' => 'More practical shopping lists for family routines, grocery runs, and everyday planning.',
        'footer.privacy' => 'Privacy Policy',
        'footer.cta' => 'Ready to organize your next shopping trip?',
        'footer.cta_button' => 'Open on Play Store',
        'footer.cta_ios_button' => 'Open on App Store',
        'home.title' => 'ListEasy | Organize your shopping with less effort',
        'home.hero.kicker' => 'More ease for your routine',
        'home.hero.title' => 'ListEasy makes life easier when it comes to organizing, sharing, and saving.',
        'home.hero.body' => 'An Android and iOS app that helps you build beautiful, practical shopping lists that are ready to use together.',
        'home.hero.cta_primary' => 'Download now on Play Store',
        'home.hero.cta_ios' => 'Download on App Store',
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
        'home.feature_3.text' => 'Turn your list into a document ready to send or review whenever you need it.',
        'home.feature_3.alt' => 'PDF export screen inside the app',
        'home.feature.link' => 'I want to try ListEasy',
        'home.gallery.kicker' => 'App screens',
        'home.gallery.title' => 'See how ListEasy works in practice.',
        'home.gallery.body' => 'Click on the images below to enlarge.',
        'home.gallery.alt' => 'ListEasy app screenshot %d',
        'home.cta.kicker' => 'Download now',
        'home.cta.title' => 'Your shopping always organized, inside and outside the store.',
        'home.cta.body' => 'Use ListEasy on Android or iOS to plan better, split tasks, and keep track of everything with an elegant, objective interface.',
        'home.cta.button' => 'Install on Play Store',
        'home.cta.ios_button' => 'Install on App Store',
        'privacy.title' => 'ListEasy | Privacy Policy',
        'privacy.kicker' => 'Privacy',
        'privacy.heading' => 'Privacy Policy - List Easy',
        'support.title' => 'ListEasy | Support',
        'support.kicker' => 'Support',
        'support.heading' => 'ListEasy Support',
        'support.intro' => 'Need help with ListEasy? This page brings together the main ways to solve questions about access, lists, sharing, PDF export, and privacy.',
        'support.response_time_label' => 'Response time',
        'support.response_time_text' => 'We usually reply within 3 business days.',
        'support.email_label' => 'Support email',
        'support.email_text' => 'support@listeasyapp.work.gd',
        'support.email_cta' => 'Email support',
        'support.card_1_title' => 'Access issues',
        'support.card_1_text' => 'Include the email used in the app, the device model, and what happened before the issue appeared.',
        'support.card_2_title' => 'Lists and sharing',
        'support.card_2_text' => 'Tell us whether the issue involves creating lists, editing items, inviting users, or opening a shared list.',
        'support.card_3_title' => 'PDF export',
        'support.card_3_text' => 'Share details about the list, the button used, and whether the file was generated, opened, or shared correctly.',
        'support.privacy_title' => 'Privacy and data',
        'support.privacy_text' => 'For details about data collection, use, and retention, review the privacy policy. To delete your data, use the dedicated contact option in the page footer.',
        'support.privacy_link' => 'Open privacy policy',
        'support.form_title' => 'Contact support',
        'support.form_text' => 'Fill out the form below with as much detail as possible to help us review your request.',
        'support.form_name' => 'Name',
        'support.form_email' => 'Email',
        'support.form_subject' => 'Subject',
        'support.form_message' => 'Message',
        'support.form_device' => 'Device and app version (optional)',
        'support.form_submit' => 'Send message',
        'support.form_success' => 'Your message has been sent. Thank you for contacting ListEasy support.',
        'support.form_error' => 'We could not send your message right now. Try again in a few minutes or email support@listeasyapp.work.gd directly.',
        'support.form_required' => 'Fill in name, email, subject, and message before sending the form.',
        'support.form_invalid_email' => 'Enter a valid email so we can reply.',
    ],
];

$locale = 'en';

if (isset($_GET['lang']) && is_string($_GET['lang']) && isset($supportedLocales[$_GET['lang']])) {
    $locale = $_GET['lang'];
    setcookie('listeasy_lang', $locale, [
        'expires' => time() + (60 * 60 * 24 * 365),
        'path' => '/',
        'samesite' => 'Lax',
    ]);
} elseif (isset($_COOKIE['listeasy_lang']) && is_string($_COOKIE['listeasy_lang']) && isset($supportedLocales[$_COOKIE['listeasy_lang']])) {
    $locale = $_COOKIE['listeasy_lang'];
} elseif (isset($_SERVER['HTTP_ACCEPT_LANGUAGE']) && is_string($_SERVER['HTTP_ACCEPT_LANGUAGE'])) {
    $acceptedLanguages = explode(',', strtolower($_SERVER['HTTP_ACCEPT_LANGUAGE']));

    foreach ($acceptedLanguages as $acceptedLanguage) {
        $languageCode = trim(explode(';', $acceptedLanguage, 2)[0]);

        if ($languageCode === 'pt' || str_starts_with($languageCode, 'pt-')) {
            $locale = 'pt-BR';
            break;
        }
    }
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
