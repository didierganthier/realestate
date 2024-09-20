<?php

namespace Database\Seeders;

use DB;

use Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            // Admin
            [
                'name'=> 'Admin',
                'username'=> 'admin',
                'email'=> 'admin@gmail.com',
                'password'=> Hash::make('111'),
                'role'=> 'admin',
            ]
        ]);
    }
}
