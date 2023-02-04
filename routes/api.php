<?php

  
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
  
use App\Http\Controllers\API\RegisterController;
use App\Http\Controllers\API\ProductController;
use App\Http\Controllers\PaypalController;
use App\Http\Controllers\API\UserController;
  
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
  
Route::post('register', [RegisterController::class, 'register']);
Route::post('login', [RegisterController::class, 'login']);

Route::get('pay', [PaypalController::class, 'index']);

Route::get('send', [PaypalController::class, 'sendInvoice']);
     
Route::middleware('auth:api')->group( function () {
    Route::get('check-usage', [UserController::class,'checkUsageStatus'])->name('check-usage');
    Route::get('hit-add', [UserController::class,'updateRequestCount']);
});