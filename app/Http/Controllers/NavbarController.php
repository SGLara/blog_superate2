<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NavbarController extends Controller
{
    function homeView()
    {
        return view('home');
    }
    function ourAlliesView()
    {
        return view('nuestros_aliados');
    }
    function contactUsView()
    {
        return view('contactanos');
    }
    function ourHistoryView()
    {
        return view('nuestra_historia');
    }
    function ourPhilosophyView()
    {
        return view('nuestra_filosofia');
    }
    function multiplyEffectView()
    {
        return view('efecto_multiplicador');
    }
    function ourTeamView()
    {
        return view('nuestro_equipo');
    }
    function ourProgramView()
    {
        return view('nuestro_programa');
    }
    function qualityFocusView()
    {
        return view('enfoque_en_la_calidad');
    }
    function impactView()
    {
        return view('impacto');
    }
    function hilasalView()
    {
        return view('cs_hilasal');
    }
    function adocView()
    {
        return view('cs_adoc');
    }
    function sanMiguelitoView()
    {
        return view('cs_fam_sanmiguelito');
    }
    function pomaView()
    {
        return view('cs_fpoma');
    }
    function merletView()
    {
        return view('cs_merlet');
    }
    function jupaView()
    {
        return view('cs_jupa');
    }
    function raicesView()
    {
        return view('cs_raices');
    }
    function grupoQView()
    {
        return view('cs_grupoq');
    }
    function ciudadDelNinoView()
    {
        return view('cs_fam_cdn');
    }
    function proviviendaView()
    {
        return view('cs_fpro');
    }
}
