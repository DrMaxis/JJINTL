<?php
use Illuminate\Database\Seeder;
use TCG\Voyager\Models\DataRow;
use TCG\Voyager\Models\DataType;

class CustomDataRowsTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     */
    public function run()
    {
        $productDataType = DataType::where('slug', 'products')->firstOrFail();
        /*
        |--------------------------------------------------------------------------
        | Products
        |--------------------------------------------------------------------------
         */
        $dataRow = $this->dataRow($productDataType, 'id');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type' => 'hidden',
                'display_name' => 'Id',
                'required' => 1,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 0,
                'details' => '',
                'order' => 1,
            ])->save();
        }
        $dataRow = $this->dataRow($productDataType, 'name');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type' => 'text',
                'display_name' => 'Name',
                'required' => 1,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'details' => '',
                'order' => 2,
            ])->save();
        }
        $dataRow = $this->dataRow($productDataType, 'model');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type' => 'text',
                'display_name' => 'Model',
                'required' => 1,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'details' => '',
                'order' => 3,
            ])->save();
        }
        $dataRow = $this->dataRow($productDataType, 'slug');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type' => 'text',
                'display_name' => 'Slug',
                'required' => 1,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'details' => '',
                'order' => 4,
            ])->save();
        }
        $dataRow = $this->dataRow($productDataType, 'sku');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type' => 'text',
                'display_name' => 'SKU',
                'required' => 1,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'details' => '',
                'order' => 5,
            ])->save();
        }
        $dataRow = $this->dataRow($productDataType, 'color');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type' => 'text',
                'display_name' => 'Color',
                'required' => 0,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'details' => '{"on":"Yes","off":"No"}',
                'order' => 6,
            ])->save();
        }

        $dataRow = $this->dataRow($productDataType, 'new');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type' => 'text',
                'display_name' => 'New',
                'required' => 0,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'details' => '{"on":"Yes","off":"No"}',
                'order' => 7,
            ])->save();
        }

        $dataRow = $this->dataRow($productDataType, 'featured');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type' => 'text',
                'display_name' => 'Featured',
                'required' => 0,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'details' => '{"on":"Yes","off":"No"}',
                'order' => 8,
            ])->save();
        }
        $dataRow = $this->dataRow($productDataType, 'image');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type' => 'image',
                'display_name' => 'Image',
                'required' => 1,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'details' => '{"resize":{"width":"1000","height":null},"quality":"70%","upsize":false,"thumbnails":[{"name":"medium","scale":"50%"},{"name":"small","scale":"25%"},{"name":"cropped","crop":{"width":"300","height":"250"}}]}',
                'order' => 9,
            ])->save();
        }


        $dataRow = $this->dataRow($productDataType, 'images');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type' => 'multiple_images',
                'display_name' => 'Images',
                'required' => 0,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'details' => '',
                'order' => 10,
            ])->save();
        }

        $dataRow = $this->dataRow($productDataType, 'banner_image');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type' => 'image',
                'display_name' => 'Banner Image',
                'required' => 0,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'details' => '',
                'order' => 11,
            ])->save();
        }
        $dataRow = $this->dataRow($productDataType, 'created_at');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type' => 'timestamp',
                'display_name' => 'Created At',
                'required' => 1,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'details' => '',
                'order' => 12,
            ])->save();
        }
        $dataRow = $this->dataRow($productDataType, 'updated_at');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type' => 'timestamp',
                'display_name' => 'Updated At',
                'required' => 1,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'details' => '',
                'order' => 13,
            ])->save();
        }

        /*
        |--------------------------------------------------------------------------
        | Categories
        |--------------------------------------------------------------------------
         */
        $categoryDataType = DataType::where('slug', 'category')->firstOrFail();

        $dataRow = $this->dataRow($categoryDataType, 'id');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type' => 'hidden',
                'display_name' => 'Id',
                'required' => 1,
                'browse' => 1,
                'read' => 1,
                'edit' => 0,
                'add' => 0,
                'delete' => 0,
                'details' => '',
                'order' => 1,
            ])->save();
        }
        $dataRow = $this->dataRow($categoryDataType, 'name');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type' => 'text',
                'display_name' => 'Name',
                'required' => 1,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'details' => '',
                'order' => 2,
            ])->save();
        }
        $dataRow = $this->dataRow($categoryDataType, 'slug');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type' => 'text',
                'display_name' => 'Slug',
                'required' => 1,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'details' => '',
                'order' => 3,
            ])->save();
        }
        $dataRow = $this->dataRow($categoryDataType, 'created_at');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type' => 'timestamp',
                'display_name' => 'Created At',
                'required' => 0,
                'browse' => 0,
                'read' => 0,
                'edit' => 0,
                'add' => 0,
                'delete' => 0,
                'details' => '',
                'order' => 4,
            ])->save();
        }
        $dataRow = $this->dataRow($categoryDataType, 'updated_at');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type' => 'timestamp',
                'display_name' => 'Updated At',
                'required' => 0,
                'browse' => 0,
                'read' => 0,
                'edit' => 0,
                'add' => 0,
                'delete' => 0,
                'details' => '',
                'order' => 5,
            ])->save();
        }






        /*
        |--------------------------------------------------------------------------
        | Variants
        |--------------------------------------------------------------------------
         */
        $variantDataType = DataType::where('slug', 'variants')->firstOrFail();

        $dataRow = $this->dataRow($variantDataType, 'id');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type' => 'hidden',
                'display_name' => 'Id',
                'required' => 1,
                'browse' => 1,
                'read' => 1,
                'edit' => 0,
                'add' => 0,
                'delete' => 0,
                'details' => '',
                'order' => 1,
            ])->save();
        }
        $dataRow = $this->dataRow($variantDataType, 'name');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type' => 'text',
                'display_name' => 'Name',
                'required' => 1,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'details' => '',
                'order' => 2,
            ])->save();
        }
        $dataRow = $this->dataRow($variantDataType, 'model');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type' => 'text',
                'display_name' => 'Model',
                'required' => 1,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'details' => '',
                'order' => 3,
            ])->save();
        }
        $dataRow = $this->dataRow($variantDataType, 'slug');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type' => 'text',
                'display_name' => 'Slug',
                'required' => 1,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'details' => '',
                'order' => 4,
            ])->save();
        }
        $dataRow = $this->dataRow($variantDataType, 'sku');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type' => 'text',
                'display_name' => 'SKU',
                'required' => 1,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'details' => '',
                'order' => 5,
            ])->save();
        }
        $dataRow = $this->dataRow($variantDataType, 'color');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type' => 'text',
                'display_name' => 'Color',
                'required' => 0,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'details' => '{"on":"Yes","off":"No"}',
                'order' => 6,
            ])->save();
        }

        $dataRow = $this->dataRow($variantDataType, 'new');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type' => 'text',
                'display_name' => 'New',
                'required' => 0,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'details' => '{"on":"Yes","off":"No"}',
                'order' => 7,
            ])->save();
        }

        $dataRow = $this->dataRow($variantDataType, 'featured');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type' => 'text',
                'display_name' => 'Featured',
                'required' => 0,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'details' => '{"on":"Yes","off":"No"}',
                'order' => 8,
            ])->save();
        }
        $dataRow = $this->dataRow($variantDataType, 'image');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type' => 'image',
                'display_name' => 'Image',
                'required' => 1,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'details' => '{"resize":{"width":"1000","height":null},"quality":"70%","upsize":false,"thumbnails":[{"name":"medium","scale":"50%"},{"name":"small","scale":"25%"},{"name":"cropped","crop":{"width":"300","height":"250"}}]}',
                'order' => 9,
            ])->save();
        }


        $dataRow = $this->dataRow($variantDataType, 'images');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type' => 'multiple_images',
                'display_name' => 'Images',
                'required' => 0,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'details' => '',
                'order' => 10,
            ])->save();
        }

        $dataRow = $this->dataRow($variantDataType, 'banner_image');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type' => 'image',
                'display_name' => 'Banner Image',
                'required' => 0,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'details' => '',
                'order' => 11,
            ])->save();
        }

    

        $dataRow = $this->dataRow($variantDataType, 'created_at');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type' => 'timestamp',
                'display_name' => 'Created At',
                'required' => 0,
                'browse' => 0,
                'read' => 0,
                'edit' => 0,
                'add' => 0,
                'delete' => 0,
                'details' => '',
                'order' => 6,
            ])->save();
        }
        $dataRow = $this->dataRow($variantDataType, 'updated_at');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type' => 'timestamp',
                'display_name' => 'Updated At',
                'required' => 0,
                'browse' => 0,
                'read' => 0,
                'edit' => 0,
                'add' => 0,
                'delete' => 0,
                'details' => '',
                'order' => 7,
            ])->save();
        }


        /*
        |--------------------------------------------------------------------------
        | About Us 
        |--------------------------------------------------------------------------
         */
        $aboutUsDataType = DataType::where('slug', 'about')->firstOrFail();

        $dataRow = $this->dataRow($aboutUsDataType, 'id');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type' => 'hidden',
                'display_name' => 'Id',
                'required' => 1,
                'browse' => 1,
                'read' => 1,
                'edit' => 0,
                'add' => 0,
                'delete' => 0,
                'details' => '',
                'order' => 1,
            ])->save();
        }
        $dataRow = $this->dataRow($aboutUsDataType, 'title');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type' => 'text',
                'display_name' => 'Title',
                'required' => 1,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'details' => '',
                'order' => 2,
            ])->save();
        }
        $dataRow = $this->dataRow($aboutUsDataType, 'subtitle');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type' => 'text',
                'display_name' => 'Subtitle',
                'required' => 0,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'details' => '',
                'order' => 3,
            ])->save();
        }
        $dataRow = $this->dataRow($aboutUsDataType, 'slug');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type' => 'text',
                'display_name' => 'Slug',
                'required' => 1,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'details' => '',
                'order' => 4,
            ])->save();
        }

        $dataRow = $this->dataRow($aboutUsDataType, 'description');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type' => 'rich_text_box',
                'display_name' => 'Description',
                'required' => 1,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'details' => '',
                'order' => 5,
            ])->save();
        }

        $dataRow = $this->dataRow($aboutUsDataType, 'image');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type' => 'image',
                'display_name' => 'Image',
                'required' => 0,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'details' => '',
                'order' => 6,
            ])->save();
        }

        $dataRow = $this->dataRow($aboutUsDataType, 'images');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type' => 'multiple_images',
                'display_name' => 'Images',
                'required' => 0,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'details' => '',
                'order' => 7,
            ])->save();
        }


        $dataRow = $this->dataRow($aboutUsDataType, 'created_at');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type' => 'timestamp',
                'display_name' => 'Created At',
                'required' => 0,
                'browse' => 0,
                'read' => 0,
                'edit' => 0,
                'add' => 0,
                'delete' => 0,
                'details' => '',
                'order' => 8,
            ])->save();
        }
        $dataRow = $this->dataRow($aboutUsDataType, 'updated_at');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type' => 'timestamp',
                'display_name' => 'Updated At',
                'required' => 0,
                'browse' => 0,
                'read' => 0,
                'edit' => 0,
                'add' => 0,
                'delete' => 0,
                'details' => '',
                'order' => 9,
            ])->save();
        }

        /*
        |--------------------------------------------------------------------------
        | Emails
        |--------------------------------------------------------------------------
         */
        $emailsDataType = DataType::where('slug', 'emails')->firstOrFail();
        $dataRow = $this->dataRow($emailsDataType, 'id');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type' => 'hidden',
                'display_name' => 'Id',
                'required' => 1,
                'browse' => 1,
                'read' => 1,
                'edit' => 0,
                'add' => 0,
                'delete' => 0,
                'details' => '',
                'order' => 1,
            ])->save();
        }
        $dataRow = $this->dataRow($emailsDataType, 'name');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type' => 'text',
                'display_name' => 'Name',
                'required' => 1,
                'browse' => 1,
                'read' => 1,
                'edit' => 0,
                'add' => 0,
                'delete' => 0,
                'details' => '',
                'order' => 2,
            ])->save();
        }
        $dataRow = $this->dataRow($emailsDataType, 'email');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type' => 'text',
                'display_name' => 'Email',
                'required' => 1,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 0,
                'details' => '',
                'order' => 3,
            ])->save();
        }
        $dataRow = $this->dataRow($emailsDataType, 'company');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type' => 'text',
                'display_name' => 'Company',
                'required' => 1,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 0,
                'details' => '',
                'order' => 4,
            ])->save();
        }
        $dataRow = $this->dataRow($emailsDataType, 'subject');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type' => 'text',
                'display_name' => 'Subject',
                'required' => 1,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 0,
                'details' => '',
                'order' => 5,
            ])->save();
        }
        $dataRow = $this->dataRow($emailsDataType, 'message');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type' => 'text',
                'display_name' => 'Message',
                'required' => 1,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 0,
                'details' => '',
                'order' => 6,
            ])->save();
        }




        /*
        |--------------------------------------------------------------------------
        | Merchants
        |--------------------------------------------------------------------------
         */
        $merchantDataType = DataType::where('slug', 'merchants')->firstOrFail();
        $dataRow = $this->dataRow($merchantDataType, 'id');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type' => 'hidden',
                'display_name' => 'Id',
                'required' => 1,
                'browse' => 1,
                'read' => 1,
                'edit' => 0,
                'add' => 0,
                'delete' => 0,
                'details' => '',
                'order' => 1,
            ])->save();
        }
        $dataRow = $this->dataRow($merchantDataType, 'name');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type' => 'text',
                'display_name' => 'Company Name',
                'required' => 1,
                'browse' => 1,
                'read' => 1,
                'edit' => 0,
                'add' => 0,
                'delete' => 0,
                'details' => '',
                'order' => 2,
            ])->save();
        }
        $dataRow = $this->dataRow($merchantDataType, 'icon');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type' => 'image',
                'display_name' => 'Company Logo',
                'required' => 1,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 0,
                'details' => '{"resize":{"width":"1000","height":null},"quality":"70%","upsize":false,"thumbnails":[{"name":"medium","scale":"50%"},{"name":"small","scale":"25%"},{"name":"cropped","crop":{"width":"300","height":"250"}}]}',
                'order' => 3,
            ])->save();
        }




        /*
        |--------------------------------------------------------------------------
        | Links
        |--------------------------------------------------------------------------
         */
        $linkDataType = DataType::where('slug', 'links')->firstOrFail();
        $dataRow = $this->dataRow($linkDataType, 'id');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type' => 'hidden',
                'display_name' => 'Id',
                'required' => 1,
                'browse' => 1,
                'read' => 1,
                'edit' => 0,
                'add' => 0,
                'delete' => 0,
                'details' => '',
                'order' => 1,
            ])->save();
        }
        $dataRow = $this->dataRow($linkDataType, 'link');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type' => 'text',
                'display_name' => 'Link',
                'required' => 1,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'details' => '',
                'order' => 2,
            ])->save();
        }
        $dataRow = $this->dataRow($linkDataType, 'product_name');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type' => 'text',
                'display_name' => 'Product',
                'required' => 1,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'details' => '',
                'order' => 3,
            ])->save();
        }
        
        
       
    }
    /**
     * [dataRow description].
     *
     * @param [type] $type  [description]
     * @param [type] $field [description]
     *
     * @return [type] [description]
     */
    protected function dataRow($type, $field)
    {
        return DataRow::firstOrNew([
            'data_type_id' => $type->id,
            'field' => $field,
        ]);
    }
}
