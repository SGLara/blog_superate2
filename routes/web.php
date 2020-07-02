<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'home')->name('home');

Route::view('/quienes-somos', 'quienes_somos')->name('quienesSomos');

Route::get('/nuestra-historia', function () {
    return view('nuestra_historia');
})->name('nuestraHistoria');

Route::get('/nuestra-filosofia', function () {
    return view('nuestra_filosofia');
})->name('nuestraFilosofia');

Route::get('/efecto-multiplicador', function () {
    return view('efecto_multiplicador');
})->name('efectoMultiplicador');

Route::get('/nuestro-equipo', function () {
    return view('nuestro_equipo');
})->name('nuestroEquipo');

Route::view('/que-hacemos', 'que_hacemos')->name('queHacemos');

Route::get('/nuestro-programa', function () {
    return view('nuestro_programa');
})->name('nuestroPrograma');

Route::get('/enfoque-en-la-calidad', function () {
    return view('enfoque_en_la_calidad');
})->name('enfoqueEnLaCalidad');

Route::get('/impacto', function () {
    return view('impacto');
})->name('impacto');

Route::view('/nuestros-centros', 'nuestros_centros')->name('nuestrosCentros');

Route::get('/cs-hilasal', function () {
    return view('cs_hilasal');
})->name('csHilasal');

Route::get('/cs-adoc', function () {
    return view('cs_adoc');
})->name('csAdoc');

Route::get('/cs-fam-san-miguelito', function () {
    return view('cs_fam_sanmiguelito');
})->name('csFAMSanMiguelito');

Route::get('/cs-fpoma', function () {
    return view('cs_fpoma');
})->name('csPoma');

Route::get('/cs-merlet', function () {
    return view('cs_merlet');
})->name('csMerlet');

Route::get('/cs-jupa', function () {
    return view('cs_jupa');
})->name('csJupa');

Route::get('/cs-raices', function () {
    return view('cs_raices');
})->name('csRaices');

Route::get('/cs-grupo-Q', function () {
    return view('cs_grupoq');
})->name('csGrupoQ');

Route::get('/cs-fam-cdn', function () {
    return view('cs_fam_cdn');
})->name('csFAMCDN');

Route::get('/cs-provivienda', function () {
    return view('cs_fpro');
})->name('csProvivienda');

Route::view('/nuestros-aliados', 'nuestros_aliados')->name('nuestrosAliados');

Route::view('/contactanos', 'contactanos')->name('contactanos');
