<?php

use Illuminate\Routing\Router;
/** @var Router $router */

$router->group(['prefix' =>'/currency'], function (Router $router) {
    $router->bind('currencies', function ($id) {
        return app('Modules\Currency\Repositories\CurrencyRepository')->find($id);
    });
    get('currencies', ['as' => 'admin.currency.currency.index', 'uses' => 'CurrencyController@index']);
    get('currencies/create', ['as' => 'admin.currency.currency.create', 'uses' => 'CurrencyController@create']);
    post('currencies', ['as' => 'admin.currency.currency.store', 'uses' => 'CurrencyController@store']);
    get('currencies/{currencies}/edit', ['as' => 'admin.currency.currency.edit', 'uses' => 'CurrencyController@edit']);
    put('currencies/{currencies}/edit', ['as' => 'admin.currency.currency.update', 'uses' => 'CurrencyController@update']);
    delete('currencies/{currencies}', ['as' => 'admin.currency.currency.destroy', 'uses' => 'CurrencyController@destroy']);
// append

});
