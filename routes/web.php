<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StripePaymentController;
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


Route::get('/', [StripePaymentController::class,'index'])->name('home');
Route::get('stripe/checkout', [StripePaymentController::class,'checkout'])->name('stripe.checkout');
Route::get('stripe/checkout/success', [StripePaymentController::class,'checkoutSuccess'])->name('stripe.checkout.success');