<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class VueloSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $vuelos = [
            [
                
                'id_ruta' => 3,
                'fecha_salida' => Carbon::now()->subHours(10),
                'fecha_llegada' => Carbon::now()->subHours(4)
            ],
            [
                'id_ruta' => 1,
                'fecha_salida' => Carbon::now()->subHours(12),
                'fecha_llegada' => Carbon::now()->subHours(8)
            ],
            [
                'id_ruta' => 2,
                'fecha_salida' => Carbon::now()->subHours(2),
                'fecha_llegada' => Carbon::now()->addHours(6)
            ],
        ];
        DB::table('vuelo')->insert($vuelos);
    }
}
