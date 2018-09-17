<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/','DefaultController@index');
Route::get('/page-utility-classes', function () {
    return view('page-utility-classes');
});

Route::get('/form-select', function () {
    return view('form-select');
});

Route::get('ui-buttons', function () {
    return view('ui-buttons');
});
Route::get('icons-linea', function () {
    return view('icons-linea');
});
Route::get('teste', function () {
    return view('teste');
});

Route::get('page-search-results', function () {
    return view('page-search-results');
});