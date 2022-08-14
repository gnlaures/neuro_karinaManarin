<?php
    $title = 'Karina Manarin';

    //$pagina = explode('neuro_karinaManarin/', $_SERVER['REQUEST_URI']);
    $pagina = explode('/', $_SERVER['REQUEST_URI']);
    $classPage = 'p-inner';
    switch ($pagina[1]) {
        // Home
        case '' :
        case 'home' :
            $file = 'pages/home.php';
            $title_page = $title;
            $classPage = 'p-home';
            break;

        // inner pages
        case 'sobre' :
            $file = 'pages/aboutUs.php';
            $title_page = 'Sobre | '.$title;
            $classPage = 'p-inner p-aboutUs';
            break;
        case 'privacidade' :
            $file = 'pages/privacy.php';
            $title_page = 'Sobre | '.$title;
            $classPage = 'p-inner p-privacy';
            break;
        case 'termos-de-uso' :
            $file = 'pages/terms.php';
            $title_page = 'Sobre | '.$title;
            $classPage = 'p-inner p-terms';
            break;
        case 'publicidade' :
            $file = 'pages/advertising.php';
            $title_page = 'Publicidade | '.$title;
            $classPage = 'p-inner p-advertising';
            break;
        case 'contato' :
            $file = 'pages/contact.php';
            $title_page = 'Contato | '.$title;
            $classPage = 'p-inner p-contact';
            break;
        case 'noticias' :
            $file = 'pages/news.php';
            $title_page = 'Notícias | '.$title;
            $classPage = 'p-inner p-news';
            break;
        case 'noticia-open' :
            $file = 'pages/news-open.php';
            $title_page = 'Título do Artigo | '.$title;
            $classPage = 'p-inner p-newsOpen';
            break;

        // 404
        default :
            header("HTTP/1.0 404 Not Found");
            $file = 'pages/error404.php';
            $title_page = 'Página não encontrada - '.$title;
            break;
    }
?>