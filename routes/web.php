<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

//anterior al PageController
//Route::view('/','index')->name('home');

//en la raiz direcciona a lo que tenga el metodo home de PageController
Route::get('/', [PageController::class, 'home'])->name('home');

//direcciona a lo que tenga el metodo client de PageController
Route::get('cliente/{client:slug}', [PageController::class, 'client'])->name('client');

//para pruebas tailwind
Route::get('tailwind',[PageController::class, 'tailwind'])->name('tailwind');
Route::get('index',[PageController::class, 'index'])->name('index');

//ruta middleware de auth
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

