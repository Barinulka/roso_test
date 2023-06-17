<?php

use App\Http\Controllers\EventController;
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

// Route::get('/', function () {
//     return view('home');
// });

Route::get('/', [EventController::class, 'index'])->name('home');
Route::get('/create', [EventController::class, 'create'])->name('event.create');
Route::post('/create', [EventController::class, 'store'])->name('event.store');
Route::get('/events', [EventController::class, 'list'])->name('event.list');
Route::get('/events/{event}', [EventController::class, 'view'])->name('event.view');
