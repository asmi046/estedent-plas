<?php

use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ContactsController;
use App\Http\Controllers\Page\PageController;
    use Illuminate\Support\Facades\Route;

    use App\Http\Controllers\IndexController;
    use App\Http\Controllers\SpecialistController;
    use App\Http\Controllers\PriceController;

    Route::get('/', [IndexController::class, "index"])->name('home');
    Route::get('/about', [IndexController::class, "about"])->name('about');
    Route::get('/page/{slug}', [PageController::class, "index"])->name('page');

    // Специалисты
    Route::get('/specialists', [SpecialistController::class, 'index'])->name('specialists.index');
    Route::get('/specialists/{slug}', [SpecialistController::class, 'show'])->name('specialists.show');

    // Цены
    Route::get('/prices', [PriceController::class, 'index'])->name('prices.index');

    Route::get('/contacts', [ContactsController::class, "index"])->name('contacts');
    Route::get('/sales', [IndexController::class, "sales"])->name('sales');
    Route::get('/services', [ServiceController::class, "index"])->name('services.index');
    Route::get('/services/{slug}', [ServiceController::class, "page"])->name('services.page');
