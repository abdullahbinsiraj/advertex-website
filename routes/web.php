<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('welcome');
});
Route::view('/privacy-policy', 'pages.privacy-policy')
    ->name('privacy-policy');
    Route::view('/terms-conditions', 'pages.terms-conditions')
    ->name('terms');

    Route::view('/cookie-policy', 'pages.cookie-policy')
    ->name('cookies');
    Route::view('/about', 'pages.about')->name('about');

    Route::view('/ad-formats', 'pages.ad-formats')->name('ad-formats');
    Route::view('/services', 'pages.services')->name('services');
    Route::view('/publishers', 'publishers')->name('publishers');



Route::post('/contact', [ContactController::class, 'store'])
    ->name('contact.store');