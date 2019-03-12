<?php
use Illuminate\Database\Seeder;
use TCG\Voyager\Models\Permission;

class CustomPermissionsTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     */
    public function run()
    {
        Permission::generateFor('products');
        Permission::generateFor('coupons');
        Permission::generateFor('category');
        Permission::generateFor('variants');
        Permission::generateFor('merchants');
        Permission::generateFor('links');
        Permission::generateFor('about');
        Permission::generateFor('emails');
        
        
    }
}