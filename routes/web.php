<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\{Route, Auth};

Route::redirect('/', 'inicio');
Route::get('inicio', 'NavbarController@homeView')->name('inicio');
Route::get('nuestros-aliados', 'NavbarController@ourAlliesView')->name('nuestros-aliados');
Route::get('contactanos', 'NavbarController@contactUsView')->name('contactanos');
Route::get('blog', [HomeController::class, 'index'])->name('blog'); //TUPLE SINTAX

Route::group(['prefix' => 'quienes-somos'], function () {
    Route::get('nuestra-historia', 'NavbarController@ourHistoryView')->name('nuestra-historia');
    Route::get('nuestra-filosofia', 'NavbarController@ourPhilosophyView')->name('nuestra-filosofia');
    Route::get('efecto-multiplicador', 'NavbarController@multiplyEffectView')->name('efecto-multiplicador');
    Route::get('nuestro-equipo', 'NavbarController@ourTeamView')->name('nuestro-equipo');
});

Route::group(['prefix' => 'que-hacemos'], function () {
    Route::get('nuestro-programa', 'NavbarController@ourProgramView')->name('nuestro-programa');
    Route::get('enfoque-en-la-calidad', 'NavbarController@qualityFocusView')->name('enfoque-en-la-calidad');
    Route::get('impacto', 'NavbarController@impactView')->name('impacto');
});

Route::group(['prefix' => 'nuestros-centros'], function () {
    Route::get('cs-hilasal', 'NavbarController@hilasalView')->name('cs-hilasal');
    Route::get('cs-adoc', 'NavbarController@adocView')->name('cs-adoc');
    Route::get('cs-fam-san-miguelito', 'NavbarController@sanMiguelitoView')->name('cs-fam-san-miguelito');
    Route::get('cs-fpoma', 'NavbarController@pomaView')->name('cs-fpoma');
    Route::get('cs-merlet', 'NavbarController@merletView')->name('cs-merlet');
    Route::get('cs-jupa', 'NavbarController@jupaView')->name('cs-jupa');
    Route::get('cs-raices', 'NavbarController@raicesView')->name('cs-raices');
    Route::get('cs-grupo-Q', 'NavbarController@grupoQView')->name('cs-grupoQ');
    Route::get('cs-fam-cdn', 'NavbarController@ciudadDelNinoView')->name('cs-fam-cdn');
    Route::get('cs-provivienda', 'NavbarController@proviviendaView')->name('cs-provivienda');
});

Route::prefix('blog')->name('blog.')->group(function () {
    Route::view('acerca_de', 'blog-template.about')->name('acerca');
    Route::view('contacto', 'blog-template.contact')->name('contacto');
    Route::view('ejemplo', 'blog-template.post')->name('ejemplo');
    Route::get('show/{id}', 'HomeController@show')->name('show');
    Route::resource('blogs', 'BlogController');

    Route::prefix('admin')->name('admin.')->group(function () {
        Route::get('dashboard', 'Admin\AdminController@index')->name('dashboard');
        Route::get('users/registered', 'Admin\UsersController@showUsers')->name('users.registered');
        Route::post('users/restore/{id}', 'Admin\UsersController@restore')->name('users.restore');
        Route::resource('users', 'Admin\UsersController');
    });
});

Auth::routes();