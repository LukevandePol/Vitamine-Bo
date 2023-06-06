<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdresController;
use App\Http\Controllers\BestellingController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductInhoudController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use Illuminate\Support\Facades\Route;

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

Route::get('/component', function () {
    return view('components');
});

Route::get('/', [SessionsController::class, 'index'])->middleware(['auth', 'status']);
Route::get('/niet-goedgekeurd', function () {
    return view('niet-goedgekeurd');
})->name('niet-goedgekeurd');

// Authenticatie
Route::group(['middleware' => ['auth']], function () {
    // Gebruikersgegevens
    Route::get('account', [AccountController::class, 'create'])->name('account');
    Route::post('updateUser', [AccountController::class, 'updateUser']);

    //Adres instellen als bezorg- of factuuradres en adres verwijderen
    //Knoppen staan op account scherm
    Route::post('setBezorg/{id}', [AdresController::class, 'setBezorg']);
    Route::post('setFactuur/{id}', [AdresController::class, 'setFactuur']);
    Route::post('deleteAdres/{id}', [AdresController::class, 'deleteAdres']);

    // Adres bewerken scherm ophalen en update form
    Route::get('AdresBewerken/{id}', [AdresController::class, 'create']);
    Route::post('updateAdres/{id}', [AdresController::class, 'updateAdres']);

    // Adres toevoegen scherm ophalen
    Route::get('AdresToevoegen', [AdresController::class, 'createToevoegen']);
    Route::post('createAdres', [AdresController::class, 'createAdres']);

    // Bestelling aanpassen
    Route::get('BestellingAanpassen', [BestellingController::class, 'create'])->name('BestellingAanpassen');

    // Klanten dashboard
    Route::get('dashboard', [DashboardController::class, 'create'])->name('dashboard');

    // Uitloggen
    Route::post('uitloggen', [SessionsController::class, 'destroy']);
});

// Gasten
Route::group(['middleware' => ['guest']], function () {
    // Registreren
    Route::get('registreren', [RegisterController::class, 'create'])->name('registreren');
    Route::post('registreren', [RegisterController::class, 'store']);

    // Inloggen
    Route::get('inloggen', [SessionsController::class, 'create'])->name('inloggen');
    Route::post('inloggen', [SessionsController::class, 'store']);
});

// Admin
Route::group(['middleware' => ['auth', 'admin']], function () {
    // Dashboard
    Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');

    // Account goedkeuren
    Route::get('/admin/goedkeuren', [AdminController::class, 'approve'])->name('admin.approve');
    Route::post('/admin/goedkeuren/{id}', [AdminController::class, 'update'])->name('update.status');
    Route::delete('/admin/goedkeuren/{id}', [AdminController::class, 'destroy'])->name('account.destroy');

    // Producten toevoegen
    Route::get('/admin/product', [ProductController::class, 'create'])->name('admin.product');
    Route::post('/admin/product', [ProductController::class, 'store']);

    Route::post('/fruitToevoegen', [ProductController::class, 'fruitToevoegen']);
    Route::post('/groenteToevoegen', [ProductController::class, 'groenteToevoegen']);
    Route::post('/flesToevoegen', [ProductController::class, 'flesToevoegen']);
    Route::post('/verpakkingToevoegen', [ProductController::class, 'verpakkingToevoegen']);

    Route::get('/admin/productBewerken/{id}', [ProductController::class, 'createProductBewerken']);
    Route::post('/admin/productBewerken/{id}', [ProductController::class, 'updateProduct']);

    Route::get('/admin/productInhoudBewerken/{id}', [ProductInhoudController::class, 'createProductInhoud']);
    Route::post('/verpakkingInhoudToevoegen', [ProductInhoudController::class, 'verpakkingInhoudToevoegen']);
    Route::post('/deleteVerpakkingInhoud', [ProductInhoudController::class, 'deleteVerpakkingInhoud']);
});
