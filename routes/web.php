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
Route::get('/about.html', function () {
    return view('FE.about');
});
Route::get('/index.html', function () {
    return view('welcome');
});
Route::get('/team.html', function () {
    return view('FE.team');
});
Route::get('/services.html', function () {
    return view('FE.service');
});
Route::get('/testimonials.html', function () {
    return view('FE.test');
});
Route::get('portfolio.html', function () {
    return view('FE.portfolio');
});
Route::get('/pricing.html', function () {
    return view('FE.pricing');
});
Route::get('/blog.html', function () {
    return view('FE.blog');
});
Route::get('/contact.html', function () {
    return view('FE.contact');
});


