<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//TODO : AGREGAR ESTILOS, PHPUNIT, hacer SEEDS
Route::resource('stores', 'StoresController');
Route::resource('articles', 'ArticlesController');

Route::group(array('prefix' => 'services','middleware' => 'basicauth'), function () {
    Route::get('stores', 'StoresController@listStores');
    Route::get('articles', 'ArticlesController@listArticles');
    Route::get('articles/stores/{id?}', 'ArticlesController@listArticlesByStoreId');
});