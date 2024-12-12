<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SubUnitsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('sub_units')->delete();
        
        \DB::table('sub_units')->insert(array (
            0 => 
            array (
                'id' => 1,
                'sl' => 1,
                'unit_id' => 1,
                'sub_unit_name' => 'Piece',
                'sub_unit_name_bn' => NULL,
                'sub_unit_data' => 1.0,
                'status' => 1,
                'create_by' => 3,
                'deleted_at' => NULL,
                'created_at' => '2024-12-12 17:18:37',
                'updated_at' => '2024-12-12 17:18:37',
            ),
            1 => 
            array (
                'id' => 2,
                'sl' => 1,
                'unit_id' => 2,
                'sub_unit_name' => 'Kg',
                'sub_unit_name_bn' => NULL,
                'sub_unit_data' => 1.0,
                'status' => 1,
                'create_by' => 3,
                'deleted_at' => NULL,
                'created_at' => '2024-12-12 17:18:49',
                'updated_at' => '2024-12-12 17:18:49',
            ),
            2 => 
            array (
                'id' => 3,
                'sl' => 2,
                'unit_id' => 2,
                'sub_unit_name' => 'Gram',
                'sub_unit_name_bn' => NULL,
                'sub_unit_data' => 1000.0,
                'status' => 1,
                'create_by' => 3,
                'deleted_at' => NULL,
                'created_at' => '2024-12-12 17:19:03',
                'updated_at' => '2024-12-12 17:19:03',
            ),
        ));
        
        
    }
}