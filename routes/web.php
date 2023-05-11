<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdresController;
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

Route::get('/', [SessionsController::class, 'index'])->middleware(['auth', 'status']);
Route::get('/niet-goedgekeurd', function () {
    return view('niet-goedgekeurd');
})->name('niet-goedgekeurd');

Route::get('account', [AccountController::class, 'create'])->middleware('auth');
Route::post('updateUser', [AccountController::class, 'updateUser'])->middleware('auth');

Route::post('updateTelefoon', [KlantgegevensController::class, 'updateTelefoon'])->middleware('auth');

Route::get('AdresBewerken/{id}', [AdresController::class, 'create'])->middleware('auth');
Route::post('updateAdres/{id}', [AdresController::class, 'updateAdres'])->middleware('auth');

Route::get('AdresToevoegen', [AdresController::class, 'create2'])->middleware('auth');
Route::post('createAdres', [AdresController::class, 'createAdres'])->middleware('auth');
Route::post('deleteAdres/{id}', [AdresController::class, 'deleteAdres'])->middleware('auth');


Route::get('registreren', [RegisterController::class, 'create'])->middleware('guest');
Route::post('registreren', [RegisterController::class, 'store'])->middleware('guest');

Route::get('inloggen', [SessionsController::class, 'create'])->middleware('guest')->name('inloggen');
Route::post('inloggen', [SessionsController::class, 'store'])->middleware('guest');

Route::post('uitloggen', [SessionsController::class, 'destroy'])->middleware('auth');

// Admin
Route::group(['middleware' => ['auth', 'admin']], function () {
    Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
    Route::get('/admin/goedkeuren', [AdminController::class, 'approve'])->name('admin.approve');
    Route::post('/admin/goedkeuren/{id}', [AdminController::class, 'update'])->name('update.status');
});
