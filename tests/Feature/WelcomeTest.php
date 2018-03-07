<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class WelcomeTest extends TestCase
{
    /**
     * @test
     */
    public function probando_solo_nombre()
    {
        $this->get('saludo/Gilbert')->assertStatus(200)->assertSee("Bienvenido Gilbert!");
    }

    /**
     * @test
     */
    public function probando_nombre_apodo()
    {
        $this->get('saludo/gilbert/Tony')->assertStatus(200)->assertSee("Bienvenido Gilbert, tu apodo es Tony");
    }
}
