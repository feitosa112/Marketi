<?php

use App\Http\Controllers\GradController;
use Illuminate\Support\Facades\Route;

Route::controller(GradController::class)->group(function(){
    Route::get('/sviGradovi','sviGradovi')->name('sviGradovi');//ruta za ispis svih gradova iz baze

    Route::get('/market/{id}','izabraniMarket')->name('izabraniMarket');//ruta za ispis podataka o izabranom marketu na osnovu id
});
