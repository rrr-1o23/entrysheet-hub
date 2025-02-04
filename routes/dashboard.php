<?php
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\IndustryController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\EntrysheetController;
use Illuminate\Support\Facades\Route;

// ログイン必須のルートをグループ化
Route::middleware(['auth', 'verified'])->group(function () {
    // Dashboard
    Route::get('/dashboard', [DashboardController::class, 'home'])->name('dashboard');

    // Industry
    Route::get('/industries', [IndustryController::class, 'home'])->name('industry');
    Route::get('/industry/create', [IndustryController::class, 'create'])->name('industry.create');
    Route::post('/industry/store', [IndustryController::class, 'store'])->name('industry.store');
    Route::get('/industry/{industry}', [IndustryController::class, 'show'])->name('industry.show');
    // Company
    Route::get('/company', [CompanyController::class, 'home'])->name('company');

    // EntrySheet
    Route::get('/entrysheet', [EntrysheetController::class, 'home'])->name('entrysheet');
});