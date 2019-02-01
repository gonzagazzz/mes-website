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


Route::get('/', 'MainController@index');

Route::get('pes{version}/tools', [
    'uses' => 'EditsController@tools'
]);
Route::get('pes{version}/{category}', [
    'uses' => 'EditsController@index'
]);
Route::get('pes{version}/{category}/{edit_slug}', [
    'uses' => 'EditsController@seePost'
]);
Route::post('postComment', [
    'uses' => 'EditsController@postComment'
]);
Route::post('upvote', [
    'uses' => 'EditsController@upvote'
]);
Route::get('keywords/{keyword}', [
    'uses' => 'EditsController@keywords'
]);
/*
Route::get('search/{words}', [
    'uses' => 'MainController@search'
]);
*/
Route::get('toggle', [
    'uses' => 'MainController@toggleMemes'
]);
Route::get('mvp/pes{version}', [
    'uses' => 'EditsController@mvp'
]);
Route::get('browse/clubs', [
    'uses' => 'EditsController@browseByClub'
]);
Route::get('donate', [
    'uses' => 'PaypalController@index'
]);
Route::post('submit-donation', [
    'uses' => 'PaypalController@donate'
]);
Route::get('status', [
    'uses' => 'PaypalController@getPaymentStatus'
]);
Route::get('requests', [
    'uses' => 'RequestsController@index'
]);
Route::get('requests/add', [
    'uses' => 'RequestsController@add'
]);
Route::put('requests/store', [
    'uses' => 'RequestsController@store'
]);
Route::post('requests/upvote', [
    'uses' => 'RequestsController@upvote'
]);
Route::get('pm/send', [
    'uses' => 'MainController@sendPM'
]);
Route::put('pm/store', [
    'uses' => 'MainController@storePM'
]);
Route::get('privacy-policy', [
    'uses' => 'MainController@privacyPolicy'
]);
Route::get('terms-and-conditions', [
    'uses' => 'MainController@termsAndConditions'
]);
Route::get('welcome', [
    'uses' => 'MainController@welcome'
]);

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
