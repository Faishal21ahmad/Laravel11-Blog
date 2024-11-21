<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Ishal',
            'username' => 'ishalahmad',
            'email' => 'ishal@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'remember_token' => Str()->random(10),
        ]);
        User::create([
            'name' => 'Ahmad',
            'username' => 'ahmad',
            'email' => 'ahmad@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'remember_token' => Str()->random(10),
        ]);
        User::create([
            'name' => 'Freyana',
            'username' => 'freyana',
            'email' => 'freya@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'remember_token' => Str()->random(10),
        ]);
        User::create([
            'name' => 'Nisa',
            'username' => 'nisa',
            'email' => 'nisa@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'remember_token' => Str()->random(10),
        ]);
        // User::factory(5)->create();
    }
}
