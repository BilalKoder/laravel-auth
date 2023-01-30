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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about-us', function () {
    return view('pages.about-us');
})->name('about-us');

Route::get('/contact-us', function () {
    return view('pages.contact');
})->name('contact-us');

Route::get('/documentation', function () {
    return view('pages.documentation');
})->name('documentation');

Route::get('/pricing', function () {
    return view('pages.pricing');
})->name('pricing');

Route::get('/terms-and-conditions', function () {
    return view('pages.terms-and-conditions');
})->name('terms-and-conditions');

Route::get('/privacy-policy', function () {
    return view('pages.privacy-policy');
})->name('privacy-policy');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
