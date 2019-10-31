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


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

// Assg
Route::get('/index',[
    'as'=>'trang-chu',
    'uses'=>'PageController@getIndex'
]);

Route::get('/shop',[
    'as'=>'shop',
    'uses'=>'PageController@getShop'
]);

Route::get('/product_single/{id}',[
    'as'=>'product_single',
    'uses'=>'PageController@getProduct_single'
]);

Route::get('/checkout',[
    'as'=>'checkout',
    'uses'=>'PageController@getCheckout'
]);

Route::get('/about',[
    'as'=>'about',
    'uses'=>'PageController@getAbout'
]);

Route::get('/blog',[
    'as'=>'blog',
    'uses'=>'PageController@getBlog'
]);

Route::get('/contact',[
    'as'=>'contact',
    'uses'=>'PageController@getContact'
]);

Route::get('/dangky',[
    'as'=>'dangky',
    'uses'=>'PageController@getDangky'
]);

Route::get('/add-to-cart/{id}',[
    'as'=>'themgiohang',
    'uses'=>'PageController@getAddtoCart'
]);

Route::get('/cart',[
    'as'=>'cart',
    'uses'=>'PageController@getCart'
]);


