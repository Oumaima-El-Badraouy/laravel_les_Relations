<?php

namespace Database\Seeders;

use App\Models\Formateur;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class FormateurSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $formateur = Formateur::create([
            'nom' => 'Jean Dupont',
        ]);
    

    }
    
}
