<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        $this->call(UserSeeder::class);
        $this->call(RutaSeeder::class);
        $this->call(ClienteSeeder::class);
        $this->call(VueloSeeder::class);
        $this->call(PasajeSeeder::class);
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
