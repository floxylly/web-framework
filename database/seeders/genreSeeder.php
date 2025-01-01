<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class genreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('genre')->insert([
            [
                'name' => 'Komedi',
                'created_at' => now(),

            ],
            [
                'name' => 'Horor',
                'created_at' => now(),
            ]
        ]);
        $this->call(genreSeeder::class);
    }
}
