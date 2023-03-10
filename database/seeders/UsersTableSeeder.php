<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            // Admin
            [
                'name' => 'Sourav',
                'email' => 'admin@example.com',
                'password' => Hash::make('123'),
                'role' => 'admin',
                'status' => 'active'
            ],

            // Employee
            [
                'name' => 'Employee',
                'email' => 'employee@example.com',
                'password' => Hash::make('123'),
                'role' => 'employee',
                'status' => 'active',
            ],

            // User
            [
                'name' => 'User',
                'email' => 'user@example.com',
                'password' => Hash::make('123'),
                'role' => 'user',
                'status' => 'active',
            ],
        ]);
    }
}
