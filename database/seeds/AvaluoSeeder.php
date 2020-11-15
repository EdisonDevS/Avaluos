<?php

use Illuminate\Database\Seeder;

class AvaluoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \App\Avaluo::create([
            'user_id' => 1,
            'custom_id' => 'AVAL-0'
        ]);
    }
}
