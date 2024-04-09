<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Course;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //la premiére for pour les catégories
        //la 2éme for pour les cours de chaque catégorie 
        for ($i = 1; $i <= 3; $i++) {
            for ($j = 1; $j <= 6; $j++) {
                Course::create([
                    'cat_id' => $i,
                    'trainer_id' => rand(1, 3),
                    'name' => "course num $j cat num $j",
                    'small_desc' => "Laravel est un framework web open-source écrit en PHP respectant le principe modèle-vue-contrôleur et entièrement développé en programmation orientée objet. Laravel est distribué sous licence MIT, avec ses sources hébergées sur GitHub",
                    'img' => "$i$j.png"
                ]);
            }
        }
    }
}
