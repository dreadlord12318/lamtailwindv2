<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
//  **--Start of Main pages--**
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
Route::get('/freemagic', function () {
    return view('ctaform');
});

Route::get('posts' , function () {
    return view('blog');
});

Route::get('/confirmation', function () {
    return view('confirmation');
});

//  **--End of Main pages--**

// **--Start of Routes--**

Auth::routes(['verify' => true]);



// **--End of Routes--**


// --*Static Blog Pages--*
Route::get('/casestudy', function () {
    return view('blogs/casestudy');
});

Route::get('/bpomaps', function () {
    return view('blogs/bpomaps');
});

Route::get('/theph', function () {
    return view('blogs/theph');
});

Route::get('/blog', function () {
    return view('blogs/blogsimple');
});

Route::get('/contactb', function () {
    return view('contactb');
});


// Testing routes

Route::get('/lambentblog',  [\App\Http\Controllers\PagesController::class, 'getIndex']);
Route::post('/upload', 'ImageUpload@upload');
// Route::get('blog/{slug}', [ 'blogs.simple', \App\Http\Controllers\BlogController::class, 'getSingle']);



Route::get(
    'blog/{slug}',
    [\App\Http\Controllers\BlogController::class, 'getSingle']
)->name('blogs.blogsimple')->where('slug', '[\w\d\-\_]+');

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

Route::get('/cta',  [\App\Http\Controllers\CtaContactController::class, 'show']);
Route::post('/cta', [\App\Http\Controllers\CtaContactController::class, 'mail']);

// --**BLOG POST**--
Route::get('/blog/blogs', [\App\Http\Controllers\PagesController::class, 'getIndex']);

Route::resource('posts',\App\Http\Controllers\PostController::class);

// Category Route
Route::resource('categories',\App\Http\Controllers\CategoryController::class, ['except' => ['create']]);
Route::resource('search',\App\Http\Controllers\SearchController::class, ['except' => ['create', 'delete']]);