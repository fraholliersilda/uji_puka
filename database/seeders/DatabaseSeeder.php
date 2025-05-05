<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            ServicesSeeder::class,
            AnnouncementsSeeder::class,
        ]);

        // Krijo një përdorues admin
        \App\Models\User::factory()->create([
            'name' => 'Administrator',
            'email' => 'admin@ujipuka.com',
            'password' => bcrypt('password'),
        ]);
    }
}
