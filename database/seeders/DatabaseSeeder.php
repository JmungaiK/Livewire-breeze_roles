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
            'id' => '1',
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'role' => '1',
        ]);
        User::factory()->create([
            'id' => '2',
            'name' => 'Mod',
            'email' => 'mod@mod.com',
            'role' => '2',
        ]);
        User::factory()->create([
            'id' => '3',
            'name' => 'User',
            'email' => 'user@user.com',
            'role' => '3',
        ]);
    }
}
