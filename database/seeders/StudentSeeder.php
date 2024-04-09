<?php

// database/seeders/StudentSeeder.php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Student; // Import the Student model
use Database\Factories\StudentFactory; // Import the StudentFactory

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Use the StudentFactory to create 10 student records
        Student::factory()->count(10)->create();
    }
}
