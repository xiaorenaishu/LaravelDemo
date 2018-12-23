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

Route::get('/', function () {
    return view('welcome');
});

//Auth::routes(); //登录脚手架路由

Route::get('/home', 'HomeController@index')->name('home');
//Route::get('/admin', 'HomeController@index');
Route::resource('post', 'PostController');

Route::group([
    'prefix' => 'adminlte',
    'namespace' => 'App\\Adminlte\\Controllers'
], function (\Illuminate\Routing\Router $router) {
    $router->resource('/demo', 'DemoController');
});

