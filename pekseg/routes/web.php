<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BakeryController;
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
    Route::get('/new-bakery', [BakeryController::class, "create"]);
    Route::get('/delete-bakery/{id}', [BakeryController::class, "delete"]);
});

Route::get('/', [BakeryController::class, "index"]);
Route::post('/store-bakery', [BakeryController::class, "store"]);
Route::get('/logout', [AuthenticatedSessionController::class, "destroy"]);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
