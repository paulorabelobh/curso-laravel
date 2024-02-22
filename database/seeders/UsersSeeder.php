<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'firstname' => 'Paulo',
            'lastname' => 'Rabelo',
            'email' => 'paulo.sergio.rabelo@gmail.com',
            'password' => bcrypt('12345678'),
        ]);
    }
}
