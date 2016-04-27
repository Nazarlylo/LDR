<?php

use Illuminate\Routing\Router;
/** @var Router $router */

$router->group(['prefix' =>'/product'], function (Router $router) {
    $router->bind('products', function ($id) {
        return app('Modules\Product\Repositories\ProductRepository')->find($id);
    });
    get('products', ['as' => 'admin.product.product.index', 'uses' => 'ProductController@index']);
    get('products/create', ['as' => 'admin.product.product.create', 'uses' => 'ProductController@create']);
    post('products', ['as' => 'admin.product.product.store', 'uses' => 'ProductController@store']);
    get('products/{products}/edit', ['as' => 'admin.product.product.edit', 'uses' => 'ProductController@edit']);
    put('products/{products}/edit', ['as' => 'admin.product.product.update', 'uses' => 'ProductController@update']);
    delete('products/{products}', ['as' => 'admin.product.product.destroy', 'uses' => 'ProductController@destroy']);
// append

});
