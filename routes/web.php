<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers as controller;

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

Route::get('/', [controller\ticketsController::class,"home"]);
Route::get('/createTicket', [controller\ticketsController::class,"create"])->name("createTicket");
Route::post('/createTicketVal/{total}', [controller\ticketsController::class,"store"])->name("createTheticket");