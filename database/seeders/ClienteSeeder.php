<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $clientes = [
            [
                'CC' => '1087202687',
                'nombre' => 'Juan Pedro Ortiz',
                'celular' => '3003214321'
            ],
            [
                'CC' => '1087298568',
                'nombre' => 'Carlos Quintero',
                'celular' => '3003214321'
            ],
            [
                'CC' => '1087811311',
                'nombre' => 'Oscar Jimenez',
                'celular' => '3003214321'
            ],
        ];
        DB::table('cliente')->insert($clientes);
    }
}
