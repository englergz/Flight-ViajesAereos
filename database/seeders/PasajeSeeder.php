<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Seeder;

class PasajeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $pasajes = [
            [
                'id_vuelo' => 1,
                'id_cliente' => 3
            ],
            [
                'id_vuelo' => 2,
                'id_cliente' => 1
            ],
            [
                'id_vuelo' => 3,
                'id_cliente' => 2
            ],
        ];
        DB::table('pasaje')->insert($pasajes);
    }
}
