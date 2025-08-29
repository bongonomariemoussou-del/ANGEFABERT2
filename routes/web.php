<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Produit1Controller;



Route::get('/', [Produit1Controller::class, 'index']);

Route::resource('produits', Produit1Controller::class);


  
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
