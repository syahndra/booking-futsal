<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Sample user data
        $users = [
            [
                'nama_user' => 'Superadmin',
                'email' => 'superadmin@example.com',
                'username' => 'superadmin',
                'password' => bcrypt('superadmin123'),
                'level' => 'superadmin'
            ],
            [
                'nama_user' => 'Syahndra',
                'email' => 'mohammadsyahndra@gmail.com',
                'username' => 'syahndra',
                'password' => bcrypt('syahndra123'),
                'level' => 'superadmin'
            ],
            [
                'nama_user' => 'Admin',
                'email' => 'admin@example.com',
                'username' => 'admin',
                'password' => bcrypt('admin123'),
                'level' => 'admin'
            ],
            // Add more users as needed
        ];

        // Insert data into the users table
        DB::table('users')->insert($users);
    }
}
