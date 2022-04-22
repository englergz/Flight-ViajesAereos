<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class RutaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $rutas = [
            [
                'origen' => 'IPI',
                'origen_descripcion' => 'Ipiales',
                'destino' => 'BTA',
                'destino_descripcion' => 'Bogotá D.C',
                'precio' => 261900, 
                'foto' => 'bogota.jpg'
            ],
            [
                'origen' => 'IPI',
                'origen_descripcion' => 'Ipiales',
                'destino' => 'CLI',
                'destino_descripcion' => 'Santiago de Cali',
                'precio' => 181900, 
                'foto' => 'cali.jpg'
            ],
            [
                'origen' => 'TCO',
                'origen_descripcion' => 'San Andrés de Tumaco',
                'destino' => 'BTA',
                'destino_descripcion' => 'Bogotá D.C',
                'precio' => 323900, 
                'foto' => 'bogota.jpg'
            ],
            [
                'origen' => 'TCO',
                'origen_descripcion' => 'San Andrés de Tumaco',
                'destino' => 'CLI',
                'destino_descripcion' => 'Santiago de Cali',
                'precio' => 219900, 
                'foto' => 'cali.jpg'
            ],
        ];
        DB::table('ruta')->insert($rutas);
        
    }
}
