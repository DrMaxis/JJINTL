<?php

use App\Product;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'name' => 'F8111 Patio Set',
            'slug' => 'F8111-patio',
            'model' => 'F8111-J',
            'sku' => '8111JB',
            'details' => '4 Piece Outdoor Patio set',
            'shipping_weight' => 0,
            'box_length' => 0,
            'box_width' => 0,
            'box_height' => 0,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
            'featured' => 1,
            'new' => 1,
        ])->categories()->attach(2);

        Product::create([
            'name' => 'F6002 Modern Futon Chiar',
            'slug' => 'f6002-chair',
            'model' => 'f6002-j',
            'sku' => '6002JB',
            'details' => '4 Piece Outdoor Patio set',
            'shipping_weight' => 0,
            'box_length' => 0,
            'box_width' => 0,
            'box_height' => 0,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
        ])->categories()->attach(2);
        Product::create([
            'name' => 'F8102 Italian Wicker Set',
            'slug' => 'f8102',
            'model' => 'XAT-C',
            'sku' => '1MXADT',
            'details' => '4 Piece Outdoor Patio set',
            'shipping_weight' => 0,
            'box_length' => 0,
            'box_width' => 0,
            'box_height' => 0,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
            'featured' => 1,
        ])->categories()->attach(2);
        Product::create([
            'name' => 'F8500 PATIO SET',
            'slug' => 'f8500-patio',
            'model' => 'XFAC-C',
            'sku' => '01MXAAC',
            'details' => '4 Piece Outdoor Patio set',
            'shipping_weight' => 0,
            'box_length' => 0,
            'box_width' => 0,
            'box_height' => 0,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
        ])->categories()->attach(1);
        Product::create([
            'name' => 'S9414-N GOLF STORAGE CART',
            'slug' => 's9414-golf-cart',
            'model' => 'XF9414C-C',
            'sku' => 'XCV9414',
            'details' => 'Outdoor Golf Storage Cart',
            'shipping_weight' => 0,
            'box_length' => 0,
            'box_width' => 0,
            'box_height' => 0,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
            'new' => 1,
        ])->categories()->attach([2,3]);

        Product::create([
            'name' => 'S9428-3 GARDEN CART',
            'slug' => 's9428-golf-cart',
            'model' => 'XF9428C-C',
            'sku' => 'XCV9428',
            'details' => 'Outdoor Garden Storage Cart',
            'shipping_weight' => 0,
            'box_length' => 0,
            'box_width' => 0,
            'box_height' => 0,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
            'new' => 1,
        ])->categories()->attach(2);
        Product::create([
            'name' => 'S9503 STORAGE SHELF',
            'slug' => 's9503-storage-shelf',
            'model' => 'XF9503C-C',
            'sku' => 'XCV9503',
            'details' => 'Storage Shelf',
            'shipping_weight' => 0,
            'box_length' => 0,
            'box_width' => 0,
            'box_height' => 0,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',

        ])->categories()->attach(1);
        Product::create([
            'name' => 'F8107 PATIO SET',
            'slug' => 'f8107-patio-set',
            'model' => 'XF8107C-C',
            'sku' => 'XCV8107',
            'details' => '3 Piece Outdoor Patio Set',
            'shipping_weight' => 0,
            'box_length' => 0,
            'box_width' => 0,
            'box_height' => 0,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
            'new' => 1,
        ])->categories()->attach(2);
    }
    
}
