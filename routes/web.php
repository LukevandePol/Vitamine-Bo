<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdresController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KlantgegevensController;
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
    Route::get('account', [AccountController::class, 'create']);
    Route::post('updateUser', [AccountController::class, 'updateUser']);

    // Telefoonnummer
    Route::post('updateTelefoon', [KlantgegevensController::class, 'updateTelefoon']);

    // Adres bewerken
    Route::get('AdresBewerken/{id}', [AdresController::class, 'create']);
    Route::post('updateAdres/{id}', [AdresController::class, 'updateAdres']);

    // Adres toevoegen/verwijderen
    Route::get('AdresToevoegen', [AdresController::class, 'create2']);
    Route::post('createAdres', [AdresController::class, 'createAdres']);
    Route::post('deleteAdres/{id}', [AdresController::class, 'deleteAdres']);

    // Klanten dashboard
    Route::get('dashboard', [DashboardController::class, 'create']);

    // Uitloggen
    Route::post('uitloggen', [SessionsController::class, 'destroy']);
});

// Gasten
Route::group(['middleware' => ['guest']], function () {
    // Registreren
    Route::get('registreren', [RegisterController::class, 'create']);
    Route::post('registreren', [RegisterController::class, 'store']);

    // Inloggen
    Route::get('inloggen', [SessionsController::class, 'create'])->name('inloggen');
    Route::post('inloggen', [SessionsController::class, 'store']);
});

// Admin
Route::group(['middleware' => ['auth', 'admin']], function () {
    Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
    Route::get('/admin/goedkeuren', [AdminController::class, 'approve'])->name('admin.approve');
    Route::post('/admin/goedkeuren/{id}', [AdminController::class, 'update'])->name('update.status');
});
