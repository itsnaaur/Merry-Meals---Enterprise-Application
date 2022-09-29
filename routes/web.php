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
    return view('welcome');
});

Route::get('/Test', function () {
    return view('test');
});

Route::get('/home', function () {
    return view('home');
});
Route::get('/menuPage', function () {
    return view('menu');
});
Route::get('/delivery-partner', function () {
    return view('delivery-partner');
});
Route::get('/delivery-volunteer', function() {
    return view('delivery-volunteer');
});

Route::get('/order-member', function() {
    return view('order-member');

});
Route::get('/donor', function() {
    return view('donor');
});