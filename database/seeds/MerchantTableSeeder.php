<?php

use App\Merchant;
use Illuminate\Database\Seeder;

class MerchantTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       Merchant::create([
        'name' => 'Amazon'
       ]);

       Merchant::create([
        'name' => 'Wayfair'
       ]);

       Merchant::create([
        'name' => 'Homedepot'
       ]);

       Merchant::create([
        'name' => 'Walmart'
       ]);

       Merchant::create([
        'name' => 'QCV'
       ]);
    }
}
