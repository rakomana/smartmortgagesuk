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
Auth::routes();

Route::get('/custom', function() {
	return view('custom');
});

Route::get('/', 'HomeController@index');
Route::get('/about', 'HomeController@showAbout');

Route::get('/clear-cache', function() {
    Artisan::call('cache:clear');
    return "Cache is cleared";
});
Route::get('/clear-config', function() {
    Artisan::call('config:clear');
    return "Cache is cleared";
});
Route::get('/clear-route', function() {
    Artisan::call('route:clear');
    return "Cache is cleared";
});
Route::get('/clear-view', function() {
    Artisan::call('view:clear');
    return "Cache is cleared";
});

Route::get('/privacy', function () {
    return view('privacy');
});

Route::get('/terms', function () {
    return view('terms');
});


Route::get('/mortgages', 'MortgageController@getAllServices');
Route::get('/mortgages/remortgages/{url}', 'MortgageController@show');
Route::get('/mortgages/{url}', 'MortgageController@show');
Route::get('/remortgage-calculator', 'MortgageController@calculator');

Route::get('/secured-loan/{url}', 'LoanController@show');

Route::get('/equity/{url}', 'EquityController@show');

Route::get('/contact', 'ContactController@index');

Route::post('/get-a-quote', 'QuoteController@quotes');
Route::get('/get-a-quote', 'QuoteController@quotes');

Route::get('/resource', 'ResourceController@index');

Route::get('/resource/{url}', 'ResourceController@indexCategory');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
