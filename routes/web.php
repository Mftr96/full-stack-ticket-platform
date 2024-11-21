<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\OperatorController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TicketController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    #profile routes
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    #-----------------
    #operator routes
    Route::get('/operator',[OperatorController::class,'index'])->name('operator.index');
    #category routes
    Route::get('/category',[CategoryController::class,'index'])->name('category.index');
    #tickets routes
    Route::get('/ticket',[TicketController::class,'index'])->name('ticket.index');
    Route::get('/ticket/create',[TicketController::class,'create'])->name('ticket.create');
    Route::post('/ticket/store',[TicketController::class,'store'])->name('ticket.store');

    
});

require __DIR__.'/auth.php';
