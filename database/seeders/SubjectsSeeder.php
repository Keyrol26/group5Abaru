<?php

namespace Database\Seeders;
use App\Models\Subject;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SubjectsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $subject_seed = [
            ['id' => '1', 'subject_code' => 'ITT440', 'subject_name' => 'ENGLISH', 'lecturer_name' => 'MOHD ABU'],
            ['id' => '2', 'subject_code' => 'ITT441', 'subject_name' => 'MALAYSIA', 'lecturer_name' => 'AHMAD ALI'],
            ['id' => '3', 'subject_code' => 'ITT442', 'subject_name' => 'HISTORY', 'lecturer_name' => 'ALI ABU KASIM'],
            ['id' => '4', 'subject_code' => 'ITT443', 'subject_name' => 'CALCULUS', 'lecturer_name' => 'KASIM SAMAD'],
            ['id' => '5', 'subject_code' => 'ITT444', 'subject_name' => 'LOGIC', 'lecturer_name' => 'SIR LAU'],

        ];

        foreach ($subject_seed as $subject_seed) {
            Subject::firstOrCreate($subject_seed);
        }
    }
}
