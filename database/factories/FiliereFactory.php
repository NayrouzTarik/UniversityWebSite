<?php
namespace Database\Factories;

use App\Models\Filiere;
use Illuminate\Database\Eloquent\Factories\Factory;

class FiliereFactory extends Factory
{
    protected $model = Filiere::class;

    public function definition()
    {
        return [
            'name' => $this->faker->word,
            'emploi_pdf_path' => $this->faker->url . '/dummyfile.pdf', // Simulating a PDF file URL
        ];
    }
}

