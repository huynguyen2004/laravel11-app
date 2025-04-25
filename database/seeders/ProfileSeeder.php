<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            [
                'name' => 'iPhone 13',
                'description' => 'Apple iPhone 13 with A15 Bionic chip',
                'price' => 999.99,
                'stock' => 50,
            ],
            [
                'name' => 'Samsung Galaxy S21',
                'description' => 'Samsung Galaxy S21 with Exynos 2100',
                'price' => 899.99,
                'stock' => 40,
            ],
            [
                'name' => 'MacBook Pro',
                'description' => 'Apple MacBook Pro with M1 Pro chip',
                'price' => 1999.99,
                'stock' => 30,
            ],
            [
                'name' => 'Dell XPS 13',
                'description' => 'Dell XPS 13 with Intel Core i7',
                'price' => 1499.99,
                'stock' => 25,
            ],
            [
                'name' => 'AirPods Pro',
                'description' => 'Apple AirPods Pro with Active Noise Cancellation',
                'price' => 249.99,
                'stock' => 100,
            ],
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}