<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Exception;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('users')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        $roles = DB::table('roles')->pluck('name')->toArray();

        // if (empty($roles)) {
        //     throw new Exception('Bảng roles không có dữ liệu. Vui lòng seed dữ liệu roles trước.');
        // }

        for ($i = 0; $i < 50; $i++) {
            DB::table('users')->insert([
                'name' => 'user' . $i,
                'email' => 'user' . $i . '@example.com',
                'password' => password_hash('123456', PASSWORD_DEFAULT),
            ]);
        }
    }
}
