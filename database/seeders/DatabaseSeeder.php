<?php

namespace Database\Seeders;

use App\Models\User;
<<<<<<< HEAD
use App\Models\Project;
=======
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
>>>>>>> ab16aded446eadb41929dc46d4e25c0798ace2a9
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
<<<<<<< HEAD
    public function run(): void
    {
        User::factory()->create([
            'name' => 'uun',
            'email' => 'uun@pcr.com',
            'password' => bcrypt('123.321A'),
            'email_verified_at' => time()
        ]);

        Project::factory()
            ->count(30)
            ->hasTasks(30)
            ->create();
    }
}
=======
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
    }
}
>>>>>>> ab16aded446eadb41929dc46d4e25c0798ace2a9
