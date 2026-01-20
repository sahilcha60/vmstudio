<?php

use App\Http\Controllers\Frontend\PortfolioController;

Route::prefix('portfolio')->group(function () {
    // Show all portfolio categories
    Route::get('/', [PortfolioController::class, 'index'])->name('portfolio');

    // Show single portfolio item
    Route::get('/category/{slug}', [PortfolioController::class, 'single'])->name('portfolio.single');
});
