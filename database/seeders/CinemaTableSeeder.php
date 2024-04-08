<?php

namespace Database\Seeders;

use Database\Factories\CinemaFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CinemaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CinemaFactory::new()->count(100)->create();
    }
}
