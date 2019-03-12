<?php

use App\Variant;
use Illuminate\Database\Seeder;

class VariantTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Variant::create([
            'name' => 'F8111 Grey',
            'slug' => 'grey-f8111',
            'model' => 'grey-XT501-C',
            'sku' => '09MRB8111T',
            'color' => 'Grey',
            'featured' => 1,
            'new' => 1,
            'shipping_weight' => 0,
            'box_length' => 0,
            'box_width' => 0,
            'box_height' => 0,
            
        ]);

        Variant::create([
            'name' => 'F8102 Grey',
            'slug' => 'grey-f8102',
            'model' => 'grey-XT502-C',
            'sku' => '09MR8102T',
            'color' => 'Grey',
            'featured' => 1,
            'new' => 1,
            'shipping_weight' => 0,
            'box_length' => 0,
            'box_width' => 0,
            'box_height' => 0,
            
        ]);

        Variant::create([
            'name' => 'F6002 Grey',
            'slug' => 'greu-f60021',
            'model' => 'brown-XT602-C',
            'sku' => '09MRB6002T',
            'color' => 'Grey',
            'featured' => 1,
            'new' => 1,
            'shipping_weight' => 0,
            'box_length' => 0,
            'box_width' => 0,
            'box_height' => 0,
            
        ]);
    }
}
