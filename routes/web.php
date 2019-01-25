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

Route::get('/', 'PagesController@index');
Route::get('google023b1f1f6a52451d', 'PagesController@google023b1f1f6a52451d');
Route::get('google023b1f1f6a52451d.html', 'PagesController@google023b1f1f6a52451d');
Route::post('sendmail', 'MailController@send');