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
            5 => 
            array (
                'id' => 22,
                'position' => 'cms',
                'label_id' => 7,
                'parent_id' => NULL,
                'name' => 'Dashboard',
                'name_bn' => 'ড্যাশবোর্ড',
                'system_name' => 'Dashboard',
                'route' => 'admin',
                'slug' => 'view',
                'icon' => 'fa fa-home',
                'status' => 1,
                'type' => 3,
                'order_by' => 1,
                'create_by' => 3,
                'deleted_at' => NULL,
                'created_at' => '2024-12-05 15:39:06',
                'updated_at' => '2024-12-05 15:40:34',
            ),
            6 => 
            array (
                'id' => 23,
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
                'order_by' => 2,
                'create_by' => 3,
                'deleted_at' => NULL,
                'created_at' => '2024-12-05 15:39:29',
                'updated_at' => '2024-12-05 15:43:54',
            ),
            7 => 
            array (
                'id' => 24,
                'position' => 'cms',
                'label_id' => 9,
                'parent_id' => NULL,
                'name' => 'Product Settings',
                'name_bn' => 'পণ্য সেটিংস',
                'system_name' => NULL,
                'route' => NULL,
                'slug' => NULL,
                'icon' => 'fa fa-gears',
                'status' => 1,
                'type' => 1,
                'order_by' => 3,
                'create_by' => 3,
                'deleted_at' => NULL,
                'created_at' => '2024-12-05 15:46:59',
                'updated_at' => '2024-12-05 15:46:59',
            ),
            8 => 
            array (
                'id' => 25,
                'position' => 'cms',
                'label_id' => 9,
                'parent_id' => 24,
                'name' => 'Product Item',
                'name_bn' => 'পণ্য আইটেম',
                'system_name' => 'Product Item',
                'route' => 'product_item',
                'slug' => 'index',
                'icon' => '',
                'status' => 1,
                'type' => 2,
                'order_by' => 14,
                'create_by' => 3,
                'deleted_at' => NULL,
                'created_at' => '2024-12-05 15:48:31',
                'updated_at' => '2024-12-07 13:20:50',
            ),
            9 => 
            array (
                'id' => 26,
                'position' => 'cms',
                'label_id' => 9,
                'parent_id' => 24,
                'name' => 'Product Category',
                'name_bn' => 'প্রোডাক্ট ক্যাটাগরি',
                'system_name' => 'Product Category',
                'route' => 'product_category',
                'slug' => 'index',
                'icon' => NULL,
                'status' => 1,
                'type' => 2,
                'order_by' => 2,
                'create_by' => 3,
                'deleted_at' => NULL,
                'created_at' => '2024-12-07 17:03:33',
                'updated_at' => '2024-12-07 17:03:33',
            ),
            10 => 
            array (
                'id' => 27,
                'position' => 'cms',
                'label_id' => 9,
                'parent_id' => 24,
                'name' => 'Product Sub Category',
                'name_bn' => 'প্রোডাক্ট সাব ক্যাটাগরি',
                'system_name' => 'Product Sub Category',
                'route' => 'product_sub_category',
                'slug' => 'index',
                'icon' => '',
                'status' => 1,
                'type' => 2,
                'order_by' => 3,
                'create_by' => 3,
                'deleted_at' => NULL,
                'created_at' => '2024-12-08 16:14:09',
                'updated_at' => '2024-12-09 12:07:18',
            ),
            11 => 
            array (
                'id' => 28,
                'position' => 'cms',
                'label_id' => 9,
                'parent_id' => 24,
                'name' => 'Product Brand',
                'name_bn' => 'প্রোডাক্ট ব্র্যান্ড',
                'system_name' => 'Product Brand',
                'route' => 'product_brands',
                'slug' => 'index',
                'icon' => NULL,
                'status' => 1,
                'type' => 2,
                'order_by' => 3,
                'create_by' => 3,
                'deleted_at' => NULL,
                'created_at' => '2024-12-09 12:10:02',
                'updated_at' => '2024-12-09 12:10:02',
            ),
            12 => 
            array (
                'id' => 29,
                'position' => 'cms',
                'label_id' => 9,
                'parent_id' => 24,
                'name' => 'Product Size',
                'name_bn' => 'প্রোডাক্ট সাইজ',
                'system_name' => 'Product Size',
                'route' => 'product_size',
                'slug' => 'index',
                'icon' => NULL,
                'status' => 1,
                'type' => 2,
                'order_by' => 5,
                'create_by' => 3,
                'deleted_at' => NULL,
                'created_at' => '2024-12-10 10:52:39',
                'updated_at' => '2024-12-10 10:52:39',
            ),
            13 => 
            array (
                'id' => 30,
                'position' => 'cms',
                'label_id' => 9,
                'parent_id' => 24,
                'name' => 'Product Color',
                'name_bn' => 'প্রোডাক্ট কালার',
                'system_name' => 'Product Color',
                'route' => 'product_color',
                'slug' => 'index',
                'icon' => NULL,
                'status' => 1,
                'type' => 2,
                'order_by' => 6,
                'create_by' => 3,
                'deleted_at' => NULL,
                'created_at' => '2024-12-10 10:53:32',
                'updated_at' => '2024-12-19 17:32:22',
            ),
            14 => 
            array (
                'id' => 31,
                'position' => 'cms',
                'label_id' => 9,
                'parent_id' => 24,
                'name' => 'Unit',
                'name_bn' => 'ইউনিট',
                'system_name' => 'Unit',
                'route' => 'unit',
                'slug' => 'index',
                'icon' => NULL,
                'status' => 1,
                'type' => 2,
                'order_by' => 7,
                'create_by' => 3,
                'deleted_at' => NULL,
                'created_at' => '2024-12-10 16:35:42',
                'updated_at' => '2024-12-10 16:35:42',
            ),
            15 => 
            array (
                'id' => 32,
                'position' => 'cms',
                'label_id' => 9,
                'parent_id' => 24,
                'name' => 'Sub Unit',
                'name_bn' => 'সাব ইউনিট',
                'system_name' => 'Sub Unit',
                'route' => 'sub_unit',
                'slug' => 'index',
                'icon' => NULL,
                'status' => 1,
                'type' => 2,
                'order_by' => 8,
                'create_by' => 3,
                'deleted_at' => NULL,
                'created_at' => '2024-12-10 16:36:30',
                'updated_at' => '2024-12-19 17:32:23',
            ),
            16 => 
            array (
                'id' => 33,
                'position' => 'cms',
                'label_id' => 9,
                'parent_id' => NULL,
                'name' => 'Product Information',
                'name_bn' => 'প্রোডাক্ট ইনফরমেশন',
                'system_name' => NULL,
                'route' => NULL,
                'slug' => NULL,
                'icon' => 'fa-solid fa-shop',
                'status' => 1,
                'type' => 1,
                'order_by' => 2,
                'create_by' => 3,
                'deleted_at' => NULL,
                'created_at' => '2024-12-12 12:48:55',
                'updated_at' => '2024-12-12 12:48:55',
            ),
            17 => 
            array (
                'id' => 34,
                'position' => 'cms',
                'label_id' => 9,
                'parent_id' => 33,
                'name' => 'Product',
                'name_bn' => 'প্রোডাক্ট',
                'system_name' => 'Product Information',
                'route' => 'product_information',
                'slug' => 'index',
                'icon' => NULL,
                'status' => 1,
                'type' => 2,
                'order_by' => 1,
                'create_by' => 3,
                'deleted_at' => NULL,
                'created_at' => '2024-12-12 12:52:35',
                'updated_at' => '2024-12-12 12:52:35',
            ),
            18 => 
            array (
                'id' => 35,
                'position' => 'cms',
                'label_id' => 10,
                'parent_id' => NULL,
                'name' => 'Vendor Information',
                'name_bn' => 'ভেন্ডর ইনফরমেশন',
                'system_name' => NULL,
                'route' => NULL,
                'slug' => NULL,
                'icon' => 'fa-solid fa-person',
                'status' => 1,
                'type' => 1,
                'order_by' => 6,
                'create_by' => 3,
                'deleted_at' => NULL,
                'created_at' => '2024-12-14 18:08:52',
                'updated_at' => '2024-12-14 18:08:52',
            ),
            19 => 
            array (
                'id' => 36,
                'position' => 'cms',
                'label_id' => 10,
                'parent_id' => 35,
                'name' => 'Vendor',
                'name_bn' => 'ভেন্ডর',
                'system_name' => 'Vendor',
                'route' => 'vendor',
                'slug' => 'index',
                'icon' => '',
                'status' => 1,
                'type' => 2,
                'order_by' => 1,
                'create_by' => 3,
                'deleted_at' => NULL,
                'created_at' => '2024-12-14 18:09:24',
                'updated_at' => '2024-12-19 18:24:26',
            ),
            20 => 
            array (
                'id' => 37,
                'position' => 'cms',
                'label_id' => 11,
                'parent_id' => NULL,
                'name' => 'Delivery Charge Setup',
                'name_bn' => 'ডেলিভারি চার্জ সেটআপ',
                'system_name' => NULL,
                'route' => NULL,
                'slug' => NULL,
                'icon' => 'fa-solid fa-truck',
                'status' => 1,
                'type' => 1,
                'order_by' => 6,
                'create_by' => 3,
                'deleted_at' => NULL,
                'created_at' => '2024-12-19 17:21:46',
                'updated_at' => '2024-12-19 17:32:14',
            ),
            21 => 
            array (
                'id' => 40,
                'position' => 'cms',
                'label_id' => 11,
                'parent_id' => 37,
                'name' => 'Division Setup',
                'name_bn' => 'বিভাগ সেটআপ',
                'system_name' => 'Division Setup',
                'route' => 'division_setup',
                'slug' => 'index',
                'icon' => NULL,
                'status' => 1,
                'type' => 2,
                'order_by' => 3,
                'create_by' => 3,
                'deleted_at' => NULL,
                'created_at' => '2024-12-19 18:03:12',
                'updated_at' => '2024-12-19 18:03:12',
            ),
            22 => 
            array (
                'id' => 42,
                'position' => 'cms',
                'label_id' => 11,
                'parent_id' => 37,
                'name' => 'District Setup',
                'name_bn' => 'জেলা সেটআপ',
                'system_name' => 'District Setup',
                'route' => 'district_setup',
                'slug' => 'index',
                'icon' => NULL,
                'status' => 1,
                'type' => 2,
                'order_by' => 4,
                'create_by' => 3,
                'deleted_at' => NULL,
                'created_at' => '2024-12-19 18:05:35',
                'updated_at' => '2024-12-19 18:05:35',
            ),
            23 => 
            array (
                'id' => 43,
                'position' => 'cms',
                'label_id' => 11,
                'parent_id' => 37,
                'name' => 'Shipping Class',
                'name_bn' => 'শিপিং ক্লাস',
                'system_name' => 'Shipping Class',
                'route' => 'shipping_class',
                'slug' => 'index',
                'icon' => NULL,
                'status' => 0,
                'type' => 2,
                'order_by' => 2,
                'create_by' => 3,
                'deleted_at' => NULL,
                'created_at' => '2024-12-21 16:51:41',
                'updated_at' => '2024-12-21 16:51:41',
                'label_id' => 12,
                'parent_id' => NULL,
                'name' => 'Supplier',
                'name_bn' => 'সাপ্লাইয়ার',
                'system_name' => NULL,
                'route' => NULL,
                'slug' => NULL,
                'icon' => 'fa fa-users',
                'status' => 1,
                'type' => 1,
                'order_by' => 1,
                'create_by' => 3,
                'deleted_at' => NULL,
                'created_at' => '2024-12-21 14:57:02',
                'updated_at' => '2024-12-21 14:57:02',
            ),
            24 => 
            array (
                'id' => 44,
                'position' => 'cms',
                'label_id' => 12,
                'parent_id' => 43,
                'name' => 'Supplier Info',
                'name_bn' => 'সাপ্লাইয়ার তথ্য',
                'system_name' => 'Supplier Info',
                'route' => 'supplier_info',
                'slug' => 'index',
                'icon' => NULL,
                'status' => 1,
                'type' => 2,
                'order_by' => 1,
                'create_by' => 3,
                'deleted_at' => NULL,
                'created_at' => '2024-12-21 14:57:44',
                'updated_at' => '2024-12-21 14:57:44',
            ),
        ));
        
        
    }
}