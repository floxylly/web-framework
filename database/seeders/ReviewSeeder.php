<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Movie::all()->each(function ($movie) {
        Review::factory(rand(1, 5))->create(['movie_id' => $movie->id]);
        });
    }
}
