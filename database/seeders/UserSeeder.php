<?php
 
namespace Database\Seeders;
 
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeders.
     */
    public function run(): void
    {
        User::create(
        [
            'name' => 'Admin',
            'email' => 'user@yahoo.com',
            'role' => 2,
            'password' =>Hash::make('12345678'),
        ],
        [
            'name' => 'Employer',
            'email' => 'user@yahoo.com',
            'role' => 1,
            'password' =>Hash::make('12345678'),
        ],
        [
            'name' => 'Worker',
            'email' => 'user@yahoo.com',
            'role' => 0,
            'password' =>Hash::make('12345678'),
        ],
    );
    }
}