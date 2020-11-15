<?php

use App\Avaluo;
use App\TipoDocumento;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(TipoDocumentoSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(AvaluoSeeder::class);
    }
}
