<?php

use App\Http\Controllers\ContactsController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\LegalDocumentController;
use App\Http\Controllers\Page\PageController;
use App\Http\Controllers\PriceController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SpecialistController;
use Illuminate\Support\Facades\Route;

Route::get('/', [IndexController::class, 'index'])->name('home');
Route::get('/about', [IndexController::class, 'about'])->name('about');
Route::get('/legal_documents', [LegalDocumentController::class, 'index'])->name('legal_documents');
Route::get('/page/{slug}', [PageController::class, 'index'])->name('page');

// Специалисты
Route::get('/specialists', [SpecialistController::class, 'index'])->name('specialists.index');
Route::get('/specialists/{slug}', [SpecialistController::class, 'show'])->name('specialists.show');

// Цены
Route::get('/prices', [PriceController::class, 'index'])->name('prices.index');

Route::get('/contacts', [ContactsController::class, 'index'])->name('contacts');
Route::get('/sales', [IndexController::class, 'sales'])->name('sales');
Route::get('/services', [ServiceController::class, 'index'])->name('services.index');
Route::get('/services/{slug}', [ServiceController::class, 'page'])->name('services.page');

Route::get('/cache_clear', function () {
    Artisan::call('optimize:clear');

    return Redirect::back()->with('msg', 'Кеш сброшен');
})->name('cache_clear');
