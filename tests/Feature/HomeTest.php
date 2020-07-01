<?php

namespace Tests\Feature;

use App\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class HomeTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @test
     */
    public function usuario_no_puede_ver_la_vista_home_sin_autenticarse()
    {
        $response = $this->get(route('home'));
        $response->assertStatus(302);
        $response->assertRedirect(route('login'));
    }

    /**
     * @test
     */
    public function usuario_puede_ver_la_vista_home_al_autenticarse()
    {
        $user = factory(User::class)->create();

        $response = $this->actingAs($user)->get(route('home'));
        $response->assertOk();
        $response->assertViewIs('home');
    }
}
