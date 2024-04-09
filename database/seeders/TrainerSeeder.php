<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Trainer;

class TrainerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Trainer::create([
            'name' => 'Emna Ridene',
            'spec' => 'Web developemnt',
            'img' => '1.png'
        ]);

        Trainer::create([
            'name' => 'Chaima Mallekh',
            'spec' => 'Web developemnt',
            'img' => '2.png'
        ]);

        Trainer::create([
            'name' => 'Ahmed ben youness',
            'spec' => 'Génie civil',
            'img' => '3.png'
        ]);

    }
}
