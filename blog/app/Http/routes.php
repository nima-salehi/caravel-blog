<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
// creating route
// http://localhost:8000/products
// Route::get('products',function(){
//   return App\Product::all();
// });
// http://localhost:8000/api/products
// Route::group(['prefix'=>'api'],function(){
//   Route::get('products',['as'=>'products', function(){
//     return App\Product::all();
//   }]);
// });
//
// creating controller
Route::group(['prefix'=>'api'],function(){
  Route::resource('products','ProductController',['only'=>['index','store','update']]);
  Route::resource('products.descriptions','ProductDescriptionController',['only'=>['index','store']]);
});
//
