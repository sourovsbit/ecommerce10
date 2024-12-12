<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProductBrandsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('product_brands')->delete();
        
        \DB::table('product_brands')->insert(array (
            0 => 
            array (
                'id' => 1,
                'sl' => 1,
                'brand_name' => 'Triangle Fashion',
                'brand_name_bn' => NULL,
                'image' => '0',
                'banner' => '0',
                'status' => 1,
                'create_by' => 3,
                'deleted_at' => NULL,
                'created_at' => '2024-12-12 17:15:56',
                'updated_at' => '2024-12-12 17:15:56',
            ),
            1 => 
            array (
                'id' => 2,
                'sl' => 2,
                'brand_name' => 'Relaxed Fashion',
                'brand_name_bn' => NULL,
                'image' => '0',
                'banner' => '0',
                'status' => 1,
                'create_by' => 3,
                'deleted_at' => NULL,
                'created_at' => '2024-12-12 17:16:09',
                'updated_at' => '2024-12-12 17:16:09',
            ),
        ));
        
        
    }
}