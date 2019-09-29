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

<<<<<<< Updated upstream
Route::get('/', 'HomeController@index')->name('home');
=======


Route::get('/', function () {
    return view('welcome'); 
});
>>>>>>> Stashed changes

//Products
//Route::get('/products', 'ProductsController@directory')->name('products');
//Route::get('/products/search', 'productsController@search')->name('products.search');
//Route::delete('/products/delete', 'productsController@destroy')->name('products.destroy')//->middleware(admins);
//Route::get('/products/add','productsController@create')->name('products.create')//->middleware(admins);
//Route::post('/products/add','productsController@store')->name('products.save')//->middleware(admins);
//Route::get('/products/{id}', 'productsController@show')->name('products.show');
//Route::get('/products/{id}/edit', 'productsController@edit')->name('products.edit')//->middleware(admins);
//Route::put('/products/{id}', 'productsController@update')->name('products.update')//->middleware(admins);
//Route::get('/products/{id}/buy', 'productsController@buy')->name('products.buy')->middleware('auth');
//Route::post('/products/{id}/buy', 'productsController@addToCart')->name('products.cart')->middleware('auth');
Route::get('/products', 'ProductsController@index');
Route::get('/products/create', 'ProductsController@create');
Route::post('/productsaction', 'ProductsController@storeProduct');

Route::get('/home', 'HomeController@index')->name('home');

//Shops
Route::get('/shops','ShopsController@directory')->name('shops');
Route::get('/shops/search', 'ShopsController@search')->name('shops.search');
Route::get('/shops/{id}','ShopsController@show')->name('shops.show');

<<<<<<< Updated upstream
Route::get('/cart','CartController@show')->name('cart')->middleware('auth');
Route::get('/cart/add/{id}','CartController@add')->middleware('auth');
Route::get('/cart/remove/{id}','CartController@remove')->middleware('auth');
=======
//Cart
Route::bind('product', function($slug){
    return App\Product::where('slug',$slug) -> first();
});
Route::get('/cart', function () {
  return view('cart');
Route::get ('cart/show', 'CartController@show');
})->name('cart');
Route::get('cart/add/{product}','CartController@add');
//Compras
    Route::get('comprar', [
        'uses' => 'CartController@comprar',
        'as' => 'cart.comprar',
        'middleware' => 'auth'
    ]);
    Route::post('comprar', [
        'uses' => 'CartController@postcomprar',
        'as' => 'cart.postcomprar',
        'middleware' => 'auth'
    ]);
    Route::get('anadir-al-carro/{id}', [
    'uses' => 'CartController@anadiralcarro',
    'as' => 'cart.anadiralcarro'
    ]);
    Route::post('anadir-al-carro', [
    'uses' => 'CartController@postanadiralcarro',
    'as' => 'cart.postanadiralcarro'
    ]);
    Route::get('remover-un-item/{id}', [
    'uses' => 'CartController@removerunitemcarro',
    'as' => 'cart.removerunitemcarro'
    ]);
    Route::get('remover-item/{id}', [
    'uses' => 'CartController@removeritemcarro',
    'as' => 'cart.removeritemcarro'
    ]);
    Route::get('carro', [
        'uses' => 'CartController@carro',
        'as' => 'cart.carro'
    ]);


>>>>>>> Stashed changes

//Users
//Route::delete('/user/delete', 'userController@destroy')->name('user.destroy')-middleware('auth');
Route::get('/user','UsersController@show')->name('user.profile')->middleware('auth');
Route::get('/user/config','UsersController@edit')->name('user.edit')->middleware('auth');
//Route::put('/user/{id}', 'userController@update')->name('user.update')-middleware('auth');


Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/faq', function () {
    return view('help.faq');
})->name('faq');

Route::get('/termsandconditions',function(){
  return view('help.tac');
})->name('terms');

Auth::routes();
