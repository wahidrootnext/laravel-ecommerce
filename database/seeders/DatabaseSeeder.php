<?php

namespace Database\Seeders;

use App\Models\ProductImage;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UserSeeder::class,
            ShopSeeder::class,
            CategorySeeder::class,
            ProductSeeder::class,
            ProductImage::class
        ]);
    }
}
