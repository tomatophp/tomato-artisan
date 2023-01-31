<?php


use Illuminate\Support\Facades\Route;
use TomatoPHP\TomatoArtisan\Http\Controllers\ArtisanController;

Route::middleware(['web', 'splade'])->name('admin.')->group(function () {
    Route::get('/admin/artisan', [ArtisanController::class, 'index'])->name('artisan.index');
    Route::post('/admin/artisan/{command}', [ArtisanController::class, 'run'])->name('artisan.json');
});
