<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

/**
 * Route qui va permettre d'afficher tous les produits sur la home (avec selection date ajout)
 */

$router->get(
    '/',
    [
        'uses' => 'MainController@home',
        'as'   => 'main-home'
    ]
);

/**
 * Route qui permet d'afficher les produits sur "tous les produits"
 */

$router->get(
    '/products',
    [
        'uses' => 'ProductController@list',
        'as'   => 'product-list'
    ]
);

/**
 * Route permettant d'afficher un produit
 */

$router->get(
    '/products/{id}',
    [
        'uses' => 'ProductController@item',
        'as'   => 'product-item'
    ]
);

/**
 * Route permettant d'afficher en fonction de la catégorie
 */

$router->get(
    '/products/category/{id}',
    [
        'uses' => 'ProductController@listCategory',
        'as'   => 'product-listCategory'
    ]
);

/**
 * Route permettant d'afficher en fonction de la marque
 */

$router->get(
    '/products/brand/{id}',
    [
        'uses' => 'ProductController@listBrand',
        'as'   => 'product-listBrand'
    ]
);
