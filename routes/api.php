<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ProduitController;
// use App\Http\Controllers\Api\CategorieController;


Route::resource('produit', ProduitController::class);

// Route::resource('categories', CategorieController::class);