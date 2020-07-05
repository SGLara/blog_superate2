<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'home')->name('home');

Route::view('/quienes-somos', 'quienes_somos')->name('quienesSomos');

Route::view('/nuestra-historia','nuestra_historia')->name('nuestraHistoria');

Route::view('/nuestra-filosofia','nuestra_historia')->name('nuestraFilosofia');

Route::view('/efecto-multiplicador','efecto_multiplicador')->name('efectoMultiplicador');

Route::view('/nuestro-equipo','nuestro_equipo')->name('nuestroEquipo');

Route::view('/que-hacemos', 'que_hacemos')->name('queHacemos');

Route::view('/nuestro-programa','nuestro_programa')->name('nuestroPrograma');

Route::view('/enfoque-en-la-calidad','enfoque_en_la_calidad')->name('enfoqueEnLaCalidad');

Route::view('/impacto','impacto')->name('impacto');

Route::view('/nuestros-centros', 'nuestros_centros')->name('nuestrosCentros');

Route::view('/cs-hilasal','cs_hilasal')->name('csHilasal');

Route::view('/cs-adoc','cs_adoc')->name('csAdoc');

Route::view('/cs-fam-san-miguelito','cs_fam_sanmiguelito')->name('csFAMSanMiguelito');

Route::view('/cs-fpoma','cs_fpoma')->name('csFPoma');

Route::view('/cs-merlet','cs_merlet')->name('csMerlet');

Route::view('/cs-jupa','cs_jupa')->name('csJupa');

Route::view('/cs-raices','cs_raices')->name('csRaices');

Route::view('/cs-grupo-Q','cs_grupoq')->name('csGrupoQ');

Route::view('/cs-fam-cdn','cs_fam_cdn')->name('csFAMCDN');

Route::view('/cs-provivienda','cs_fpro')->name('csProvivienda');

Route::view('/nuestros-aliados','nuestros_aliados')->name('nuestrosAliados');

Route::view('/contactanos','contactanos')->name('contactanos');
