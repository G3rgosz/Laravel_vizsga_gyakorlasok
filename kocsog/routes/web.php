<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BastardController;
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
    Route::get('new-bastard',[BastardController::class, 'create']);
    Route::get('edit-bastard/{id}',[BastardController::class, 'edit']);
    Route::get('delete-bastard/{id}',[BastardController::class, 'delete']);
    Route::post('/store-bastard',[BastardController::class, 'store']);
    Route::put('/update-bastard',[BastardController::class, 'update']);
});
Route::get('/',[BastardController::class, 'index']);
Route::get('/search',[BastardController::class, 'search']);

Route::get('/logout',[AuthenticatedSessionController::class, 'destroy']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
