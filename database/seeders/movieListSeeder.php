<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class movieListSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Chèn dữ liệu mẫu vào bảng movies
        DB::table('movies')->insert([
            [
                'title' => 'Inception',
                'description' => 'A mind-bending thriller about dreams within dreams.',
                'image' => 'inception.jpg',
                'release_date' => '2010-07-16',
                'trailer' => 'https://www.youtube.com/watch?v=YoHD9XEInc0',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'The Matrix',
                'description' => 'A hacker discovers the shocking truth about his reality.',
                'image' => 'matrix.jpg',
                'release_date' => '1999-03-31',
                'trailer' => 'https://www.youtube.com/watch?v=vKQi3bBA1y8',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Interstellar',
                'description' => 'A journey through space and time to save humanity.',
                'image' => 'interstellar.jpg',
                'release_date' => '2014-11-07',
                'trailer' => 'https://www.youtube.com/watch?v=zSWdZVtXT7E',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
