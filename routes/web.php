<?php

use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\TicketController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/registration', [TicketController::class, 'index']);
Route::post('/registration', [TicketController::class, 'store']);
Route::get('/result', [TicketController::class, 'show']);
Route::get('/ticket/one', [TicketController::class, 'relasiOneToOne']);
