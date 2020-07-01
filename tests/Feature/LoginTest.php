<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\User;

class LoginTest extends TestCase
{
    use RefreshDatabase;


    /**
     * @test
     */
    public function usuario_puede_ver_formulario_de_login()
    {
        $response = $this->get(route('login'));

        $response->assertOk();
        $response->assertViewIs('auth.login');
    }

    /**
     * @test
     */
    public function usuario_no_puede_ver_formulario_de_login_despues_de_autenticarse()
    {
        $user = factory(User::class)->create();

        $response = $this->actingAs($user)->get(route('login'));
        $response->assertStatus(302);
        $response->assertRedirect(route('home'));
    }

    /**
     * @test
     */
    public function usuario_puede_ingresar_con_credenciales_correctas()
    {

        $password = 'password';

        $user = factory(User::class)->create([
            'password' => bcrypt($password)
        ]);


        $response = $this->post(route('login'), [
            'email' => $user->email,
            'password' => $password,
        ]);

        $response->assertRedirect(route('home'));
        $this->assertAuthenticatedAs($user);
    }

    /**
     * @test
     */
    public function usuario_no_puede_ingresar_con_credenciale_incorrectas()
    {
        $password = 'password';

        $user = factory(User::class)->create([
            'password' => bcrypt($password)
        ]);

        //contraseña incorrecta
        $response1 = $this->post(route('login'), [
            'email' => $user->email,
            'password' => 'otracontraseña123',
        ]);

        $response1->assertRedirect();
        $response1->assertSessionHasErrors('email');
        $this->assertTrue(session()->hasOldInput('email'));
        $this->assertFalse(session()->hasOldInput('password'));
        $this->assertGuest();

        //email incorrecto
        $response1 = $this->post(route('login'), [
            'email' => 'correoincorrecto@gmail.com',
            'password' => $password,
        ]);

        $response1->assertRedirect('');
        $response1->assertSessionHasErrors('email');
        $this->assertTrue(session()->hasOldInput('email'));
        $this->assertFalse(session()->hasOldInput('password'));
        $this->assertGuest();
    }

    /**
     * @test
     */
    public function usuario_cierra_sesion_correctamente()
    {
        $password = 'password';

        $user = factory(User::class)->create([
            'password' => bcrypt($password)
        ]);


        $response = $this->post(route('login'), [
            'email' => $user->email,
            'password' => $password,
        ]);

        $response->assertRedirect(route('home'));
        $this->assertAuthenticatedAs($user);

        $response = $this->post(route('logout'));

        $response->assertRedirect('');
        $this->assertGuest();
    }
}
