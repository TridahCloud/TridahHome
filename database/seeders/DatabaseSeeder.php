<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $adminEmail = env('BLOG_ADMIN_EMAIL', 'admin@example.com');
        $adminName = env('BLOG_ADMIN_NAME', 'Site Administrator');
        $adminPassword = env('BLOG_ADMIN_PASSWORD');

        User::updateOrCreate(
            ['email' => $adminEmail],
            [
                'name' => $adminName,
                'password' => $adminPassword ? bcrypt($adminPassword) : bcrypt('changeme123'),
                'is_admin' => true,
            ]
        );
    }
}
