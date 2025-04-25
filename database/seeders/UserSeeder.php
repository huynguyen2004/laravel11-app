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
        $roles = ['admin', 'manager', 'editor', 'user'];
        $roleCounts = [
            'admin' => 2,
            'manager' => 3,
            'editor' => 5,
            'user' => 15
        ];

        foreach ($roles as $role) {
            for ($i = 1; $i <= $roleCounts[$role]; $i++) {
                User::create([
                    'name' => ucfirst($role) . ' ' . $i,
                    'email' => strtolower($role) . $i . '@example.com',
                    'password' => Hash::make('password'),
                    'role' => $role,
                ]);
            }
        }
    }
}