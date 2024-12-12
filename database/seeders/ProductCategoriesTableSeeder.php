<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProductCategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('product_categories')->delete();
        
        \DB::table('product_categories')->insert(array (
            0 => 
            array (
                'id' => 1,
                'sl' => 1,
                'item_id' => 1,
                'category_name' => 'Mens Wear',
                'category_name_bn' => NULL,
                'image' => '0',
                'banner' => '0',
                'status' => 1,
                'create_by' => 3,
                'deleted_at' => NULL,
                'created_at' => '2024-12-12 17:13:22',
                'updated_at' => '2024-12-12 17:13:22',
            ),
            1 => 
            array (
                'id' => 2,
                'sl' => 2,
                'item_id' => 1,
                'category_name' => 'Mens Shoes',
                'category_name_bn' => NULL,
                'image' => '0',
                'banner' => '0',
                'status' => 1,
                'create_by' => 3,
                'deleted_at' => NULL,
                'created_at' => '2024-12-12 17:13:35',
                'updated_at' => '2024-12-12 17:13:35',
            ),
        ));
        
        
    }
}