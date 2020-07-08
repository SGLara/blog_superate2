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
        $this->get('superate/')
            ->assertStatus(200);
    }

    /** @test */
    function nuestraHistoriaTest()
    {
        $this->get('superate/quienes-somos/nuestra-historia')
            ->assertStatus(200);
    }

    /** @test */
    function nuestraFilosofiaTest()
    {
        $this->get('superate/quienes-somos/nuestra-filosofia')
            ->assertStatus(200);
    }

    /** @test */
    function efectoMultiplicadorTest()
    {
        $this->get('superate/quienes-somos/efecto-multiplicador')
            ->assertStatus(200);
    }

    /** @test */
    function nuestroEquipoTest()
    {
        $this->get('superate/quienes-somos/nuestro-equipo')
            ->assertStatus(200);
    }

    /** @test */
    function nuestroProgramaTest()
    {
        $this->get('superate/que-hacemos/nuestro-programa')
            ->assertStatus(200);
    }

    /** @test */
    function enfoqueEnLaCalidadTest()
    {
        $this->get('superate/que-hacemos/enfoque-en-la-calidad')
            ->assertStatus(200);
    }

    /** @test */
    function impactoTest()
    {
        $this->get('superate/que-hacemos/impacto')
            ->assertStatus(200);
    }

    /** @test */
    function csHilasalTest()
    {
        $this->get('superate/nuestros-centros/cs-hilasal')
            ->assertStatus(200);
    }

    /** @test */
    function csAdocTest()
    {
        $this->get('superate/nuestros-centros/cs-adoc')
            ->assertStatus(200);
    }

    /** @test */
    function csFamSanMiguelitoTest()
    {
        $this->get('superate/nuestros-centros/cs-fam-san-miguelito')
            ->assertStatus(200);
    }

    /** @test */
    function csFPomaTest()
    {
        $this->get('superate/nuestros-centros/cs-fpoma')
            ->assertStatus(200);
    }

    /** @test */
    function csMerletTest()
    {
        $this->get('superate/nuestros-centros/cs-merlet')
            ->assertStatus(200);
    }

    /** @test */
    function csJupaTest()
    {
        $this->get('superate/nuestros-centros/cs-jupa')
            ->assertStatus(200);
    }

    /** @test */
    function csRaicesTest()
    {
        $this->get('superate/nuestros-centros/cs-raices')
            ->assertStatus(200);
    }

    /** @test */
    function csGrupoQTest()
    {
        $this->get('superate/nuestros-centros/cs-grupo-Q')
            ->assertStatus(200);
    }

    /** @test */
    function csFamCDNTest()
    {
        $this->get('superate/nuestros-centros/cs-fam-cdn')
            ->assertStatus(200);
    }

    /** @test */
    function csProviviendaTest()
    {
        $this->get('superate/nuestros-centros/cs-provivienda')
            ->assertStatus(200);
    }

    /** @test */
    function nuestrosAliadosTest()
    {
        $this->get('superate/nuestros-aliados')
            ->assertStatus(200);
    }

    /** @test */
    function contactanosTest()
    {
        $this->get('superate/contactanos')
            ->assertStatus(200);
    }
}
