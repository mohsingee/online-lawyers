<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Logged\MainController;
use App\Http\Controllers\Logged\BlogController;
use App\Http\Controllers\Logged\WebsettingController;
use App\Http\Controllers\Logged\LegalCategoryController;
use App\Http\Controllers\Logged\LawFirmController;
use App\Http\Controllers\Logged\UsersController;
use App\Http\Controllers\Logged\CmsController;

Auth::routes([
    'register' => false
]);

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');

Route::middleware(['auth'])->group(function () {
    Route::get('dashboard',[MainController::class,'dashboard'])->name('dashboard');
    Route::get('profile',[MainController::class,'profile'])->name('profile');
    Route::post('/update-profile', [MainController::class, 'updateProfile'])->name('account.update');

    Route::get('/settings', [WebsettingController::class, 'settings'])->name('settings');
    Route::put('/update-settings', [WebsettingController::class, 'updateSettings'])->name('settings.update');

    Route::resource('legal_categories', LegalCategoryController::class);
    Route::resource('blogs', BlogController::class);
    Route::resource('users', UsersController::class);
    Route::resource('lawfirms', LawFirmController::class);
    Route::resource('cms', CmsController::class)->parameters([
        'cms' => 'cms'
    ]);
});