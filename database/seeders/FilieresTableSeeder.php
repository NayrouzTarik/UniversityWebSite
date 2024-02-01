<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use App\Models\Filiere;

class FilieresTableSeeder extends Seeder
{
    public function run()
    {
        Filiere::factory()->count(10)->create();
    }
}