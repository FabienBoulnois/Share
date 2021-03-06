<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/ajoutFichier' => [[['_route' => 'ajoutFichier', '_controller' => 'App\\Controller\\FichierController::ajoutFichier'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/static' => [[['_route' => 'static', '_controller' => 'App\\Controller\\StaticController::index'], null, null, null, false, false, null]],
        '/inscrire' => [[['_route' => 'inscrire', '_controller' => 'App\\Controller\\StaticController::inscrire'], null, null, null, false, false, null]],
        '/contact' => [[['_route' => 'contact', '_controller' => 'App\\Controller\\StaticController::contact'], null, null, null, false, false, null]],
        '/ajout-theme' => [[['_route' => 'ajout-theme', '_controller' => 'App\\Controller\\ThemeController::ajoutTheme'], null, null, null, false, false, null]],
        '/liste_theme' => [[['_route' => 'liste_theme', '_controller' => 'App\\Controller\\ThemeController::listeTheme'], null, null, null, false, false, null]],
        '/ajout_utilisateur' => [[['_route' => 'ajout_utilisateur', '_controller' => 'App\\Controller\\UtilisateurController::ajout_utilisateur'], null, null, null, false, false, null]],
        '/liste_utilisateur' => [[['_route' => 'liste_utilisateur', '_controller' => 'App\\Controller\\UtilisateurController::listeUtilisateur'], null, null, null, true, false, null]],
        '/' => [[['_route' => 'index', '_controller' => 'App\\Controller\\StaticController::index'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/modif_theme/(\\d+)(*:187)'
                .'|/user_profile/(\\d+)(*:214)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        187 => [[['_route' => 'modif_theme', '_controller' => 'App\\Controller\\ThemeController::modifTheme'], ['id'], null, null, false, true, null]],
        214 => [
            [['_route' => 'user_profile', '_controller' => 'App\\Controller\\UtilisateurController::userprofile'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
