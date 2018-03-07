<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserModeuleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */

    /**
     *
     * @test
     */
    public function Esto_cargara_la_informacion_basica_de_la_primer_pagina()
    {
        $this->get('usuarios')->assertStatus(200)->assertSee('London')->assertSee('Sebastian');
    }
}
