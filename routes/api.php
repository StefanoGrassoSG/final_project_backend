<?php

use Illuminate\Http\Request;
use App\Http\Controllers\admin\OrderController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\ApartmentController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
   // Route::post('/makePayment', [OrderController::class, 'makePayment']);
   
});

Route::get('apartment', [ApartmentController::class, 'index']);
Route::post('apartment', [ApartmentController::class, 'searchApartment']);