<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/' => [[['_route' => 'app_accueil', '_controller' => 'App\\Controller\\AccueilController::index'], null, null, null, false, false, null]],
        '/admin' => [[['_route' => 'admin', '_controller' => 'App\\Controller\\Admin\\DashboardController::index'], null, null, null, false, false, null]],
        '/ajout/operation' => [[['_route' => 'app_ajout_operation', '_controller' => 'App\\Controller\\AjoutOperationController::index'], null, null, null, false, false, null]],
        '/ajout_operation' => [[['_route' => 'ajouterOperation', '_controller' => 'App\\Controller\\AjoutOperationController::ajouterOperation'], null, null, null, false, false, null]],
        '/ajout/utilisateur' => [[['_route' => 'app_ajout_utilisateur', '_controller' => 'App\\Controller\\AjoutUtilisateurController::index'], null, null, null, false, false, null]],
        '/chiffre/affaire' => [[['_route' => 'app_chiffre_affaire', '_controller' => 'App\\Controller\\ChiffreAffaireController::index'], null, null, null, false, false, null]],
        '/lister_operations' => [[['_route' => 'app_lister_operations', '_controller' => 'App\\Controller\\ListerOperationsController::listerOperation'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/terminer/operation' => [[['_route' => 'app_terminer_operation', '_controller' => 'App\\Controller\\TerminerOperationController::index'], null, null, null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/lister_operations/terminer_operation/([^/]++)(*:53)'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:91)'
                    .'|wdt/([^/]++)(*:110)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:156)'
                            .'|router(*:170)'
                            .'|exception(?'
                                .'|(*:190)'
                                .'|\\.css(*:203)'
                            .')'
                        .')'
                        .'|(*:213)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        53 => [[['_route' => 'terminerOperation', '_controller' => 'App\\Controller\\ListerOperationsController::terminerOperation'], ['id'], null, null, false, true, null]],
        91 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        110 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        156 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        170 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        190 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        203 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        213 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
