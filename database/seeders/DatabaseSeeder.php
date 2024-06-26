<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'admin@gmail.com',
        ]);

        $this->call([DaySeeder::class, GroupSeeder::class, HallsSeeder::class, SubjectsSeeder::class]);

        
        // $this->call(GroupSeeder::class);
        // $this->call(HallsSeeder::class);
        // $this->call(SubjectsSeeder::class);
    }
}
