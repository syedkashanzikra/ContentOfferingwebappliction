<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $users = [
            ['name' => 'Admin User1', 'email' => 'admin1@example.com', 'password' => Hash::make('password123'), 'role' => 'admin'],
            ['name' => 'Admin User2', 'email' => 'admin2@example.com', 'password' => Hash::make('password123'), 'role' => 'admin'],
            ['name' => 'Admin User3', 'email' => 'admin3@example.com', 'password' => Hash::make('password123'), 'role' => 'admin'],
            ['name' => 'Admin User4', 'email' => 'admin4@example.com', 'password' => Hash::make('password123'), 'role' => 'admin'],
            ['name' => 'Admin User5', 'email' => 'admin5@example.com', 'password' => Hash::make('password123'), 'role' => 'admin'],
            ['name' => 'Creator User1', 'email' => 'creator1@example.com', 'password' => Hash::make('password'), 'role' => 'creator'],
            ['name' => 'Creator User2', 'email' => 'creator2@example.com', 'password' => Hash::make('password'), 'role' => 'creator'],
            ['name' => 'Creator User3', 'email' => 'creator3@example.com', 'password' => Hash::make('password'), 'role' => 'creator'],
            ['name' => 'Creator User4', 'email' => 'creator4@example.com', 'password' => Hash::make('password'), 'role' => 'creator'],
            ['name' => 'Creator User5', 'email' => 'creator5@example.com', 'password' => Hash::make('password'), 'role' => 'creator'],
            ['name' => 'Fan User1', 'email' => 'fan1@example.com', 'password' => Hash::make('fanpassword'), 'role' => 'fan'],
            ['name' => 'Fan User2', 'email' => 'fan2@example.com', 'password' => Hash::make('fanpassword'), 'role' => 'fan'],
            ['name' => 'Fan User3', 'email' => 'fan3@example.com', 'password' => Hash::make('fanpassword'), 'role' => 'fan'],
            ['name' => 'Fan User4', 'email' => 'fan4@example.com', 'password' => Hash::make('fanpassword'), 'role' => 'fan'],
            ['name' => 'Fan User5', 'email' => 'fan5@example.com', 'password' => Hash::make('fanpassword'), 'role' => 'fan'],
        ];

        DB::table('users')->insert($users);
    }
}
