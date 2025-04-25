<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Clear existing pivot data
        DB::table('user_role')->truncate();

        // Example: Assign roles to users
        // Assuming user IDs and role IDs start from 1 and increment
        // Assign role 1 (admin) to user 1
        DB::table('user_role')->insert([
            'user_id' => 1,
            'role_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Assign role 2 (manager) to user 2
        DB::table('user_role')->insert([
            'user_id' => 2,
            'role_id' => 2,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Assign role 3 (member) to users 3 to 10
        for ($i = 3; $i <= 10; $i++) {
            DB::table('user_role')->insert([
                'user_id' => $i,
                'role_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
