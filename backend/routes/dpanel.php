<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dpanel\CategoryController;
use App\Http\Controllers\Dpanel\CamapignController;
use App\Http\Controllers\Dpanel\CamapignImageController;

Route::namespace('App\Http\Controllers\Dpanel')->group(function () {
    Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

    Route::resource('category', CategoryController::class)->except('create','edit','show');

    Route::get('campaign/update/{campaign}/{status}','CampaignController@updateStatus');

    Route::resource('campaign', CampaignController::class)->except('destroy');

    Route::resource('campaign-image', CampaignImageController::class)->only('store','destroy');

});
Route::get('/logout', [\DD4You\Dpanel\Http\Controllers\AuthController::class, 'logout'])->name('logout');
Route::resource('global-settings', \DD4You\Dpanel\Http\Controllers\GlobalSettingController::class)->only('index', 'store');
