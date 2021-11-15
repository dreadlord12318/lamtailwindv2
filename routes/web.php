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
Route::get('/test', function () {
    return view('test');
});
Auth::routes();

Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

