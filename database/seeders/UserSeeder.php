<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
User::create([
    'name' =>'Manager',
    'role_id' => 1,
    'email' => 'manager@gmail.com',
    'password' => Hash::make('manager'),

],

);


        User::create([
                'name' =>'Admin',
                'role_id' => 2,
                'email' => 'admin@gmail.com',
                'password' => Hash::make('admin')
            ]
        );
    }
}
