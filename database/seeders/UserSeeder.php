<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash; // Make sure to import the Hash facade

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            // etudiant
            [
                'name' => 'nayrouz tarik',
                'username' => 'ntarik',
                'email' => 'ntarik@faculte.com',
                'password' => Hash::make('etudiant'),
                'role' => 'Etudiant',
                'status' => 'active',
            ],

            // Prof
            [
                'name' => 'hajar fiqar',
                'username' => 'hfiqar',
                'email' => 'hfiqar@faculte.com',
                'password' => Hash::make('prof'),
                'role' => 'Professeur',
                'status' => 'active',
            ],

            // delegue-Respode Filiere
            [
                'name' => 'omar taraki',
                'username' => 'otaraki',
                'email' => 'otaraki@faculte.com',
                'password' => Hash::make('delegue'),
                'role' => 'Responsable de Filiere',
                'status' => 'active',
            ],

            // Chef de Departement
            [
                'name' => 'jad tarik',
                'username' => 'jtarik',
                'email' => 'jtarik@faculte.com',
                'password' => Hash::make('chef'),
                'role' => 'Chef de Departement',
                'status' => 'active',
            ],

            // Responsable Service Pedago
            [
                'name' => 'anouar loukili',
                'username' => 'aloukili',
                'email' => 'aloukili@faculte.com',
                'password' => Hash::make('peda'),
                'role' => 'Responsable Service Pédagogique',
                'status' => 'active',
            ],
        ]);
    }
}
