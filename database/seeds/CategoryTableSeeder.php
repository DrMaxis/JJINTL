<?php

use App\Category;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now()->toDateTimeString();

        Category::insert([
            ['name' => 'Indoor Products', 'slug' => 'indoor-products'],
            ['name' => 'Outdoor Products', 'slug' => 'outdoor-products'],
            ['name' => 'Accessories', 'slug' => 'accessories']
        ]);
    }
}
