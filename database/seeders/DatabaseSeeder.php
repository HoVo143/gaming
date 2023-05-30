<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Brands;
use App\Models\Images;
use App\Models\ProductCategory;
use App\Models\Products;
use App\Models\User;
use Database\Factories\BrandsFactory;
use Database\Factories\ImagesFactory;
use Database\Factories\ProductCategoryFactory;
use Database\Factories\ProductsFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::factory(3)->create();
        ProductCategory::factory(5)->create();
        Brands::factory(4)->create();
        Products::factory(15)->create();
        Images::factory(15)->create();
    }
}
