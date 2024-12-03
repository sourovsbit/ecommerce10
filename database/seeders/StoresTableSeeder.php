<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class StoresTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('stores')->delete();
        
        \DB::table('stores')->insert(array (
            0 => 
            array (
                'id' => 1,
                'store_name' => 'Green Luxe Beauty',
                'store_name_bn' => NULL,
                'phone' => '01575434262',
                'phone_2' => NULL,
                'email' => 'greenluxebeauty@gmail.com',
                'adress' => 'Feni',
                'logo' => '493732941.png',
                'status' => 1,
                'deleted_at' => NULL,
                'create_by' => 3,
                'created_at' => '2024-06-23 23:26:38',
                'updated_at' => '2024-06-25 00:34:26',
            ),
            1 => 
            array (
                'id' => 2,
                'store_name' => 'Mom Baby Emart',
                'store_name_bn' => NULL,
                'phone' => '01872583429',
                'phone_2' => NULL,
                'email' => NULL,
                'adress' => NULL,
                'logo' => '1602840259.png',
                'status' => 1,
                'deleted_at' => NULL,
                'create_by' => 3,
                'created_at' => '2024-06-24 16:46:24',
                'updated_at' => '2024-06-24 16:46:24',
            ),
        ));
        
        
    }
}