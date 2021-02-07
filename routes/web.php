<?php

use Illuminate\Support\Facades\Route;

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
    return view('home');
})->middleware('auth');
Auth::routes();
Route::middleware(['auth'])->group(function () 
{
	Route::resource('categories', 'CategoryController');
	Route::resource('clients', 'ClientController');
	Route::resource('products', 'ProductController');
	Route::resource('providers', 'ProviderController');
	Route::resource('purchases', 'PurchaseController');
	Route::resource('sales', 'SaleController');


	Route::get('/home', 'HomeController@index')->name('home');	
});



