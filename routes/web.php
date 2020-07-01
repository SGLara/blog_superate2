<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/quienes-somos', function(){
    return view('quienes_somos');
})->name('quienesSomos');

Route::get('/que-hacemos', function(){
    return view('que_hacemos');
})->name('queHacemos');

Route::view('/nuestros-centros','nuestros_centros')->name('nuestrosCentros');

Route::view('/nuestros-aliados','nuestros_aliados')->name('nuestrosAliados');

Route::view('/contactanos','contactanos')->name('contactanos');