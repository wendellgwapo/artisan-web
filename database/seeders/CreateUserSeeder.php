<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class CreateUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'name' => 'Worker',
                'email' => 'user@yahoo.com',
                'role' => 0,
                'password' => bcrypt('123456'),
            ],
            [
                'name' => 'Employer',
                'email' => 'editor@yahoo.com',
                'role' => 1,
                'password' => bcrypt('123456'),
            ],
            [
                'name' => 'Admin',
                'email' => 'admin@yahoo.com',
                'role' => 2,
                'password' => bcrypt('123456'),
            ],

        ];

        foreach ($users as $key => $user) {
            User::create($user);
        }
    }
}
