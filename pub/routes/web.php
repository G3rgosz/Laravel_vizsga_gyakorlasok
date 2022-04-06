<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DrinkController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::middleware("auth")->group(function(){
    Route::get('new', [DrinkController::class, "create"]);
    Route::get('delete/{id}', [DrinkController::class, "delete"]);
});

Route::get('/', [DrinkController::class, "index"]);
Route::get('/logout', [AuthenticatedSessionController::class, "destroy"]);
Route::post('store',[DrinkController::class, "store"]);



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
