<?php

use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'superate'], function () {
    Route::view('/', 'home')->name('home');
    Route::view('nuestros-aliados', 'nuestros_aliados')->name('nuestros-aliados');
    Route::view('contactanos', 'contactanos')->name('contactanos');

    Route::group(['prefix' => 'quienes-somos'], function () {
        Route::view('nuestra-historia', 'nuestra_historia')->name('nuestra-historia');
        Route::view('nuestra-filosofia', 'nuestra_historia')->name('nuestra-filosofia');
        Route::view('efecto-multiplicador', 'efecto_multiplicador')->name('efecto-multiplicador');
        Route::view('nuestro-equipo', 'nuestro_equipo')->name('nuestro-equipo');
    });

    Route::group(['prefix' => 'que-hacemos'], function () {
        Route::view('nuestro-programa', 'nuestro_programa')->name('nuestro-programa');
        Route::view('enfoque-en-la-calidad', 'enfoque_en_la_calidad')->name('enfoque-en-la-calidad');
        Route::view('impacto', 'impacto')->name('impacto');
    });

    Route::group(['prefix' => 'nuestros-centros'], function () {
        Route::view('cs-hilasal', 'cs_hilasal')->name('cs-hilasal');
        Route::view('cs-adoc', 'cs_adoc')->name('cs-adoc');
        Route::view('cs-fam-san-miguelito', 'cs_fam_sanmiguelito')->name('cs-fam-san-miguelito');
        Route::view('cs-fpoma', 'cs_fpoma')->name('cs-fpoma');
        Route::view('cs-merlet', 'cs_merlet')->name('cs-merlet');
        Route::view('cs-jupa', 'cs_jupa')->name('cs-jupa');
        Route::view('cs-raices', 'cs_raices')->name('cs-raices');
        Route::view('cs-grupo-Q', 'cs_grupoq')->name('cs-grupoQ');
        Route::view('cs-fam-cdn', 'cs_fam_cdn')->name('cs-fam-cdn');
        Route::view('cs-provivienda', 'cs_fpro')->name('cs-provivienda');
    });
});
