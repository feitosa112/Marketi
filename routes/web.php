<?php

use App\Http\Controllers\GradController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::controller(GradController::class)->group(function(){
    Route::get('/sviGradovi','sviGradovi')->name('sviGradovi');//ruta za ispis svih gradova iz baze
});
