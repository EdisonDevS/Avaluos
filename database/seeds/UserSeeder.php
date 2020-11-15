<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\User::create([
            'email' => 'jhon.giraldo1@utp.edu.co',
            'password' => bcrypt('intelinside3942'),
            'name' => 'Jhon Edison Giraldo Mejia',
            'suscripcion' => 'demo'
        ]);
    }
}
