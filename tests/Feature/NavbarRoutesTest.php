<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class NavbarRoutesTest extends TestCase
{
    /** @test */
    function homeTest()
    {
        $this->get('/')
            ->assertStatus(200);
    }

    /** @test */
    function quienesSomosTest()
    {
        $this->get('/quienes-somos')
            ->assertStatus(200);
    }

    /** @test */
    function nuestraHistoriaTest()
    {
        $this->get('/nuestra-historia')
            ->assertStatus(200);
    }

    /** @test */
    function nuestraFilosofiaTest()
    {
        $this->get('/nuestra-filosofia')
            ->assertStatus(200);
    }

    /** @test */
    function efectoMultiplicadorTest()
    {
        $this->get('/efecto-multiplicador')
            ->assertStatus(200);
    }

    /** @test */
    function nuestroEquipoTest()
    {
        $this->get('/nuestro-equipo')
            ->assertStatus(200);
    }

    /** @test */
    function queHacemosTest()
    {
        $this->get('/que-hacemos')
            ->assertStatus(200);
    }

    /** @test */
    function nuestroProgramaTest()
    {
        $this->get('/nuestro-programa')
            ->assertStatus(200);
    }

    /** @test */
    function enfoqueEnLaCalidadTest()
    {
        $this->get('/enfoque-en-la-calidad')
            ->assertStatus(200);
    }

    /** @test */
    function impactoTest()
    {
        $this->get('/impacto')
            ->assertStatus(200);
    }

    /** @test */
    function nuestrosCentrosTest()
    {
        $this->get('/nuestros-centros')
            ->assertStatus(200);
    }

    /** @test */
    function csHilasalTest()
    {
        $this->get('/cs-hilasal')
            ->assertStatus(200);
    }

    /** @test */
    function csAdocTest()
    {
        $this->get('/cs-adoc')
            ->assertStatus(200);
    }

    /** @test */
    function csFamSanMiguelitoTest()
    {
        $this->get('/cs-fam-san-miguelito')
            ->assertStatus(200);
    }

    /** @test */
    function csFPomaTest()
    {
        $this->get('/cs-fpoma')
            ->assertStatus(200);
    }

    /** @test */
    function csMerletTest()
    {
        $this->get('/cs-merlet')
            ->assertStatus(200);
    }

    /** @test */
    function csJupaTest()
    {
        $this->get('/cs-jupa')
            ->assertStatus(200);
    }

    /** @test */
    function csRaicesTest()
    {
        $this->get('/cs-raices')
            ->assertStatus(200);
    }

    /** @test */
    function csGrupoQTest()
    {
        $this->get('/cs-grupo-Q')
            ->assertStatus(200);
    }

    /** @test */
    function csFamCDNTest()
    {
        $this->get('/cs-fam-cdn')
            ->assertStatus(200);
    }

    /** @test */
    function csProviviendaTest()
    {
        $this->get('/cs-provivienda')
            ->assertStatus(200);
    }

    /** @test */
    function nuestrosAliadosTest()
    {
        $this->get('/nuestros-aliados')
            ->assertStatus(200);
    }

    /** @test */
    function contactanosTest()
    {
        $this->get('/contactanos')
            ->assertStatus(200);
    }
}
