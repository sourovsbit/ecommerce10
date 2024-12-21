<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProductInformationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('product_informations')->delete();
        
        \DB::table('product_informations')->insert(array (
            0 => 
            array (
                'id' => 1,
                'product_id' => 'PRD-000001',
                'sl' => 1,
                'item_id' => 1,
                'category_id' => 1,
                'sub_category_id' => 1,
                'brand_id' => 1,
                'unit_id' => 1,
                'product_name' => 'Mens Premium Shirt',
                'product_name_bn' => NULL,
                'purchase_price' => 550.0,
                'sale_price' => 650.0,
                'moq' => 1.0,
                'short_description' => NULL,
                'description' => NULL,
                'product_type' => 2,
                'status' => 1,
                'create_by' => 3,
                'deleted_at' => NULL,
                'created_at' => '2024-12-21 11:44:59',
                'updated_at' => '2024-12-21 11:44:59',
            ),
        ));
        
        
    }
}