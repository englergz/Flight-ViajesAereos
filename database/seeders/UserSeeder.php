<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        
        
        $users = [
            [
                'name' => 'Diana',
                'email' => 'diana@gmail.com',
                'password' => '$2y$10$sfpZ0RzG7Bccw4RKMnGExeaBwVrXZGFwekgrhRIrUmFJDYwFFpBhW'                
            ],
            [
                'name' => 'Cristian',
                'email' => 'cristian@gmail.com',
                'password' => '$2y$10$sfpZ0RzG7Bccw4RKMnGExeaBwVrXZGFwekgrhRIrUmFJDYwFFpBhW'
                
            ],
            [
                'name' => 'Jose',
                'email' => 'jose@gmail.com',
                'password' => '$2y$10$sfpZ0RzG7Bccw4RKMnGExeaBwVrXZGFwekgrhRIrUmFJDYwFFpBhW'                
            ],
        ];
        DB::table('users')->insert($users);
        
    }
}
