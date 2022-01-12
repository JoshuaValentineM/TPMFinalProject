<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(
            [
                [
                    'role' => 'admin',
                    // 'name' => 'admin',
                    'username' => 'admin',
                    'password' => bcrypt('Admin123!'),
                    'remember_token' => Str::random(60),
                    'binusian' => 'binusian',
                    'fullName' => 'admin',
                    'email' => 'admin@admin.net',
                    // 'emailLeader' => $data['emailLeader'],
                    'whatsappNumber' => 'adminadminadmin',
                    'lineID' => 'admin',
                    'githubGitlabID' => 'admin',
                    'birthPlace' => 'admin',
                    'dayBirthDate' => 'admin',
                    'monthBirthDate' => 'admin',
                    'yearBirthDate' => 'admin',
                    'CV' => 'test.jpg',
                    'IDCard' => 'test.jpg',
                ],
                [
                    'role' => 'member',
                    // 'name' => 'admin',
                    'username' => 'member',
                    'password' => bcrypt('Member123!'),
                    'remember_token' => Str::random(60),
                    'binusian' => 'binusian',
                    'fullName' => 'member',
                    'email' => 'member@member.net',
                    // 'emailLeader' => $data['emailLeader'],
                    'whatsappNumber' => 'membermembermember',
                    'lineID' => 'member',
                    'githubGitlabID' => 'member',
                    'birthPlace' => 'member',
                    'dayBirthDate' => 'member',
                    'monthBirthDate' => 'member',
                    'yearBirthDate' => 'member',
                    'CV' => 'test.jpg',
                    'IDCard' => 'test.jpg',
                ],
            ]
        );
    }
}
