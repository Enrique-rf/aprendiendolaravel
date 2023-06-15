<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserMouloTest extends TestCase
{
    /** @test */ 
    function it_loads_the_users_list_page()
    {
        $this->get('/usuarios')
            ->assertStatus(200)
            ->assertSee('usuarios');
    }


 /* @test */ 
function it_loads_the_users_details_page()
{
    $this->get('/usuarios/5')
        ->assertStatus(200)
        ->assertSee('Mostrando detalle del usuario: 5');
   }

   /* @test */ 
 function it_loads_the_new_users_page()
    {
      $this->get('/usuarios/nuevo') 
        ->assertStatus(200)
        ->assertSee('Crear nuevo usuario');
   }

 /* @test */
 function it_welcomes_users_without_nickname()
 {
     $this->get('/saludo/luis')
         ->assertStatus(200)
         ->assertSee('Bienvenido luis' );
 }



}
