<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/about-us', function () {
    return view('about-us');
});

Route::get('/contact-us', function () {
    return view('contact-us');
});

Route::get('/services', function () {
    return view('services');
});

Route::get('/pricing', function () {
    return view('pricing');
});

Route::get('/portfolio', function () {
    return view('portfolio');
});
Route::get('/website-designing', function () {
    return view('website-designing');
});
Route::get('/mt4-admin-support', function () {
    return view('mt4-admin-support');
});
Route::get('/mt4-manager-support', function () {
    return view('mt4-manager-support');
});
Route::get('/mt5-admin-support', function () {
    return view('mt5-admin-support');
});
Route::get('/mt5-manager-support', function () {
    return view('mt5-manager-support');
});
Route::get('/dedicated-server-support', function () {
    return view('dedicated-server-support');
});

Route::get('/bridge-and-gateway-support', function () {
    return view('bridge-and-gateway-support');
});
Route::get('/crm-support', function () {
    return view('crm-support');
});
Route::get('/plugins-support', function () {
    return view('plugins-support');
});
Route::get('/ark-trading-platform-support', function () {
    return view('ark-trading-platform-support');
});
Route::get('/vertex-trading-platform-support', function () {
    return view('vertex-trading-platform-support');
});
Route::get('/ctrader-trading-platform-support', function () {
    return view('ctrader-trading-platform-support');
});
