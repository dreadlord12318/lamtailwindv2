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
    return view('index');
});

Route::get('/about', function () {
    return view('about');
});
Route::get('/pricing', function () {
    return view('pricing');
});
Route::get('/illuminations', function () {
    return view('illuminations');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/termsandcondition', function () {
    return view('terms');
});
Route::get('/GDPR', function () {
    return view('gdpr');
});
Route::get('/privacy', function () {
    return view('privacy');
});
Route::get('/confirmation', function () {
    return view('confirmation');
});
Auth::routes();

// ---**MAIL**---
Route::get('/contact',  [\App\Http\Controllers\ContactController::class, 'show']);

Route::post('/contact', [\App\Http\Controllers\ContactController::class, 'mail']);

// ---**MAIL CONTACT PAGE**---
Route::get('/contact2',  [\App\Http\Controllers\ContactController2::class, 'show']);

Route::post('/contact2', [\App\Http\Controllers\ContactController2::class, 'mail']);

Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

// --**Transaction Page Route**---
Route::get('/transaction',  [\App\Http\Controllers\TransactionController::class, 'show']);

Route::post('/transaction', [\App\Http\Controllers\TransactionController::class, 'getData']);

// --**Transaction Contact Page Route**---
Route::get('/reciept',  [\App\Http\Controllers\TransContactController::class, 'show']);
Route::post('/reciept', [\App\Http\Controllers\TransContactController::class, 'mail']);
