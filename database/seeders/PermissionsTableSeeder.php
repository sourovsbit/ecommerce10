<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('permissions')->delete();
        
        \DB::table('permissions')->insert(array (
            0 => 
            array (
                'id' => 39,
                'name' => 'Create Store create',
                'guard_name' => 'web',
                'parent' => 'Create Store',
                'created_at' => '2024-06-10 00:16:48',
                'updated_at' => '2024-06-10 00:16:48',
            ),
            1 => 
            array (
                'id' => 48,
                'name' => 'Menu Label create',
                'guard_name' => 'web',
                'parent' => 'Menu Label',
                'created_at' => '2024-06-22 11:58:46',
                'updated_at' => '2024-06-22 11:58:46',
            ),
            2 => 
            array (
                'id' => 49,
                'name' => 'Menu Label view',
                'guard_name' => 'web',
                'parent' => 'Menu Label',
                'created_at' => '2024-06-22 11:58:46',
                'updated_at' => '2024-06-22 11:58:46',
            ),
            3 => 
            array (
                'id' => 50,
                'name' => 'Menu Label edit',
                'guard_name' => 'web',
                'parent' => 'Menu Label',
                'created_at' => '2024-06-22 11:58:46',
                'updated_at' => '2024-06-22 11:58:46',
            ),
            4 => 
            array (
                'id' => 51,
                'name' => 'Menu Label destroy',
                'guard_name' => 'web',
                'parent' => 'Menu Label',
                'created_at' => '2024-06-22 11:58:46',
                'updated_at' => '2024-06-22 11:58:46',
            ),
            5 => 
            array (
                'id' => 52,
                'name' => 'Menu Label status',
                'guard_name' => 'web',
                'parent' => 'Menu Label',
                'created_at' => '2024-06-22 11:58:46',
                'updated_at' => '2024-06-22 11:58:46',
            ),
            6 => 
            array (
                'id' => 53,
                'name' => 'Menu Label restore',
                'guard_name' => 'web',
                'parent' => 'Menu Label',
                'created_at' => '2024-06-22 11:58:46',
                'updated_at' => '2024-06-22 11:58:46',
            ),
            7 => 
            array (
                'id' => 54,
                'name' => 'Menu Label delete',
                'guard_name' => 'web',
                'parent' => 'Menu Label',
                'created_at' => '2024-06-22 11:58:46',
                'updated_at' => '2024-06-22 11:58:46',
            ),
            8 => 
            array (
                'id' => 55,
                'name' => 'Menu Label print',
                'guard_name' => 'web',
                'parent' => 'Menu Label',
                'created_at' => '2024-06-22 11:58:46',
                'updated_at' => '2024-06-22 11:58:46',
            ),
            9 => 
            array (
                'id' => 56,
                'name' => 'Menu Label trash',
                'guard_name' => 'web',
                'parent' => 'Menu Label',
                'created_at' => '2024-06-22 11:58:46',
                'updated_at' => '2024-06-22 11:58:46',
            ),
            10 => 
            array (
                'id' => 57,
                'name' => 'Menu Label show',
                'guard_name' => 'web',
                'parent' => 'Menu Label',
                'created_at' => '2024-06-22 11:58:46',
                'updated_at' => '2024-06-22 11:58:46',
            ),
            11 => 
            array (
                'id' => 58,
                'name' => 'Menu create',
                'guard_name' => 'web',
                'parent' => 'Menu',
                'created_at' => '2024-06-22 13:06:45',
                'updated_at' => '2024-06-22 13:06:45',
            ),
            12 => 
            array (
                'id' => 59,
                'name' => 'Menu view',
                'guard_name' => 'web',
                'parent' => 'Menu',
                'created_at' => '2024-06-22 13:06:45',
                'updated_at' => '2024-06-22 13:06:45',
            ),
            13 => 
            array (
                'id' => 60,
                'name' => 'Menu edit',
                'guard_name' => 'web',
                'parent' => 'Menu',
                'created_at' => '2024-06-22 13:06:45',
                'updated_at' => '2024-06-22 13:06:45',
            ),
            14 => 
            array (
                'id' => 61,
                'name' => 'Menu destroy',
                'guard_name' => 'web',
                'parent' => 'Menu',
                'created_at' => '2024-06-22 13:06:45',
                'updated_at' => '2024-06-22 13:06:45',
            ),
            15 => 
            array (
                'id' => 62,
                'name' => 'Menu status',
                'guard_name' => 'web',
                'parent' => 'Menu',
                'created_at' => '2024-06-22 13:06:45',
                'updated_at' => '2024-06-22 13:06:45',
            ),
            16 => 
            array (
                'id' => 63,
                'name' => 'Menu restore',
                'guard_name' => 'web',
                'parent' => 'Menu',
                'created_at' => '2024-06-22 13:06:45',
                'updated_at' => '2024-06-22 13:06:45',
            ),
            17 => 
            array (
                'id' => 64,
                'name' => 'Menu delete',
                'guard_name' => 'web',
                'parent' => 'Menu',
                'created_at' => '2024-06-22 13:06:45',
                'updated_at' => '2024-06-22 13:06:45',
            ),
            18 => 
            array (
                'id' => 65,
                'name' => 'Menu print',
                'guard_name' => 'web',
                'parent' => 'Menu',
                'created_at' => '2024-06-22 13:06:45',
                'updated_at' => '2024-06-22 13:06:45',
            ),
            19 => 
            array (
                'id' => 66,
                'name' => 'Menu trash',
                'guard_name' => 'web',
                'parent' => 'Menu',
                'created_at' => '2024-06-22 13:06:45',
                'updated_at' => '2024-06-22 13:06:45',
            ),
            20 => 
            array (
                'id' => 67,
                'name' => 'Menu show',
                'guard_name' => 'web',
                'parent' => 'Menu',
                'created_at' => '2024-06-22 13:06:45',
                'updated_at' => '2024-06-22 13:06:45',
            ),
            21 => 
            array (
                'id' => 68,
                'name' => 'Role create',
                'guard_name' => 'web',
                'parent' => 'Role',
                'created_at' => '2024-06-22 14:49:32',
                'updated_at' => '2024-06-22 14:49:32',
            ),
            22 => 
            array (
                'id' => 69,
                'name' => 'Role view',
                'guard_name' => 'web',
                'parent' => 'Role',
                'created_at' => '2024-06-22 14:49:32',
                'updated_at' => '2024-06-22 14:49:32',
            ),
            23 => 
            array (
                'id' => 70,
                'name' => 'Role edit',
                'guard_name' => 'web',
                'parent' => 'Role',
                'created_at' => '2024-06-22 14:49:32',
                'updated_at' => '2024-06-22 14:49:32',
            ),
            24 => 
            array (
                'id' => 71,
                'name' => 'Role destroy',
                'guard_name' => 'web',
                'parent' => 'Role',
                'created_at' => '2024-06-22 14:49:32',
                'updated_at' => '2024-06-22 14:49:32',
            ),
            25 => 
            array (
                'id' => 72,
                'name' => 'Role status',
                'guard_name' => 'web',
                'parent' => 'Role',
                'created_at' => '2024-06-22 14:49:32',
                'updated_at' => '2024-06-22 14:49:32',
            ),
            26 => 
            array (
                'id' => 73,
                'name' => 'Role restore',
                'guard_name' => 'web',
                'parent' => 'Role',
                'created_at' => '2024-06-22 14:49:32',
                'updated_at' => '2024-06-22 14:49:32',
            ),
            27 => 
            array (
                'id' => 74,
                'name' => 'Role delete',
                'guard_name' => 'web',
                'parent' => 'Role',
                'created_at' => '2024-06-22 14:49:32',
                'updated_at' => '2024-06-22 14:49:32',
            ),
            28 => 
            array (
                'id' => 75,
                'name' => 'Role print',
                'guard_name' => 'web',
                'parent' => 'Role',
                'created_at' => '2024-06-22 14:49:32',
                'updated_at' => '2024-06-22 14:49:32',
            ),
            29 => 
            array (
                'id' => 76,
                'name' => 'Role trash',
                'guard_name' => 'web',
                'parent' => 'Role',
                'created_at' => '2024-06-22 14:49:32',
                'updated_at' => '2024-06-22 14:49:32',
            ),
            30 => 
            array (
                'id' => 77,
                'name' => 'Role show',
                'guard_name' => 'web',
                'parent' => 'Role',
                'created_at' => '2024-06-22 14:49:32',
                'updated_at' => '2024-06-22 14:49:32',
            ),
            31 => 
            array (
                'id' => 78,
                'name' => 'Users create',
                'guard_name' => 'web',
                'parent' => 'Users',
                'created_at' => '2024-06-22 14:49:47',
                'updated_at' => '2024-06-22 14:49:47',
            ),
            32 => 
            array (
                'id' => 79,
                'name' => 'Users view',
                'guard_name' => 'web',
                'parent' => 'Users',
                'created_at' => '2024-06-22 14:49:47',
                'updated_at' => '2024-06-22 14:49:47',
            ),
            33 => 
            array (
                'id' => 80,
                'name' => 'Users edit',
                'guard_name' => 'web',
                'parent' => 'Users',
                'created_at' => '2024-06-22 14:49:47',
                'updated_at' => '2024-06-22 14:49:47',
            ),
            34 => 
            array (
                'id' => 81,
                'name' => 'Users destroy',
                'guard_name' => 'web',
                'parent' => 'Users',
                'created_at' => '2024-06-22 14:49:47',
                'updated_at' => '2024-06-22 14:49:47',
            ),
            35 => 
            array (
                'id' => 82,
                'name' => 'Users status',
                'guard_name' => 'web',
                'parent' => 'Users',
                'created_at' => '2024-06-22 14:49:47',
                'updated_at' => '2024-06-22 14:49:47',
            ),
            36 => 
            array (
                'id' => 83,
                'name' => 'Users restore',
                'guard_name' => 'web',
                'parent' => 'Users',
                'created_at' => '2024-06-22 14:49:47',
                'updated_at' => '2024-06-22 14:49:47',
            ),
            37 => 
            array (
                'id' => 84,
                'name' => 'Users delete',
                'guard_name' => 'web',
                'parent' => 'Users',
                'created_at' => '2024-06-22 14:49:47',
                'updated_at' => '2024-06-22 14:49:47',
            ),
            38 => 
            array (
                'id' => 85,
                'name' => 'Users print',
                'guard_name' => 'web',
                'parent' => 'Users',
                'created_at' => '2024-06-22 14:49:47',
                'updated_at' => '2024-06-22 14:49:47',
            ),
            39 => 
            array (
                'id' => 86,
                'name' => 'Users trash',
                'guard_name' => 'web',
                'parent' => 'Users',
                'created_at' => '2024-06-22 14:49:47',
                'updated_at' => '2024-06-22 14:49:47',
            ),
            40 => 
            array (
                'id' => 87,
                'name' => 'Users show',
                'guard_name' => 'web',
                'parent' => 'Users',
                'created_at' => '2024-06-22 14:49:47',
                'updated_at' => '2024-06-22 14:49:47',
            ),
            41 => 
            array (
                'id' => 88,
                'name' => 'Manage Store view',
                'guard_name' => 'web',
                'parent' => 'Manage Store',
                'created_at' => '2024-06-24 16:49:21',
                'updated_at' => '2024-06-24 16:49:21',
            ),
            42 => 
            array (
                'id' => 89,
                'name' => 'Manage Store edit',
                'guard_name' => 'web',
                'parent' => 'Manage Store',
                'created_at' => '2024-06-24 16:49:22',
                'updated_at' => '2024-06-24 16:49:22',
            ),
            43 => 
            array (
                'id' => 90,
                'name' => 'Manage Store destroy',
                'guard_name' => 'web',
                'parent' => 'Manage Store',
                'created_at' => '2024-06-24 16:49:22',
                'updated_at' => '2024-06-24 16:49:22',
            ),
            44 => 
            array (
                'id' => 91,
                'name' => 'Manage Store status',
                'guard_name' => 'web',
                'parent' => 'Manage Store',
                'created_at' => '2024-06-24 16:49:22',
                'updated_at' => '2024-06-24 16:49:22',
            ),
            45 => 
            array (
                'id' => 92,
                'name' => 'Manage Store restore',
                'guard_name' => 'web',
                'parent' => 'Manage Store',
                'created_at' => '2024-06-24 16:49:22',
                'updated_at' => '2024-06-24 16:49:22',
            ),
            46 => 
            array (
                'id' => 93,
                'name' => 'Manage Store delete',
                'guard_name' => 'web',
                'parent' => 'Manage Store',
                'created_at' => '2024-06-24 16:49:22',
                'updated_at' => '2024-06-24 16:49:22',
            ),
            47 => 
            array (
                'id' => 94,
                'name' => 'Manage Store print',
                'guard_name' => 'web',
                'parent' => 'Manage Store',
                'created_at' => '2024-06-24 16:49:22',
                'updated_at' => '2024-06-24 16:49:22',
            ),
            48 => 
            array (
                'id' => 95,
                'name' => 'Manage Store trash',
                'guard_name' => 'web',
                'parent' => 'Manage Store',
                'created_at' => '2024-06-24 16:49:22',
                'updated_at' => '2024-06-24 16:49:22',
            ),
            49 => 
            array (
                'id' => 96,
                'name' => 'Manage Store show',
                'guard_name' => 'web',
                'parent' => 'Manage Store',
                'created_at' => '2024-06-24 16:49:22',
                'updated_at' => '2024-06-24 16:49:22',
            ),
            50 => 
            array (
                'id' => 97,
                'name' => 'Store Dashboard view',
                'guard_name' => 'web',
                'parent' => 'Store Dashboard',
                'created_at' => '2024-07-03 17:46:45',
                'updated_at' => '2024-07-03 17:46:45',
            ),
            51 => 
            array (
                'id' => 98,
                'name' => 'Dashboard view',
                'guard_name' => 'web',
                'parent' => 'Dashboard',
                'created_at' => '2024-07-03 17:52:16',
                'updated_at' => '2024-07-03 17:52:16',
            ),
            52 => 
            array (
                'id' => 109,
                'name' => 'Item Information create',
                'guard_name' => 'web',
                'parent' => 'Item Information',
                'created_at' => '2024-07-05 19:37:04',
                'updated_at' => '2024-07-05 19:37:04',
            ),
            53 => 
            array (
                'id' => 110,
                'name' => 'Item Information view',
                'guard_name' => 'web',
                'parent' => 'Item Information',
                'created_at' => '2024-07-05 19:37:04',
                'updated_at' => '2024-07-05 19:37:04',
            ),
            54 => 
            array (
                'id' => 111,
                'name' => 'Item Information edit',
                'guard_name' => 'web',
                'parent' => 'Item Information',
                'created_at' => '2024-07-05 19:37:04',
                'updated_at' => '2024-07-05 19:37:04',
            ),
            55 => 
            array (
                'id' => 112,
                'name' => 'Item Information destroy',
                'guard_name' => 'web',
                'parent' => 'Item Information',
                'created_at' => '2024-07-05 19:37:04',
                'updated_at' => '2024-07-05 19:37:04',
            ),
            56 => 
            array (
                'id' => 113,
                'name' => 'Item Information status',
                'guard_name' => 'web',
                'parent' => 'Item Information',
                'created_at' => '2024-07-05 19:37:04',
                'updated_at' => '2024-07-05 19:37:04',
            ),
            57 => 
            array (
                'id' => 114,
                'name' => 'Item Information restore',
                'guard_name' => 'web',
                'parent' => 'Item Information',
                'created_at' => '2024-07-05 19:37:04',
                'updated_at' => '2024-07-05 19:37:04',
            ),
            58 => 
            array (
                'id' => 115,
                'name' => 'Item Information delete',
                'guard_name' => 'web',
                'parent' => 'Item Information',
                'created_at' => '2024-07-05 19:37:04',
                'updated_at' => '2024-07-05 19:37:04',
            ),
            59 => 
            array (
                'id' => 116,
                'name' => 'Item Information print',
                'guard_name' => 'web',
                'parent' => 'Item Information',
                'created_at' => '2024-07-05 19:37:05',
                'updated_at' => '2024-07-05 19:37:05',
            ),
            60 => 
            array (
                'id' => 117,
                'name' => 'Item Information trash',
                'guard_name' => 'web',
                'parent' => 'Item Information',
                'created_at' => '2024-07-05 19:37:05',
                'updated_at' => '2024-07-05 19:37:05',
            ),
            61 => 
            array (
                'id' => 118,
                'name' => 'Item Information show',
                'guard_name' => 'web',
                'parent' => 'Item Information',
                'created_at' => '2024-07-05 19:37:05',
                'updated_at' => '2024-07-05 19:37:05',
            ),
            62 => 
            array (
                'id' => 119,
                'name' => 'Category create',
                'guard_name' => 'web',
                'parent' => 'Category',
                'created_at' => '2024-10-09 22:59:24',
                'updated_at' => '2024-10-09 22:59:24',
            ),
            63 => 
            array (
                'id' => 120,
                'name' => 'Category view',
                'guard_name' => 'web',
                'parent' => 'Category',
                'created_at' => '2024-10-09 22:59:24',
                'updated_at' => '2024-10-09 22:59:24',
            ),
            64 => 
            array (
                'id' => 121,
                'name' => 'Category edit',
                'guard_name' => 'web',
                'parent' => 'Category',
                'created_at' => '2024-10-09 22:59:24',
                'updated_at' => '2024-10-09 22:59:24',
            ),
            65 => 
            array (
                'id' => 122,
                'name' => 'Category destroy',
                'guard_name' => 'web',
                'parent' => 'Category',
                'created_at' => '2024-10-09 22:59:24',
                'updated_at' => '2024-10-09 22:59:24',
            ),
            66 => 
            array (
                'id' => 123,
                'name' => 'Category status',
                'guard_name' => 'web',
                'parent' => 'Category',
                'created_at' => '2024-10-09 22:59:24',
                'updated_at' => '2024-10-09 22:59:24',
            ),
            67 => 
            array (
                'id' => 124,
                'name' => 'Category restore',
                'guard_name' => 'web',
                'parent' => 'Category',
                'created_at' => '2024-10-09 22:59:24',
                'updated_at' => '2024-10-09 22:59:24',
            ),
            68 => 
            array (
                'id' => 125,
                'name' => 'Category delete',
                'guard_name' => 'web',
                'parent' => 'Category',
                'created_at' => '2024-10-09 22:59:24',
                'updated_at' => '2024-10-09 22:59:24',
            ),
            69 => 
            array (
                'id' => 126,
                'name' => 'Category print',
                'guard_name' => 'web',
                'parent' => 'Category',
                'created_at' => '2024-10-09 22:59:24',
                'updated_at' => '2024-10-09 22:59:24',
            ),
            70 => 
            array (
                'id' => 127,
                'name' => 'Category trash',
                'guard_name' => 'web',
                'parent' => 'Category',
                'created_at' => '2024-10-09 22:59:24',
                'updated_at' => '2024-10-09 22:59:24',
            ),
            71 => 
            array (
                'id' => 128,
                'name' => 'Category show',
                'guard_name' => 'web',
                'parent' => 'Category',
                'created_at' => '2024-10-09 22:59:24',
                'updated_at' => '2024-10-09 22:59:24',
            ),
            72 => 
            array (
                'id' => 129,
                'name' => 'Brand create',
                'guard_name' => 'web',
                'parent' => 'Brand',
                'created_at' => '2024-10-21 15:47:24',
                'updated_at' => '2024-10-21 15:47:24',
            ),
            73 => 
            array (
                'id' => 130,
                'name' => 'Brand view',
                'guard_name' => 'web',
                'parent' => 'Brand',
                'created_at' => '2024-10-21 15:47:24',
                'updated_at' => '2024-10-21 15:47:24',
            ),
            74 => 
            array (
                'id' => 131,
                'name' => 'Brand edit',
                'guard_name' => 'web',
                'parent' => 'Brand',
                'created_at' => '2024-10-21 15:47:24',
                'updated_at' => '2024-10-21 15:47:24',
            ),
            75 => 
            array (
                'id' => 132,
                'name' => 'Brand destroy',
                'guard_name' => 'web',
                'parent' => 'Brand',
                'created_at' => '2024-10-21 15:47:24',
                'updated_at' => '2024-10-21 15:47:24',
            ),
            76 => 
            array (
                'id' => 133,
                'name' => 'Brand status',
                'guard_name' => 'web',
                'parent' => 'Brand',
                'created_at' => '2024-10-21 15:47:24',
                'updated_at' => '2024-10-21 15:47:24',
            ),
            77 => 
            array (
                'id' => 134,
                'name' => 'Brand restore',
                'guard_name' => 'web',
                'parent' => 'Brand',
                'created_at' => '2024-10-21 15:47:24',
                'updated_at' => '2024-10-21 15:47:24',
            ),
            78 => 
            array (
                'id' => 135,
                'name' => 'Brand delete',
                'guard_name' => 'web',
                'parent' => 'Brand',
                'created_at' => '2024-10-21 15:47:24',
                'updated_at' => '2024-10-21 15:47:24',
            ),
            79 => 
            array (
                'id' => 136,
                'name' => 'Brand print',
                'guard_name' => 'web',
                'parent' => 'Brand',
                'created_at' => '2024-10-21 15:47:24',
                'updated_at' => '2024-10-21 15:47:24',
            ),
            80 => 
            array (
                'id' => 137,
                'name' => 'Brand trash',
                'guard_name' => 'web',
                'parent' => 'Brand',
                'created_at' => '2024-10-21 15:47:24',
                'updated_at' => '2024-10-21 15:47:24',
            ),
            81 => 
            array (
                'id' => 138,
                'name' => 'Brand show',
                'guard_name' => 'web',
                'parent' => 'Brand',
                'created_at' => '2024-10-21 15:47:24',
                'updated_at' => '2024-10-21 15:47:24',
            ),
            82 => 
            array (
                'id' => 139,
                'name' => 'Color create',
                'guard_name' => 'web',
                'parent' => 'Color',
                'created_at' => '2024-10-22 12:44:56',
                'updated_at' => '2024-10-22 12:44:56',
            ),
            83 => 
            array (
                'id' => 140,
                'name' => 'Color view',
                'guard_name' => 'web',
                'parent' => 'Color',
                'created_at' => '2024-10-22 12:44:56',
                'updated_at' => '2024-10-22 12:44:56',
            ),
            84 => 
            array (
                'id' => 141,
                'name' => 'Color edit',
                'guard_name' => 'web',
                'parent' => 'Color',
                'created_at' => '2024-10-22 12:44:56',
                'updated_at' => '2024-10-22 12:44:56',
            ),
            85 => 
            array (
                'id' => 142,
                'name' => 'Color destroy',
                'guard_name' => 'web',
                'parent' => 'Color',
                'created_at' => '2024-10-22 12:44:56',
                'updated_at' => '2024-10-22 12:44:56',
            ),
            86 => 
            array (
                'id' => 143,
                'name' => 'Color status',
                'guard_name' => 'web',
                'parent' => 'Color',
                'created_at' => '2024-10-22 12:44:56',
                'updated_at' => '2024-10-22 12:44:56',
            ),
            87 => 
            array (
                'id' => 144,
                'name' => 'Color restore',
                'guard_name' => 'web',
                'parent' => 'Color',
                'created_at' => '2024-10-22 12:44:56',
                'updated_at' => '2024-10-22 12:44:56',
            ),
            88 => 
            array (
                'id' => 145,
                'name' => 'Color delete',
                'guard_name' => 'web',
                'parent' => 'Color',
                'created_at' => '2024-10-22 12:44:56',
                'updated_at' => '2024-10-22 12:44:56',
            ),
            89 => 
            array (
                'id' => 146,
                'name' => 'Color print',
                'guard_name' => 'web',
                'parent' => 'Color',
                'created_at' => '2024-10-22 12:44:56',
                'updated_at' => '2024-10-22 12:44:56',
            ),
            90 => 
            array (
                'id' => 147,
                'name' => 'Color trash',
                'guard_name' => 'web',
                'parent' => 'Color',
                'created_at' => '2024-10-22 12:44:56',
                'updated_at' => '2024-10-22 12:44:56',
            ),
            91 => 
            array (
                'id' => 148,
                'name' => 'Color show',
                'guard_name' => 'web',
                'parent' => 'Color',
                'created_at' => '2024-10-22 12:44:56',
                'updated_at' => '2024-10-22 12:44:56',
            ),
            92 => 
            array (
                'id' => 149,
                'name' => 'Size create',
                'guard_name' => 'web',
                'parent' => 'Size',
                'created_at' => '2024-10-26 22:57:56',
                'updated_at' => '2024-10-26 22:57:56',
            ),
            93 => 
            array (
                'id' => 150,
                'name' => 'Size view',
                'guard_name' => 'web',
                'parent' => 'Size',
                'created_at' => '2024-10-26 22:57:57',
                'updated_at' => '2024-10-26 22:57:57',
            ),
            94 => 
            array (
                'id' => 151,
                'name' => 'Size edit',
                'guard_name' => 'web',
                'parent' => 'Size',
                'created_at' => '2024-10-26 22:57:57',
                'updated_at' => '2024-10-26 22:57:57',
            ),
            95 => 
            array (
                'id' => 152,
                'name' => 'Size destroy',
                'guard_name' => 'web',
                'parent' => 'Size',
                'created_at' => '2024-10-26 22:57:57',
                'updated_at' => '2024-10-26 22:57:57',
            ),
            96 => 
            array (
                'id' => 153,
                'name' => 'Size status',
                'guard_name' => 'web',
                'parent' => 'Size',
                'created_at' => '2024-10-26 22:57:57',
                'updated_at' => '2024-10-26 22:57:57',
            ),
            97 => 
            array (
                'id' => 154,
                'name' => 'Size restore',
                'guard_name' => 'web',
                'parent' => 'Size',
                'created_at' => '2024-10-26 22:57:57',
                'updated_at' => '2024-10-26 22:57:57',
            ),
            98 => 
            array (
                'id' => 155,
                'name' => 'Size delete',
                'guard_name' => 'web',
                'parent' => 'Size',
                'created_at' => '2024-10-26 22:57:57',
                'updated_at' => '2024-10-26 22:57:57',
            ),
            99 => 
            array (
                'id' => 156,
                'name' => 'Size print',
                'guard_name' => 'web',
                'parent' => 'Size',
                'created_at' => '2024-10-26 22:57:57',
                'updated_at' => '2024-10-26 22:57:57',
            ),
            100 => 
            array (
                'id' => 157,
                'name' => 'Size trash',
                'guard_name' => 'web',
                'parent' => 'Size',
                'created_at' => '2024-10-26 22:57:57',
                'updated_at' => '2024-10-26 22:57:57',
            ),
            101 => 
            array (
                'id' => 158,
                'name' => 'Size show',
                'guard_name' => 'web',
                'parent' => 'Size',
                'created_at' => '2024-10-26 22:57:57',
                'updated_at' => '2024-10-26 22:57:57',
            ),
            102 => 
            array (
                'id' => 159,
                'name' => 'Unit create',
                'guard_name' => 'web',
                'parent' => 'Unit',
                'created_at' => '2024-10-29 00:16:28',
                'updated_at' => '2024-10-29 00:16:28',
            ),
            103 => 
            array (
                'id' => 160,
                'name' => 'Unit view',
                'guard_name' => 'web',
                'parent' => 'Unit',
                'created_at' => '2024-10-29 00:16:28',
                'updated_at' => '2024-10-29 00:16:28',
            ),
            104 => 
            array (
                'id' => 161,
                'name' => 'Unit edit',
                'guard_name' => 'web',
                'parent' => 'Unit',
                'created_at' => '2024-10-29 00:16:28',
                'updated_at' => '2024-10-29 00:16:28',
            ),
            105 => 
            array (
                'id' => 162,
                'name' => 'Unit destroy',
                'guard_name' => 'web',
                'parent' => 'Unit',
                'created_at' => '2024-10-29 00:16:29',
                'updated_at' => '2024-10-29 00:16:29',
            ),
            106 => 
            array (
                'id' => 163,
                'name' => 'Unit status',
                'guard_name' => 'web',
                'parent' => 'Unit',
                'created_at' => '2024-10-29 00:16:29',
                'updated_at' => '2024-10-29 00:16:29',
            ),
            107 => 
            array (
                'id' => 164,
                'name' => 'Unit restore',
                'guard_name' => 'web',
                'parent' => 'Unit',
                'created_at' => '2024-10-29 00:16:29',
                'updated_at' => '2024-10-29 00:16:29',
            ),
            108 => 
            array (
                'id' => 165,
                'name' => 'Unit delete',
                'guard_name' => 'web',
                'parent' => 'Unit',
                'created_at' => '2024-10-29 00:16:29',
                'updated_at' => '2024-10-29 00:16:29',
            ),
            109 => 
            array (
                'id' => 166,
                'name' => 'Unit print',
                'guard_name' => 'web',
                'parent' => 'Unit',
                'created_at' => '2024-10-29 00:16:29',
                'updated_at' => '2024-10-29 00:16:29',
            ),
            110 => 
            array (
                'id' => 167,
                'name' => 'Unit trash',
                'guard_name' => 'web',
                'parent' => 'Unit',
                'created_at' => '2024-10-29 00:16:29',
                'updated_at' => '2024-10-29 00:16:29',
            ),
            111 => 
            array (
                'id' => 168,
                'name' => 'Unit show',
                'guard_name' => 'web',
                'parent' => 'Unit',
                'created_at' => '2024-10-29 00:16:29',
                'updated_at' => '2024-10-29 00:16:29',
            ),
            112 => 
            array (
                'id' => 169,
                'name' => 'Sub Unit create',
                'guard_name' => 'web',
                'parent' => 'Sub Unit',
                'created_at' => '2024-11-06 00:42:00',
                'updated_at' => '2024-11-06 00:42:00',
            ),
            113 => 
            array (
                'id' => 170,
                'name' => 'Sub Unit view',
                'guard_name' => 'web',
                'parent' => 'Sub Unit',
                'created_at' => '2024-11-06 00:42:00',
                'updated_at' => '2024-11-06 00:42:00',
            ),
            114 => 
            array (
                'id' => 171,
                'name' => 'Sub Unit edit',
                'guard_name' => 'web',
                'parent' => 'Sub Unit',
                'created_at' => '2024-11-06 00:42:00',
                'updated_at' => '2024-11-06 00:42:00',
            ),
            115 => 
            array (
                'id' => 172,
                'name' => 'Sub Unit destroy',
                'guard_name' => 'web',
                'parent' => 'Sub Unit',
                'created_at' => '2024-11-06 00:42:00',
                'updated_at' => '2024-11-06 00:42:00',
            ),
            116 => 
            array (
                'id' => 173,
                'name' => 'Sub Unit status',
                'guard_name' => 'web',
                'parent' => 'Sub Unit',
                'created_at' => '2024-11-06 00:42:00',
                'updated_at' => '2024-11-06 00:42:00',
            ),
            117 => 
            array (
                'id' => 174,
                'name' => 'Sub Unit restore',
                'guard_name' => 'web',
                'parent' => 'Sub Unit',
                'created_at' => '2024-11-06 00:42:01',
                'updated_at' => '2024-11-06 00:42:01',
            ),
            118 => 
            array (
                'id' => 175,
                'name' => 'Sub Unit delete',
                'guard_name' => 'web',
                'parent' => 'Sub Unit',
                'created_at' => '2024-11-06 00:42:01',
                'updated_at' => '2024-11-06 00:42:01',
            ),
            119 => 
            array (
                'id' => 176,
                'name' => 'Sub Unit print',
                'guard_name' => 'web',
                'parent' => 'Sub Unit',
                'created_at' => '2024-11-06 00:42:01',
                'updated_at' => '2024-11-06 00:42:01',
            ),
            120 => 
            array (
                'id' => 177,
                'name' => 'Sub Unit trash',
                'guard_name' => 'web',
                'parent' => 'Sub Unit',
                'created_at' => '2024-11-06 00:42:01',
                'updated_at' => '2024-11-06 00:42:01',
            ),
            121 => 
            array (
                'id' => 178,
                'name' => 'Sub Unit show',
                'guard_name' => 'web',
                'parent' => 'Sub Unit',
                'created_at' => '2024-11-06 00:42:01',
                'updated_at' => '2024-11-06 00:42:01',
            ),
            122 => 
            array (
                'id' => 179,
                'name' => 'Product Add create',
                'guard_name' => 'web',
                'parent' => 'Product Add',
                'created_at' => '2024-11-06 16:11:59',
                'updated_at' => '2024-11-06 16:11:59',
            ),
            123 => 
            array (
                'id' => 180,
                'name' => 'Product Add view',
                'guard_name' => 'web',
                'parent' => 'Product Add',
                'created_at' => '2024-11-06 16:11:59',
                'updated_at' => '2024-11-06 16:11:59',
            ),
            124 => 
            array (
                'id' => 181,
                'name' => 'Product Add edit',
                'guard_name' => 'web',
                'parent' => 'Product Add',
                'created_at' => '2024-11-06 16:11:59',
                'updated_at' => '2024-11-06 16:11:59',
            ),
            125 => 
            array (
                'id' => 182,
                'name' => 'Product Add destroy',
                'guard_name' => 'web',
                'parent' => 'Product Add',
                'created_at' => '2024-11-06 16:11:59',
                'updated_at' => '2024-11-06 16:11:59',
            ),
            126 => 
            array (
                'id' => 183,
                'name' => 'Product Add status',
                'guard_name' => 'web',
                'parent' => 'Product Add',
                'created_at' => '2024-11-06 16:11:59',
                'updated_at' => '2024-11-06 16:11:59',
            ),
            127 => 
            array (
                'id' => 184,
                'name' => 'Product Add restore',
                'guard_name' => 'web',
                'parent' => 'Product Add',
                'created_at' => '2024-11-06 16:11:59',
                'updated_at' => '2024-11-06 16:11:59',
            ),
            128 => 
            array (
                'id' => 185,
                'name' => 'Product Add delete',
                'guard_name' => 'web',
                'parent' => 'Product Add',
                'created_at' => '2024-11-06 16:11:59',
                'updated_at' => '2024-11-06 16:11:59',
            ),
            129 => 
            array (
                'id' => 186,
                'name' => 'Product Add print',
                'guard_name' => 'web',
                'parent' => 'Product Add',
                'created_at' => '2024-11-06 16:11:59',
                'updated_at' => '2024-11-06 16:11:59',
            ),
            130 => 
            array (
                'id' => 187,
                'name' => 'Product Add trash',
                'guard_name' => 'web',
                'parent' => 'Product Add',
                'created_at' => '2024-11-06 16:12:00',
                'updated_at' => '2024-11-06 16:12:00',
            ),
            131 => 
            array (
                'id' => 188,
                'name' => 'Product Add show',
                'guard_name' => 'web',
                'parent' => 'Product Add',
                'created_at' => '2024-11-06 16:12:00',
                'updated_at' => '2024-11-06 16:12:00',
            ),
            132 => 
            array (
                'id' => 189,
                'name' => 'Supplier Area create',
                'guard_name' => 'web',
                'parent' => 'Supplier Area',
                'created_at' => '2024-11-21 23:59:29',
                'updated_at' => '2024-11-21 23:59:29',
            ),
            133 => 
            array (
                'id' => 190,
                'name' => 'Supplier Area view',
                'guard_name' => 'web',
                'parent' => 'Supplier Area',
                'created_at' => '2024-11-21 23:59:29',
                'updated_at' => '2024-11-21 23:59:29',
            ),
            134 => 
            array (
                'id' => 191,
                'name' => 'Supplier Area edit',
                'guard_name' => 'web',
                'parent' => 'Supplier Area',
                'created_at' => '2024-11-21 23:59:29',
                'updated_at' => '2024-11-21 23:59:29',
            ),
            135 => 
            array (
                'id' => 192,
                'name' => 'Supplier Area destroy',
                'guard_name' => 'web',
                'parent' => 'Supplier Area',
                'created_at' => '2024-11-21 23:59:29',
                'updated_at' => '2024-11-21 23:59:29',
            ),
            136 => 
            array (
                'id' => 193,
                'name' => 'Supplier Area status',
                'guard_name' => 'web',
                'parent' => 'Supplier Area',
                'created_at' => '2024-11-21 23:59:30',
                'updated_at' => '2024-11-21 23:59:30',
            ),
            137 => 
            array (
                'id' => 194,
                'name' => 'Supplier Area restore',
                'guard_name' => 'web',
                'parent' => 'Supplier Area',
                'created_at' => '2024-11-21 23:59:30',
                'updated_at' => '2024-11-21 23:59:30',
            ),
            138 => 
            array (
                'id' => 195,
                'name' => 'Supplier Area delete',
                'guard_name' => 'web',
                'parent' => 'Supplier Area',
                'created_at' => '2024-11-21 23:59:30',
                'updated_at' => '2024-11-21 23:59:30',
            ),
            139 => 
            array (
                'id' => 196,
                'name' => 'Supplier Area print',
                'guard_name' => 'web',
                'parent' => 'Supplier Area',
                'created_at' => '2024-11-21 23:59:30',
                'updated_at' => '2024-11-21 23:59:30',
            ),
            140 => 
            array (
                'id' => 197,
                'name' => 'Supplier Area trash',
                'guard_name' => 'web',
                'parent' => 'Supplier Area',
                'created_at' => '2024-11-21 23:59:30',
                'updated_at' => '2024-11-21 23:59:30',
            ),
            141 => 
            array (
                'id' => 198,
                'name' => 'Supplier Area show',
                'guard_name' => 'web',
                'parent' => 'Supplier Area',
                'created_at' => '2024-11-21 23:59:30',
                'updated_at' => '2024-11-21 23:59:30',
            ),
            142 => 
            array (
                'id' => 199,
                'name' => 'Supplier Info create',
                'guard_name' => 'web',
                'parent' => 'Supplier Info',
                'created_at' => '2024-11-23 17:06:15',
                'updated_at' => '2024-11-23 17:06:15',
            ),
            143 => 
            array (
                'id' => 200,
                'name' => 'Supplier Info view',
                'guard_name' => 'web',
                'parent' => 'Supplier Info',
                'created_at' => '2024-11-23 17:06:16',
                'updated_at' => '2024-11-23 17:06:16',
            ),
            144 => 
            array (
                'id' => 201,
                'name' => 'Supplier Info edit',
                'guard_name' => 'web',
                'parent' => 'Supplier Info',
                'created_at' => '2024-11-23 17:06:16',
                'updated_at' => '2024-11-23 17:06:16',
            ),
            145 => 
            array (
                'id' => 202,
                'name' => 'Supplier Info destroy',
                'guard_name' => 'web',
                'parent' => 'Supplier Info',
                'created_at' => '2024-11-23 17:06:16',
                'updated_at' => '2024-11-23 17:06:16',
            ),
            146 => 
            array (
                'id' => 203,
                'name' => 'Supplier Info status',
                'guard_name' => 'web',
                'parent' => 'Supplier Info',
                'created_at' => '2024-11-23 17:06:16',
                'updated_at' => '2024-11-23 17:06:16',
            ),
            147 => 
            array (
                'id' => 204,
                'name' => 'Supplier Info restore',
                'guard_name' => 'web',
                'parent' => 'Supplier Info',
                'created_at' => '2024-11-23 17:06:16',
                'updated_at' => '2024-11-23 17:06:16',
            ),
            148 => 
            array (
                'id' => 205,
                'name' => 'Supplier Info delete',
                'guard_name' => 'web',
                'parent' => 'Supplier Info',
                'created_at' => '2024-11-23 17:06:16',
                'updated_at' => '2024-11-23 17:06:16',
            ),
            149 => 
            array (
                'id' => 206,
                'name' => 'Supplier Info print',
                'guard_name' => 'web',
                'parent' => 'Supplier Info',
                'created_at' => '2024-11-23 17:06:16',
                'updated_at' => '2024-11-23 17:06:16',
            ),
            150 => 
            array (
                'id' => 207,
                'name' => 'Supplier Info trash',
                'guard_name' => 'web',
                'parent' => 'Supplier Info',
                'created_at' => '2024-11-23 17:06:16',
                'updated_at' => '2024-11-23 17:06:16',
            ),
            151 => 
            array (
                'id' => 208,
                'name' => 'Supplier Info show',
                'guard_name' => 'web',
                'parent' => 'Supplier Info',
                'created_at' => '2024-11-23 17:06:16',
                'updated_at' => '2024-11-23 17:06:16',
            ),
        ));
        
        
    }
}