<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::resource('admin/users', 'AdminUsersController');

//Route::get('admin/users/create', 'AdminUsersController@store');
//
//Route::get('admin/users/show', 'AdminUsersController@destroy');

//Route::post('admin/users/create', 'AdminUsersController@store');

Route::get('/home/inventory/report', 'InventoryController@inventory_report')->name('inventory.in_report');

Route::resource('home/inventory', 'InventoryController');

Route::get('/home/recipe/report', 'RecipeController@recipe_report')->name('recipe.r_report');

Route::resource('home/recipe', 'RecipeController');

Route::resource('home/batch', 'BatchController');

Route::resource('home/labtest', 'LabTestController');

Route::resource('home/batchfill', 'BatchFillController');

Route::get('/home/finishedgood/report', 'FinishedGoodController@finished_goods_report')->name('finishedgood.fg_report');

Route::resource('home/finishedgood', 'FinishedGoodController');

