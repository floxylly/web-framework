<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    
    public function run(): void
    {
        DB::table('genre')->insert([
            [
                'name' => 'Horor',
                'created_at' => now(),

            ],
            [
                'name' => 'Komedi',
                'created_at' => now(),
            ]
        ]);
        $this->call([
            GenreSeeder::class,
           
        ]);
    }
}

