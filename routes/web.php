<?php

use App\Http\Controllers\Home\AboutController;
use App\Http\Controllers\Home\HomeController;
use App\Http\Controllers\Home\ResourcesController;
use App\Http\Controllers\Home\WaitListController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('under-attack', [HomeController::class, 'index'])->name('home.under-attack');
Route::get('contact', [HomeController::class, 'index'])->name('home.contact');

Route::prefix('company')->group(function () {
    Route::get('about', [AboutController::class, 'index'])->name('company.about');
    Route::get('benefits', [AboutController::class, 'benefits'])->name('company.benefits');
});
Route::prefix('resources')->group(function () {
    Route::get('ddos-protection-technology', [ResourcesController::class, 'protectionTechnology'])->name('resources.technology');
    Route::get('how-ddos-protection-works', [ResourcesController::class, 'howItWorks'])->name('resources.howItWorks');
});
Route::prefix('legal')->group(function () {
    Route::get('terms-conditions', [HomeController::class, 'terms'])->name('legal.terms');
    Route::get('privacy-policy', [HomeController::class, 'privacyPolicy'])->name('legal.privacy');
});

Route::post('wait-list/join',[WaitListController::class,'joinWaitList'])->name('wait-list.join');
Route::post('wait-list/verify/{token}',[WaitListController::class,'joinWaitList'])->name('wait-list.verify')->middleware('signed');
