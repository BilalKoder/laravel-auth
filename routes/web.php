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

//landing page

Route::get('/', function () {
    return view('welcome');
});

//about us page

Route::get('/about-us', function () {
    return view('pages.about-us');
})->name('about-us');

//contact us page

Route::get('/contact-us', function () {
    return view('pages.contact');
})->name('contact-us');

//documentation page

Route::get('/documentation', function () {
    return view('pages.documentation');
})->name('documentation');

//pricing page

Route::get('/pricing', function () {
    return view('pages.pricing');
})->name('pricing');

//Terms & Conditions page

Route::get('/terms-and-conditions', function () {
    return view('pages.terms-and-conditions');
})->name('terms-and-conditions');

//Privacy Policy page

Route::get('/privacy-policy', function () {
    return view('pages.privacy-policy');
})->name('privacy-policy');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
