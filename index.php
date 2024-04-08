<?php
try {
    if (empty($_GET['page'])) {
        $page = 'accueil';
    } else {
        $url = explode('/', filter_var($_GET['page'], FILTER_SANITIZE_URL));
        $page = $url[0];
    }

    switch ($page) {
        case 'accueil':
            $page_description = 'Bienvenue sur mon site';
            $page_title = 'Accueil';
            $page_content = "<h1 class='text-2xl text-blue-600 text-center'>Bienvenue sur mon site</h1>";
            break;
        case 'page1':
            $page_description = 'Page 1';
            $page_title = 'Page 1';
            $page_content = "<h1 class='text-2xl text-blue-600 text-center'>Page 1</h1>";
            break;
        case 'page2':
            $page_description = 'Page 2';
            $page_title = 'Page 2';
            $page_content = "<h1 class='text-2xl text-blue-600 text-center'>Page 2</h1>";
            break;
        case 'page3':
            $page_description = 'Page 3';
            $page_title = 'Page 3';
            $page_content = "<h1 class='text-2xl text-blue-600 text-center'>Page 3</h1>";
            break;
        default:
            throw new Exception('Page introuvable');
    }
} catch (Exception $e) {
    $page_description = 'Erreur';
    $page_title = 'Erreur';
    $page_content = "<h1 class='text-2xl text-blue-600 text-center'>{$e->getMessage()}</h1>";
}

require 'Views/Layouts/base.php';