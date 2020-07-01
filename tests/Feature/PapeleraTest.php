<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\User;

class PapeleraTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @test
     */
    public function usuario_no_puede_ver_la_vista_de_papelera_sin_autenticarse()
    {
        $response = $this->get(route('user.papelera'));
        $response->assertStatus(302);
        $response->assertRedirect(route('login'));
    }

    /**
     * @test
     */
    public function usuario_puede_ver_la_vista_de_papelera_al_autenticarse()
    {
        $user = factory(User::class)->create();

        $response = $this->actingAs($user)->get(route('user.papelera'));
        $response->assertOk();
        $response->assertViewIs('user.papelera');
    }
}
