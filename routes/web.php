<?php

use App\Http\Controllers\HomeController;
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
Route::get('/faq', function () {
    return view('faq');
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
Route::get('/custom-plugin-development', function () {
    return view('custom-plugin-development');
});
Route::get('/pamm-mam-support', function () {
    return view('pamm-mam-support');
});
Route::get('/ea-creation', function () {
    return view('ea-creation');
});
Route::get('/website-creation', function () {
    return view('website-creation');
});









Route::get('/swap-free-plugin', function () {
    return view('swap-free-plugin');
});
Route::get('/bonus-plugin', function () {
    return view('bonus-plugin');
});
Route::get('/drawdown-plugin', function () {
    return view('drawdown-plugin');
});
Route::get('/brokers-copier', function () {
    return view('brokers-copier');
});
Route::get('/social-trading', function () {
    return view('social-trading');
});
Route::get('/crm', function () {
    return view('crm');
});
Route::get('/web-manager', function () {
    return view('web-manager');
});
Route::get('/reconciliation-plugin', function () {
    return view('reconciliation-plugin');
});
Route::get('/mt5-api', function () {
    return view('mt5-api');
});
Route::get('/pamm', function () {
    return view('pamm');
});
Route::get('/client-side-copier', function () {
    return view('client-side-copier');
});




Route::post('/send', [HomeController::class, 'sendContactMail'])->name('send');