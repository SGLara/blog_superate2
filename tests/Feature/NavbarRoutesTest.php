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
        $this->get('inicio')
            ->assertStatus(200);
    }

    /** @test */
    function nuestraHistoriaTest()
    {
        $this->get('quienes-somos/nuestra-historia')
            ->assertStatus(200);
    }

    /** @test */
    function nuestraFilosofiaTest()
    {
        $this->get('quienes-somos/nuestra-filosofia')
            ->assertStatus(200);
    }

    /** @test */
    function efectoMultiplicadorTest()
    {
        $this->get('quienes-somos/efecto-multiplicador')
            ->assertStatus(200);
    }

    /** @test */
    function nuestroEquipoTest()
    {
        $this->get('quienes-somos/nuestro-equipo')
            ->assertStatus(200);
    }

    /** @test */
    function nuestroProgramaTest()
    {
        $this->get('que-hacemos/nuestro-programa')
            ->assertStatus(200);
    }

    /** @test */
    function enfoqueEnLaCalidadTest()
    {
        $this->get('que-hacemos/enfoque-en-la-calidad')
            ->assertStatus(200);
    }

    /** @test */
    function impactoTest()
    {
        $this->get('que-hacemos/impacto')
            ->assertStatus(200);
    }

    /** @test */
    function csHilasalTest()
    {
        $this->get('nuestros-centros/cs-hilasal')
            ->assertStatus(200);
    }

    /** @test */
    function csAdocTest()
    {
        $this->get('nuestros-centros/cs-adoc')
            ->assertStatus(200);
    }

    /** @test */
    function csFamSanMiguelitoTest()
    {
        $this->get('nuestros-centros/cs-fam-san-miguelito')
            ->assertStatus(200);
    }

    /** @test */
    function csFPomaTest()
    {
        $this->get('nuestros-centros/cs-fpoma')
            ->assertStatus(200);
    }

    /** @test */
    function csMerletTest()
    {
        $this->get('nuestros-centros/cs-merlet')
            ->assertStatus(200);
    }

    /** @test */
    function csJupaTest()
    {
        $this->get('nuestros-centros/cs-jupa')
            ->assertStatus(200);
    }

    /** @test */
    function csRaicesTest()
    {
        $this->get('nuestros-centros/cs-raices')
            ->assertStatus(200);
    }

    /** @test */
    function csGrupoQTest()
    {
        $this->get('nuestros-centros/cs-grupo-Q')
            ->assertStatus(200);
    }

    /** @test */
    function csFamCDNTest()
    {
        $this->get('nuestros-centros/cs-fam-cdn')
            ->assertStatus(200);
    }

    /** @test */
    function csProviviendaTest()
    {
        $this->get('nuestros-centros/cs-provivienda')
            ->assertStatus(200);
    }

    /** @test */
    function nuestrosAliadosTest()
    {
        $this->get('nuestros-aliados')
            ->assertStatus(200);
    }

    /** @test */
    function contactanosTest()
    {
        $this->get('contactanos')
            ->assertStatus(200);
    }
}
