<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class LoginTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_login()
    {
        //Consultar URL de la consulta
        $response1 = $this->get('/login');
        //Revisar estatus de la consulta
        $response1->assertStatus(200);
        //Revisar que renderize el formulario
        $response1->AssertSee('Login');
        
        //Crear usuario para test
        //$user= new \App\Models\User;
        //$user->name ='Ejemplo';
        //$user->email = 'ejemplo@eejmplo';
        //$user->password = \Hash::make('ejemplo123');
        //$user->role_id = 1;
        //$user-> save();

        //agregar credenciales
        $credenciales=[
            'email' => 'ejemplo@eejmplo',
            'password' => 'ejemplo123'];

        //Realizar peticion post de login
        $response2 = $this->post('/login', $credenciales);
        //Revisar si se hace una redirección a home
        $response2->assertRedirect('/home');
        //Revisar credenciales
        $this->assertCredentials($credenciales);        
    }

    public function test_logout()
    {

        //Crear usuario para test
        //$user= new \App\Models\User;
        //$user->name ='Ejemplo';
        //$user->email = 'ejemplo1@ejemplo';
        //$user->password = \Hash::make('ejemplo123');
        //$user->role_id = 1;
        //$user-> save();

        //agregar credenciales
        $credenciales=[
            'email' => 'ejemplo1@ejemplo',
            'password' => 'ejemplo123'];

        //Realizar peticion post de login
        $response2 = $this->post('/login', $credenciales);

        // Solicitar pantalla de home
        $response = $this->get('home');
        // Revisar status que sea igual a 200
        $response->assertStatus(200);
        // Revisar que se visualice tag/text dashboard
        $response->assertSee('Dashboard');

        // Crear petición post para cerrar sesión
        $response1 = $this->post('logout');
        // Revisar la redirección a inicio
        $response1->assertRedirect('/');
        

    }
}
