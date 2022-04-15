<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    'produits.list' => [[], ['_controller' => 'App\\Controller\\ProduitsController::index'], [], [['text', '/produits/']], [], [], []],
    'produits.pdf' => [['id'], ['_controller' => 'App\\Controller\\ProduitsController::generatePdfProduits'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/produits/pdf']], [], [], []],
    'produits.list.age' => [['prixMin', 'prixMax'], ['_controller' => 'App\\Controller\\ProduitsController::statsProduitsByAge'], [], [['variable', '/', '[^/]++', 'prixMax', true], ['variable', '/', '[^/]++', 'prixMin', true], ['text', '/produits/stats/age']], [], [], []],
    'produits.list.alls' => [['page', 'nbre'], ['page' => '1', 'nbre' => '12', '_controller' => 'App\\Controller\\ProduitsController::indexAlls'], [], [['variable', '/', '[^/]++', 'nbre', true], ['variable', '/', '[^/]++', 'page', true], ['text', '/produits/alls']], [], [], []],
    'produits.detail' => [['id'], ['_controller' => 'App\\Controller\\ProduitsController::detail'], ['id' => '\\d+'], [['variable', '/', '\\d+', 'id', true], ['text', '/produits']], [], [], []],
    'produits.edit' => [['id'], ['id' => '0', '_controller' => 'App\\Controller\\ProduitsController::addProduits'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/produits/edit']], [], [], []],
    'produits.delete' => [['id'], ['_controller' => 'App\\Controller\\ProduitsController::deleteProduits'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/produits/delete']], [], [], []],
    'produits.update' => [['id', 'nom'], ['_controller' => 'App\\Controller\\ProduitsController::updateProduits'], [], [['text', '/prix}'], ['variable', '/', '[^/]++', 'nom', true], ['variable', '/', '[^/]++', 'id', true], ['text', '/produits/update']], [], [], []],
    'app_public' => [[], ['_controller' => 'App\\Controller\\PublicController::index'], [], [['text', '/public']], [], [], []],
    'template' => [[], ['_controller' => 'App\\Controller\\PublicController::template'], [], [['text', '/template']], [], [], []],
    'app_register' => [[], ['_controller' => 'App\\Controller\\RegistrationController::register'], [], [['text', '/register']], [], [], []],
    'app_verify_email' => [[], ['_controller' => 'App\\Controller\\RegistrationController::verifyUserEmail'], [], [['text', '/verify/email']], [], [], []],
    'app_login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/login']], [], [], []],
    'app_logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], [], []],
];
