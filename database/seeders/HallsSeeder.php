<?php

namespace Database\Seeders;
use App\Models\Hall;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HallsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $hall_seed = [
            ['id' => '1', 'lecture_hall_name' => 'HALL A', 'lecture_hall_place' => 'BlOCK A'],
            ['id' => '2', 'lecture_hall_name' => 'HALL B', 'lecture_hall_place' => 'BlOCK B'],
            ['id' => '3', 'lecture_hall_name' => 'HALL C', 'lecture_hall_place' => 'BlOCK C'],
            ['id' => '4', 'lecture_hall_name' => 'HALL D', 'lecture_hall_place' => 'BlOCK D'],
            ['id' => '5', 'lecture_hall_name' => 'HALL E', 'lecture_hall_place' => 'BlOCK E'],

        ];

        foreach ($hall_seed as $hall_seed) {
            Hall::firstOrCreate($hall_seed);
        }
    }
}
