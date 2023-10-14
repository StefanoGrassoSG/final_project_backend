<?php

use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\ApartmentController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\MessageController;
use App\Http\Controllers\admin\OrderController;
use App\Http\Controllers\admin\SponsorshipController;
use App\Http\Controllers\admin\SetSponsorController;
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
        Route::resource('sponsorship', SponsorshipController::class);
        Route::get('/order', [OrderController::class, 'generate']);
        Route::post('test/{test}',[SetSponsorController::class,'test'])->name('test');
        Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
        Route::resource('message', MessageController::class)->only([
            'index',
            'show',
            'destroy'
        ]);
    });

    
    Route::post('/makePayment', [OrderController::class, 'makePayment']);
   
    
require __DIR__.'/auth.php';