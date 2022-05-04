<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Spatie\Sitemap\SitemapGenerator;
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


Route::get('/posts', function () {
    return abort(404);
});


// sitemap



Route::get('/sitemap', function () {
    SitemapGenerator::create('https://lambent.co')->writeToFile('sitemap.xml');
    return 'sitemap created';

});



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

