<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('/quotation','QuoteController@store');
Route::post('/contact', 'ContactController@store');
Route::post('/subscribe', 'SubscribeController@store');
Route::get('/quote-submitted/thank-you', 'HomeController@thanks');
