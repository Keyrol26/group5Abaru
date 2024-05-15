<?php

namespace Database\Seeders;
use App\Models\LecturerGroup;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $group_seed = [
            ['id' => '1', 'name' => 'CDCS2515A', 'part' => '5'],
            ['id' => '2', 'name' => 'CDCS2515B', 'part' => '5'],
            ['id' => '3', 'name' => 'CDCS2514A', 'part' => '4'],
            ['id' => '4', 'name' => 'CDCS2514B', 'part' => '4'],
            ['id' => '5', 'name' => 'CDCS2513A', 'part' => '3'],

        ];

        foreach ($group_seed as $group_seed) {
            LecturerGroup::firstOrCreate($group_seed);
        }
    }
}
