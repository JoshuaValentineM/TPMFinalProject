<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        User::create([
            'role' => 'admin',
            'name' => 'admin',
            'teamName' => 'admin',
            'email' => 'admin@admin.net',
            'password' => bcrypt('Admin123!'),
            'remember_token' => Str::random(60),
        ]);
    }
}
