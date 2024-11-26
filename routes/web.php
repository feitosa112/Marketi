<?php

use App\Http\Controllers\GradController;
use App\Http\Controllers\MarketController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::controller(GradController::class)->group(function(){
    Route::get('/sviGradovi','sviGradovi')->name('sviGradovi');//ruta za ispis svih gradova iz baze
});

Route::controller(MarketController::class)->group(function(){
    Route::get('/sviMarketi','sviMarketi')->name('svi marketi');//ruta za dobijanje informacija o svim marketima

    Route::get('/market/{id}','izabraniMarket')->name('izabraniMarket');//ruta za ispis podataka o izabranom marketu na osnovu id

});
