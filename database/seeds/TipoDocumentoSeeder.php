<?php

use Illuminate\Database\Seeder;

class TipoDocumentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\TipoDocumento::create([
            'nombre_corto' => 'C.C',
            'nombre_largo' => 'Cédula de ciudadanía'
        ]);
    }
}
