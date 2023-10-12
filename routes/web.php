<?php

use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\ApartmentController;
use App\Http\Controllers\ProfileController;
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

Route::prefix('admin')
    ->name('admin.')
    ->middleware('auth')
    ->group(function () {
        
        Route::resource('apartment', ApartmentController::class);
        Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
    });

require __DIR__.'/auth.php';