<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class WelcomeUserTest extends TestCase
{
    /**  @test */
    function it_welcomes_users_with_nickname()
    {
        $this->get('/saludo/Luis/enrique')
            ->assertStatus(200)
            ->assertSee('Bienvenido Luis, tu apodo es enrique' );
    }

    /**  @test1 */
    function it_welcomes_users_without_nickname()
    {
        $this->get('/saludo/luis')
            ->assertStatus(200)
            ->assertSee('Bienvenido luis' );
    }
}
