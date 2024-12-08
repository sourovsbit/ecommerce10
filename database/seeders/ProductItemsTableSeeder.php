<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProductItemsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('product_items')->delete();
        
        \DB::table('product_items')->insert(array (
            0 => 
            array (
                'id' => 2,
                'item_name' => 'Baby Item',
                'item_name_bn' => 'বেবি আইটেম',
                'status' => 1,
                'create_by' => 3,
                'deleted_at' => NULL,
                'created_at' => '2024-12-07 17:18:05',
                'updated_at' => '2024-12-07 17:18:05',
            ),
        ));
        
        
    }
}