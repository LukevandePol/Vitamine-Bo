<?php

use App\Http\Controllers\KlantAccountAanpassenController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('account', function () {
    return view('account');
})->middleware('auth');


Route::post('updateEmail', [KlantAccountAanpassenController::class, 'updateEmail'])->middleware('auth');
Route::post('updateNaam', [KlantAccountAanpassenController::class, 'updateNaam'])->middleware('auth');


Route::get('registreren', [RegisterController::class, 'create'])->middleware('guest');
Route::post('registreren', [RegisterController::class, 'store'])->middleware('guest');

Route::get('inloggen', [SessionsController::class, 'create'])->middleware('guest');
Route::post('inloggen', [SessionsController::class, 'store'])->middleware('guest');

Route::post('uitloggen', [SessionsController::class, 'destroy'])->middleware('auth');
