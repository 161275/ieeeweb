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
Route::get('/team', function () {
    return view('team');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/events', function () {
    return view('events');
});
Route::get('/gallary', function () {
    return view('gallary');
});
Route::get('/why', function () {
    return view('whyjoin');
});
Route::post('/contact', [
    'uses' => 'ContactMessageController@store',
    'as' => 'contact.store'
]);