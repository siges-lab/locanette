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
/*********************************
 ** Site routes **
 ********************************/
Route::group(['prefix' => '/'], function () {
    Route::get('/', 'FrontController@index');
    Route::get('/get-sector/{type}', 'FrontController@getSector');
    Route::get('/get-family/{id}', 'FrontController@getFamily');
    Route::get('/get-category/{id}', 'FrontController@getCategory');
    Route::get('/get-product/{id}', 'FrontController@getProduct');
    Route::get('/shopping-cart', 'FrontController@shoppingCart');

    Route::post('searchproduct','FrontController@searchproduct')->name('searchproduct');
    Route::get('searchBox','FrontController@searchBox')->name('searchBox') ;
});

/*********************************
 ** Back routes **
 ********************************/
Route::group(['prefix' => 'admin'], function () {
    //Back home
    Route::get('/', 'HomeController@index')->name("adminlocanette");

    //Products
    Route::group(['prefix'=>'product'],function () {
        Route::get('store', 'ProductController@store');
        Route::get('index','ProductController@index');
        Route::post("save","ProductController@saveProduct")->name("saveproduct");
        Route::post("searchProduct","ProductController@searchProduct")->name("searchproduct");
    }) ;
    Route::post('loginadmin',"Auth\LoginController@auhenticate")->name("loginadmin");

    // Orders
    Route::group(['prefix'=>'/order'],function () {
        Route::get('new', 'OrderController@new');
        Route::get('home', 'OrderController@home');
    }) ;

});


Auth::routes();

Route::group(['middleware' => ['auth']], function () {


});

