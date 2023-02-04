<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\User;

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
            'username' => 'samuel',
            'password' => bcrypt('password'),
            'name' => 'Samuel',
            'role' => 'Manager',
        ]);
        
        User::create([
            'username' => 'william',
            'password' => bcrypt('password'),
            'name' => 'William',
            'role' => 'Web Developer',
        ]);

        User::create([
            'username' => 'john',
            'password' => bcrypt('password'),
            'name' => 'John',
            'role' => 'Web Designer',
        ]);
    }
}
