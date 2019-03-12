
<?php
use Illuminate\Database\Seeder;
use TCG\Voyager\Models\DataType;

class CustomDataTypesTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     */
    public function run()
    {
        $dataType = $this->dataType('slug', 'products');
        if (!$dataType->exists) {
            $dataType->fill([
                'name' => 'products',
                'display_name_singular' => 'Product',
                'display_name_plural' => 'Products',
                'icon' => 'voyager-bag',
                'model_name' => 'App\Product',
                'policy_name' => null,
                'controller' => '\App\Http\Controllers\Voyager\ProductsController',
                'generate_permissions' => 1,
                'description' => '',
                'server_side' => 1,
                'details' => '{"order_column":null,"order_display_column":null}',
            ])->save();
        }
        
        $dataType = $this->dataType('slug', 'category');
        if (!$dataType->exists) {
            $dataType->fill([
                'name' => 'category',
                'display_name_singular' => 'Category',
                'display_name_plural' => 'Categories',
                'icon' => 'voyager-categories',
                'model_name' => 'App\Category',
                'controller' => '',
                'generate_permissions' => 1,
                'server_side' => 1,
                'description' => '',
                'details' => '{"order_column":null,"order_display_column":null}',
            ])->save();
        }
       
        $dataType = $this->dataType('slug', 'variants');
        if (!$dataType->exists) {
            $dataType->fill([
                'name' => 'variants',
                'slug' => 'variants',
                'display_name_singular' => 'Variant',
                'display_name_plural' => 'Variants',
                'icon' => 'voyager-lab',
                'model_name' => 'App\Variant',
                'controller' => '',
                'generate_permissions' => 1,
                'server_side' => 1,
                'description' => '',
                'details' => '{"order_column":null,"order_display_column":null}',
            ])->save();
        }

        $dataType = $this->dataType('slug', 'merchants');
        if (!$dataType->exists) {
            $dataType->fill([
                'name' => 'merchants',
                'slug' => 'merchants',
                'display_name_singular' => 'Merchant',
                'display_name_plural' => 'Merchants',
                'icon' => 'voyager-lab',
                'model_name' => 'App\Merchant',
                'controller' => '',
                'generate_permissions' => 1,
                'server_side' => 1,
                'description' => '',
                'details' => '{"order_column":null,"order_display_column":null}',
            ])->save();
        }
        $dataType = $this->dataType('slug', 'links');
        if (!$dataType->exists) {
            $dataType->fill([
                'name' => 'links',
                'slug' => 'links',
                'display_name_singular' => 'Link',
                'display_name_plural' => 'Links',
                'icon' => 'voyager-lab',
                'model_name' => 'App\Link',
                'controller' => '\App\Http\Controllers\Voyager\LinksController',
                'generate_permissions' => 1,
                'server_side' => 1,
                'description' => '',
                'details' => '{"order_column":null,"order_display_column":null}',
            ])->save();
        }


       

        $dataType = $this->dataType('slug', 'about');
        if (!$dataType->exists) {
            $dataType->fill([
                'name' => 'about',
                'slug' => 'about',
                'display_name_singular' => 'About',
                'display_name_plural' => 'About',
                'icon' => 'voyager-window-list',
                'model_name' => 'App\AboutUs',
                'controller' => '',
                'generate_permissions' => 1,
                'server_side' => 1,
                'description' => '',
                'details' => '{"order_column":null,"order_display_column":null}',
            ])->save();
        }
        
 
        $dataType = $this->dataType('name', 'emails');
        if (!$dataType->exists) {
            $dataType->fill([
                'slug' => 'emails',
                'display_name_singular' => 'Email',
                'display_name_plural' => 'Emails',
                'icon' => 'voyager-documentation',
                'model_name' => 'App\Email',
                'controller' => '\App\Http\Controllers\Voyager\EmailsController',
                'generate_permissions' => 1,
                'server_side' => 1,
                'description' => '',
                'details' => '{"order_column":null,"order_display_column":null}',
            ])->save();
        }
    
    }
    /**
     * [dataType description].
     *
     * @param [type] $field [description]
     * @param [type] $for   [description]
     *
     * @return [type] [description]
     */
    protected function dataType($field, $for)
    {
        return DataType::firstOrNew([$field => $for]);
    }
}
