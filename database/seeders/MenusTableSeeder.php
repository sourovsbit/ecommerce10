<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MenusTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('menus')->delete();
        
        \DB::table('menus')->insert(array (
            0 => 
            array (
                'id' => 9,
                'position' => 'cms',
                'label_id' => 8,
                'parent_id' => NULL,
                'name' => 'Developer Option',
                'name_bn' => 'ডেভেলপার অপশান',
                'system_name' => '',
                'route' => NULL,
                'slug' => NULL,
                'icon' => 'fa fa-bars',
                'status' => 1,
                'type' => 1,
                'order_by' => 2,
                'create_by' => 1,
                'deleted_at' => NULL,
                'created_at' => '2024-04-25 01:24:43',
                'updated_at' => '2024-12-02 17:14:59',
            ),
            1 => 
            array (
                'id' => 10,
                'position' => 'cms',
                'label_id' => 8,
                'parent_id' => 9,
                'name' => 'Menu Label',
                'name_bn' => 'মেনু স্তর',
                'system_name' => 'Menu Label',
                'route' => 'menu_label',
                'slug' => 'create',
                'icon' => '',
                'status' => 1,
                'type' => 2,
                'order_by' => 1,
                'create_by' => 3,
                'deleted_at' => NULL,
                'created_at' => '2024-05-14 23:18:49',
                'updated_at' => '2024-05-15 15:31:48',
            ),
            2 => 
            array (
                'id' => 11,
                'position' => 'cms',
                'label_id' => 8,
                'parent_id' => 9,
                'name' => 'Menu',
                'name_bn' => 'মেনু',
                'system_name' => 'Menu',
                'route' => 'menu',
                'slug' => 'create',
                'icon' => '',
                'status' => 1,
                'type' => 2,
                'order_by' => 2,
                'create_by' => 3,
                'deleted_at' => NULL,
                'created_at' => '2024-05-14 23:19:19',
                'updated_at' => '2024-05-15 15:32:30',
            ),
            3 => 
            array (
                'id' => 13,
                'position' => 'cms',
                'label_id' => 8,
                'parent_id' => NULL,
                'name' => 'Security',
                'name_bn' => 'সিকিউরিটি',
                'system_name' => NULL,
                'route' => NULL,
                'slug' => NULL,
                'icon' => 'fa fa-lock',
                'status' => 1,
                'type' => 1,
                'order_by' => 2,
                'create_by' => 3,
                'deleted_at' => NULL,
                'created_at' => '2024-05-14 23:53:32',
                'updated_at' => '2024-05-14 23:57:33',
            ),
            4 => 
            array (
                'id' => 14,
                'position' => 'cms',
                'label_id' => 8,
                'parent_id' => 13,
                'name' => 'Role',
                'name_bn' => 'রোল',
                'system_name' => 'Role',
                'route' => 'role',
                'slug' => 'index',
                'icon' => '',
                'status' => 1,
                'type' => 2,
                'order_by' => 1,
                'create_by' => 3,
                'deleted_at' => NULL,
                'created_at' => '2024-05-14 23:57:57',
                'updated_at' => '2024-05-15 15:32:56',
            ),
            5 => 
            array (
                'id' => 15,
                'position' => 'cms',
                'label_id' => 8,
                'parent_id' => 13,
                'name' => 'Users',
                'name_bn' => 'ইউজার',
                'system_name' => 'Users',
                'route' => 'user',
                'slug' => 'create',
                'icon' => '',
                'status' => 1,
                'type' => 2,
                'order_by' => 2,
                'create_by' => 3,
                'deleted_at' => NULL,
                'created_at' => '2024-05-14 23:58:53',
                'updated_at' => '2024-05-15 15:33:40',
            ),
            6 => 
            array (
                'id' => 17,
                'position' => 'cms',
                'label_id' => 7,
                'parent_id' => NULL,
                'name' => 'Dashboard',
                'name_bn' => 'ড্যাশবোর্ড',
                'system_name' => 'Dashboard',
                'route' => 'admin',
                'slug' => 'index',
                'icon' => 'fa fa-home',
                'status' => 1,
                'type' => 3,
                'order_by' => 1,
                'create_by' => 3,
                'deleted_at' => NULL,
                'created_at' => '2024-06-10 00:08:54',
                'updated_at' => '2024-06-10 00:08:54',
            ),
        ));
        
        
    }
}