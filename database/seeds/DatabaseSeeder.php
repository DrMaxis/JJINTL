<?php

use App\Product;
use App\Category;
use App\AboutUs;
use App\Variant;
use App\Merchant;
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
        $this->call(CategoryTableSeeder::class);
        $this->call(ProductsTableSeeder::class);
        $this->call(AboutUsTableSeeder::class);
        $this->call(VariantTableSeeder::class);
        $this->call(MerchantTableSeeder::class);
    }
}
