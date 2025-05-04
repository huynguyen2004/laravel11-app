<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    // public function run(): void
    // {
    //     // Clear existing pivot data
    //     DB::table('user_role')->truncate();

    //     // Example: Assign roles to users
    //     // Assuming user IDs and role IDs start from 1 and increment
    //     // Assign role 1 (admin) to user 1
    //     DB::table('user_role')->insert([
    //         'user_id' => 1,
    //         'role_id' => 1,
    //         'created_at' => now(),
    //         'updated_at' => now(),
    //     ]);

    //     // Assign role 2 (manager) to user 2
    //     DB::table('user_role')->insert([
    //         'user_id' => 2,
    //         'role_id' => 2,
    //         'created_at' => now(),
    //         'updated_at' => now(),
    //     ]);

    //     // Assign role 3 (member) to users 3 to 10
    //     for ($i = 3; $i <= 10; $i++) {
    //         DB::table('user_role')->insert([
    //             'user_id' => $i,
    //             'role_id' => 3,
    //             'created_at' => now(),
    //             'updated_at' => now(),
    //         ]);
    //     }
    // }

    public function run(): void
    {
        // Clear existing pivot data
        DB::table('user_role')->truncate();

        // Mảng các vai trò
        $roles = [1, 2, 3]; // Role IDs

        // Gán quyền ngẫu nhiên cho 100 tài khoản
        for ($i = 1; $i <= 50; $i++) {
            $role_id = $roles[array_rand($roles)]; // Chọn ngẫu nhiên role ID

            DB::table('user_role')->insert([
                'user_id' => $i,
                'role_id' => $role_id,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }

}
