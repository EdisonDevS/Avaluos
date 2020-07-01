<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\User;

class BorradoresTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @test
     */
    public function usuario_no_puede_ver_la_vista_de_borradores_sin_autenticarse()
    {
        $response = $this->get(route('user.borradores'));
        $response->assertStatus(302);
        $response->assertRedirect(route('login'));
    }

    /**
     * @test
     */
    public function usuario_puede_ver_la_vista_de_borradores_al_autenticarse()
    {
        $user = factory(User::class)->create();

        $response = $this->actingAs($user)->get(route('user.borradores'));
        $response->assertOk();
        $response->assertViewIs('user.borradores');
    }
}
