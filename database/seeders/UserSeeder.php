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
    public function run(): void
    {
        // Create a user
       User::create([
        'name' => 'Admin',
        'email' => 'Admin@example.com',
        'password' => Hash::make('password123'), // Hash the password
        'role' => 'admin', // Set the role as admin
       ]) ;
       User::create([
        'name' => 'John',
        'email' => 'john@example.com',
        'password' => Hash::make('password123'), // Hash the password
        'role' => 'cilent', // Set the role as cilents
       ]) ;
       // Create multiple users
       
           
    }
}