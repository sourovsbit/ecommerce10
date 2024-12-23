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
                'id' => 48,
                'name' => 'Menu Label create',
                'guard_name' => 'web',
                'parent' => 'Menu Label',
                'created_at' => '2024-06-22 11:58:46',
                'updated_at' => '2024-06-22 11:58:46',
            ),
            1 => 
            array (
                'id' => 49,
                'name' => 'Menu Label view',
                'guard_name' => 'web',
                'parent' => 'Menu Label',
                'created_at' => '2024-06-22 11:58:46',
                'updated_at' => '2024-06-22 11:58:46',
            ),
            2 => 
            array (
                'id' => 50,
                'name' => 'Menu Label edit',
                'guard_name' => 'web',
                'parent' => 'Menu Label',
                'created_at' => '2024-06-22 11:58:46',
                'updated_at' => '2024-06-22 11:58:46',
            ),
            3 => 
            array (
                'id' => 51,
                'name' => 'Menu Label destroy',
                'guard_name' => 'web',
                'parent' => 'Menu Label',
                'created_at' => '2024-06-22 11:58:46',
                'updated_at' => '2024-06-22 11:58:46',
            ),
            4 => 
            array (
                'id' => 52,
                'name' => 'Menu Label status',
                'guard_name' => 'web',
                'parent' => 'Menu Label',
                'created_at' => '2024-06-22 11:58:46',
                'updated_at' => '2024-06-22 11:58:46',
            ),
            5 => 
            array (
                'id' => 53,
                'name' => 'Menu Label restore',
                'guard_name' => 'web',
                'parent' => 'Menu Label',
                'created_at' => '2024-06-22 11:58:46',
                'updated_at' => '2024-06-22 11:58:46',
            ),
            6 => 
            array (
                'id' => 54,
                'name' => 'Menu Label delete',
                'guard_name' => 'web',
                'parent' => 'Menu Label',
                'created_at' => '2024-06-22 11:58:46',
                'updated_at' => '2024-06-22 11:58:46',
            ),
            7 => 
            array (
                'id' => 55,
                'name' => 'Menu Label print',
                'guard_name' => 'web',
                'parent' => 'Menu Label',
                'created_at' => '2024-06-22 11:58:46',
                'updated_at' => '2024-06-22 11:58:46',
            ),
            8 => 
            array (
                'id' => 56,
                'name' => 'Menu Label trash',
                'guard_name' => 'web',
                'parent' => 'Menu Label',
                'created_at' => '2024-06-22 11:58:46',
                'updated_at' => '2024-06-22 11:58:46',
            ),
            9 => 
            array (
                'id' => 57,
                'name' => 'Menu Label show',
                'guard_name' => 'web',
                'parent' => 'Menu Label',
                'created_at' => '2024-06-22 11:58:46',
                'updated_at' => '2024-06-22 11:58:46',
            ),
            10 => 
            array (
                'id' => 58,
                'name' => 'Menu create',
                'guard_name' => 'web',
                'parent' => 'Menu',
                'created_at' => '2024-06-22 13:06:45',
                'updated_at' => '2024-06-22 13:06:45',
            ),
            11 => 
            array (
                'id' => 59,
                'name' => 'Menu view',
                'guard_name' => 'web',
                'parent' => 'Menu',
                'created_at' => '2024-06-22 13:06:45',
                'updated_at' => '2024-06-22 13:06:45',
            ),
            12 => 
            array (
                'id' => 60,
                'name' => 'Menu edit',
                'guard_name' => 'web',
                'parent' => 'Menu',
                'created_at' => '2024-06-22 13:06:45',
                'updated_at' => '2024-06-22 13:06:45',
            ),
            13 => 
            array (
                'id' => 61,
                'name' => 'Menu destroy',
                'guard_name' => 'web',
                'parent' => 'Menu',
                'created_at' => '2024-06-22 13:06:45',
                'updated_at' => '2024-06-22 13:06:45',
            ),
            14 => 
            array (
                'id' => 62,
                'name' => 'Menu status',
                'guard_name' => 'web',
                'parent' => 'Menu',
                'created_at' => '2024-06-22 13:06:45',
                'updated_at' => '2024-06-22 13:06:45',
            ),
            15 => 
            array (
                'id' => 63,
                'name' => 'Menu restore',
                'guard_name' => 'web',
                'parent' => 'Menu',
                'created_at' => '2024-06-22 13:06:45',
                'updated_at' => '2024-06-22 13:06:45',
            ),
            16 => 
            array (
                'id' => 64,
                'name' => 'Menu delete',
                'guard_name' => 'web',
                'parent' => 'Menu',
                'created_at' => '2024-06-22 13:06:45',
                'updated_at' => '2024-06-22 13:06:45',
            ),
            17 => 
            array (
                'id' => 65,
                'name' => 'Menu print',
                'guard_name' => 'web',
                'parent' => 'Menu',
                'created_at' => '2024-06-22 13:06:45',
                'updated_at' => '2024-06-22 13:06:45',
            ),
            18 => 
            array (
                'id' => 66,
                'name' => 'Menu trash',
                'guard_name' => 'web',
                'parent' => 'Menu',
                'created_at' => '2024-06-22 13:06:45',
                'updated_at' => '2024-06-22 13:06:45',
            ),
            19 => 
            array (
                'id' => 67,
                'name' => 'Menu show',
                'guard_name' => 'web',
                'parent' => 'Menu',
                'created_at' => '2024-06-22 13:06:45',
                'updated_at' => '2024-06-22 13:06:45',
            ),
            20 => 
            array (
                'id' => 78,
                'name' => 'Users create',
                'guard_name' => 'web',
                'parent' => 'Users',
                'created_at' => '2024-06-22 14:49:47',
                'updated_at' => '2024-06-22 14:49:47',
            ),
            21 => 
            array (
                'id' => 79,
                'name' => 'Users view',
                'guard_name' => 'web',
                'parent' => 'Users',
                'created_at' => '2024-06-22 14:49:47',
                'updated_at' => '2024-06-22 14:49:47',
            ),
            22 => 
            array (
                'id' => 80,
                'name' => 'Users edit',
                'guard_name' => 'web',
                'parent' => 'Users',
                'created_at' => '2024-06-22 14:49:47',
                'updated_at' => '2024-06-22 14:49:47',
            ),
            23 => 
            array (
                'id' => 81,
                'name' => 'Users destroy',
                'guard_name' => 'web',
                'parent' => 'Users',
                'created_at' => '2024-06-22 14:49:47',
                'updated_at' => '2024-06-22 14:49:47',
            ),
            24 => 
            array (
                'id' => 82,
                'name' => 'Users status',
                'guard_name' => 'web',
                'parent' => 'Users',
                'created_at' => '2024-06-22 14:49:47',
                'updated_at' => '2024-06-22 14:49:47',
            ),
            25 => 
            array (
                'id' => 83,
                'name' => 'Users restore',
                'guard_name' => 'web',
                'parent' => 'Users',
                'created_at' => '2024-06-22 14:49:47',
                'updated_at' => '2024-06-22 14:49:47',
            ),
            26 => 
            array (
                'id' => 84,
                'name' => 'Users delete',
                'guard_name' => 'web',
                'parent' => 'Users',
                'created_at' => '2024-06-22 14:49:47',
                'updated_at' => '2024-06-22 14:49:47',
            ),
            27 => 
            array (
                'id' => 85,
                'name' => 'Users print',
                'guard_name' => 'web',
                'parent' => 'Users',
                'created_at' => '2024-06-22 14:49:47',
                'updated_at' => '2024-06-22 14:49:47',
            ),
            28 => 
            array (
                'id' => 86,
                'name' => 'Users trash',
                'guard_name' => 'web',
                'parent' => 'Users',
                'created_at' => '2024-06-22 14:49:47',
                'updated_at' => '2024-06-22 14:49:47',
            ),
            29 => 
            array (
                'id' => 87,
                'name' => 'Users show',
                'guard_name' => 'web',
                'parent' => 'Users',
                'created_at' => '2024-06-22 14:49:47',
                'updated_at' => '2024-06-22 14:49:47',
            ),
            30 => 
            array (
                'id' => 237,
                'name' => 'Dashboard view',
                'guard_name' => 'web',
                'parent' => 'Dashboard',
                'created_at' => '2024-12-05 15:40:34',
                'updated_at' => '2024-12-05 15:40:34',
            ),
            31 => 
            array (
                'id' => 256,
                'name' => 'Role create',
                'guard_name' => 'web',
                'parent' => 'Role',
                'created_at' => '2024-12-07 13:16:26',
                'updated_at' => '2024-12-07 13:16:26',
            ),
            32 => 
            array (
                'id' => 257,
                'name' => 'Role view',
                'guard_name' => 'web',
                'parent' => 'Role',
                'created_at' => '2024-12-07 13:16:26',
                'updated_at' => '2024-12-07 13:16:26',
            ),
            33 => 
            array (
                'id' => 258,
                'name' => 'Role edit',
                'guard_name' => 'web',
                'parent' => 'Role',
                'created_at' => '2024-12-07 13:16:26',
                'updated_at' => '2024-12-07 13:16:26',
            ),
            34 => 
            array (
                'id' => 259,
                'name' => 'Role destroy',
                'guard_name' => 'web',
                'parent' => 'Role',
                'created_at' => '2024-12-07 13:16:26',
                'updated_at' => '2024-12-07 13:16:26',
            ),
            35 => 
            array (
                'id' => 260,
                'name' => 'Role status',
                'guard_name' => 'web',
                'parent' => 'Role',
                'created_at' => '2024-12-07 13:16:26',
                'updated_at' => '2024-12-07 13:16:26',
            ),
            36 => 
            array (
                'id' => 261,
                'name' => 'Role restore',
                'guard_name' => 'web',
                'parent' => 'Role',
                'created_at' => '2024-12-07 13:16:26',
                'updated_at' => '2024-12-07 13:16:26',
            ),
            37 => 
            array (
                'id' => 262,
                'name' => 'Role delete',
                'guard_name' => 'web',
                'parent' => 'Role',
                'created_at' => '2024-12-07 13:16:26',
                'updated_at' => '2024-12-07 13:16:26',
            ),
            38 => 
            array (
                'id' => 263,
                'name' => 'Role print',
                'guard_name' => 'web',
                'parent' => 'Role',
                'created_at' => '2024-12-07 13:16:26',
                'updated_at' => '2024-12-07 13:16:26',
            ),
            39 => 
            array (
                'id' => 264,
                'name' => 'Role show',
                'guard_name' => 'web',
                'parent' => 'Role',
                'created_at' => '2024-12-07 13:16:26',
                'updated_at' => '2024-12-07 13:16:26',
            ),
            40 => 
            array (
                'id' => 265,
                'name' => 'Role trash',
                'guard_name' => 'web',
                'parent' => 'Role',
                'created_at' => '2024-12-07 13:16:27',
                'updated_at' => '2024-12-07 13:16:27',
            ),
            41 => 
            array (
                'id' => 266,
                'name' => 'Product Item create',
                'guard_name' => 'web',
                'parent' => 'Product Item',
                'created_at' => '2024-12-07 13:20:50',
                'updated_at' => '2024-12-07 13:20:50',
            ),
            42 => 
            array (
                'id' => 267,
                'name' => 'Product Item view',
                'guard_name' => 'web',
                'parent' => 'Product Item',
                'created_at' => '2024-12-07 13:20:50',
                'updated_at' => '2024-12-07 13:20:50',
            ),
            43 => 
            array (
                'id' => 268,
                'name' => 'Product Item edit',
                'guard_name' => 'web',
                'parent' => 'Product Item',
                'created_at' => '2024-12-07 13:20:51',
                'updated_at' => '2024-12-07 13:20:51',
            ),
            44 => 
            array (
                'id' => 269,
                'name' => 'Product Item destroy',
                'guard_name' => 'web',
                'parent' => 'Product Item',
                'created_at' => '2024-12-07 13:20:51',
                'updated_at' => '2024-12-07 13:20:51',
            ),
            45 => 
            array (
                'id' => 270,
                'name' => 'Product Item status',
                'guard_name' => 'web',
                'parent' => 'Product Item',
                'created_at' => '2024-12-07 13:20:51',
                'updated_at' => '2024-12-07 13:20:51',
            ),
            46 => 
            array (
                'id' => 271,
                'name' => 'Product Item restore',
                'guard_name' => 'web',
                'parent' => 'Product Item',
                'created_at' => '2024-12-07 13:20:51',
                'updated_at' => '2024-12-07 13:20:51',
            ),
            47 => 
            array (
                'id' => 272,
                'name' => 'Product Item delete',
                'guard_name' => 'web',
                'parent' => 'Product Item',
                'created_at' => '2024-12-07 13:20:51',
                'updated_at' => '2024-12-07 13:20:51',
            ),
            48 => 
            array (
                'id' => 273,
                'name' => 'Product Item print',
                'guard_name' => 'web',
                'parent' => 'Product Item',
                'created_at' => '2024-12-07 13:20:51',
                'updated_at' => '2024-12-07 13:20:51',
            ),
            49 => 
            array (
                'id' => 274,
                'name' => 'Product Item show',
                'guard_name' => 'web',
                'parent' => 'Product Item',
                'created_at' => '2024-12-07 13:20:51',
                'updated_at' => '2024-12-07 13:20:51',
            ),
            50 => 
            array (
                'id' => 275,
                'name' => 'Product Item trash',
                'guard_name' => 'web',
                'parent' => 'Product Item',
                'created_at' => '2024-12-07 13:20:51',
                'updated_at' => '2024-12-07 13:20:51',
            ),
            51 => 
            array (
                'id' => 276,
                'name' => 'Product Category create',
                'guard_name' => 'web',
                'parent' => 'Product Category',
                'created_at' => '2024-12-07 17:03:33',
                'updated_at' => '2024-12-07 17:03:33',
            ),
            52 => 
            array (
                'id' => 277,
                'name' => 'Product Category view',
                'guard_name' => 'web',
                'parent' => 'Product Category',
                'created_at' => '2024-12-07 17:03:33',
                'updated_at' => '2024-12-07 17:03:33',
            ),
            53 => 
            array (
                'id' => 278,
                'name' => 'Product Category edit',
                'guard_name' => 'web',
                'parent' => 'Product Category',
                'created_at' => '2024-12-07 17:03:33',
                'updated_at' => '2024-12-07 17:03:33',
            ),
            54 => 
            array (
                'id' => 279,
                'name' => 'Product Category destroy',
                'guard_name' => 'web',
                'parent' => 'Product Category',
                'created_at' => '2024-12-07 17:03:33',
                'updated_at' => '2024-12-07 17:03:33',
            ),
            55 => 
            array (
                'id' => 280,
                'name' => 'Product Category status',
                'guard_name' => 'web',
                'parent' => 'Product Category',
                'created_at' => '2024-12-07 17:03:33',
                'updated_at' => '2024-12-07 17:03:33',
            ),
            56 => 
            array (
                'id' => 281,
                'name' => 'Product Category restore',
                'guard_name' => 'web',
                'parent' => 'Product Category',
                'created_at' => '2024-12-07 17:03:33',
                'updated_at' => '2024-12-07 17:03:33',
            ),
            57 => 
            array (
                'id' => 282,
                'name' => 'Product Category delete',
                'guard_name' => 'web',
                'parent' => 'Product Category',
                'created_at' => '2024-12-07 17:03:34',
                'updated_at' => '2024-12-07 17:03:34',
            ),
            58 => 
            array (
                'id' => 283,
                'name' => 'Product Category print',
                'guard_name' => 'web',
                'parent' => 'Product Category',
                'created_at' => '2024-12-07 17:03:34',
                'updated_at' => '2024-12-07 17:03:34',
            ),
            59 => 
            array (
                'id' => 284,
                'name' => 'Product Category show',
                'guard_name' => 'web',
                'parent' => 'Product Category',
                'created_at' => '2024-12-07 17:03:34',
                'updated_at' => '2024-12-07 17:03:34',
            ),
            60 => 
            array (
                'id' => 285,
                'name' => 'Product Category trash',
                'guard_name' => 'web',
                'parent' => 'Product Category',
                'created_at' => '2024-12-07 17:03:34',
                'updated_at' => '2024-12-07 17:03:34',
            ),
            61 => 
            array (
                'id' => 295,
                'name' => 'Product Sub Category create',
                'guard_name' => 'web',
                'parent' => 'Product Sub Category',
                'created_at' => '2024-12-09 12:07:18',
                'updated_at' => '2024-12-09 12:07:18',
            ),
            62 => 
            array (
                'id' => 296,
                'name' => 'Product Sub Category view',
                'guard_name' => 'web',
                'parent' => 'Product Sub Category',
                'created_at' => '2024-12-09 12:07:18',
                'updated_at' => '2024-12-09 12:07:18',
            ),
            63 => 
            array (
                'id' => 297,
                'name' => 'Product Sub Category edit',
                'guard_name' => 'web',
                'parent' => 'Product Sub Category',
                'created_at' => '2024-12-09 12:07:18',
                'updated_at' => '2024-12-09 12:07:18',
            ),
            64 => 
            array (
                'id' => 298,
                'name' => 'Product Sub Category destroy',
                'guard_name' => 'web',
                'parent' => 'Product Sub Category',
                'created_at' => '2024-12-09 12:07:18',
                'updated_at' => '2024-12-09 12:07:18',
            ),
            65 => 
            array (
                'id' => 299,
                'name' => 'Product Sub Category status',
                'guard_name' => 'web',
                'parent' => 'Product Sub Category',
                'created_at' => '2024-12-09 12:07:18',
                'updated_at' => '2024-12-09 12:07:18',
            ),
            66 => 
            array (
                'id' => 300,
                'name' => 'Product Sub Category restore',
                'guard_name' => 'web',
                'parent' => 'Product Sub Category',
                'created_at' => '2024-12-09 12:07:18',
                'updated_at' => '2024-12-09 12:07:18',
            ),
            67 => 
            array (
                'id' => 301,
                'name' => 'Product Sub Category delete',
                'guard_name' => 'web',
                'parent' => 'Product Sub Category',
                'created_at' => '2024-12-09 12:07:18',
                'updated_at' => '2024-12-09 12:07:18',
            ),
            68 => 
            array (
                'id' => 302,
                'name' => 'Product Sub Category print',
                'guard_name' => 'web',
                'parent' => 'Product Sub Category',
                'created_at' => '2024-12-09 12:07:18',
                'updated_at' => '2024-12-09 12:07:18',
            ),
            69 => 
            array (
                'id' => 303,
                'name' => 'Product Sub Category show',
                'guard_name' => 'web',
                'parent' => 'Product Sub Category',
                'created_at' => '2024-12-09 12:07:18',
                'updated_at' => '2024-12-09 12:07:18',
            ),
            70 => 
            array (
                'id' => 304,
                'name' => 'Product Sub Category trash',
                'guard_name' => 'web',
                'parent' => 'Product Sub Category',
                'created_at' => '2024-12-09 12:07:18',
                'updated_at' => '2024-12-09 12:07:18',
            ),
            71 => 
            array (
                'id' => 305,
                'name' => 'Product Brand create',
                'guard_name' => 'web',
                'parent' => 'Product Brand',
                'created_at' => '2024-12-09 12:10:03',
                'updated_at' => '2024-12-09 12:10:03',
            ),
            72 => 
            array (
                'id' => 306,
                'name' => 'Product Brand view',
                'guard_name' => 'web',
                'parent' => 'Product Brand',
                'created_at' => '2024-12-09 12:10:03',
                'updated_at' => '2024-12-09 12:10:03',
            ),
            73 => 
            array (
                'id' => 307,
                'name' => 'Product Brand edit',
                'guard_name' => 'web',
                'parent' => 'Product Brand',
                'created_at' => '2024-12-09 12:10:03',
                'updated_at' => '2024-12-09 12:10:03',
            ),
            74 => 
            array (
                'id' => 308,
                'name' => 'Product Brand destroy',
                'guard_name' => 'web',
                'parent' => 'Product Brand',
                'created_at' => '2024-12-09 12:10:03',
                'updated_at' => '2024-12-09 12:10:03',
            ),
            75 => 
            array (
                'id' => 309,
                'name' => 'Product Brand status',
                'guard_name' => 'web',
                'parent' => 'Product Brand',
                'created_at' => '2024-12-09 12:10:03',
                'updated_at' => '2024-12-09 12:10:03',
            ),
            76 => 
            array (
                'id' => 310,
                'name' => 'Product Brand restore',
                'guard_name' => 'web',
                'parent' => 'Product Brand',
                'created_at' => '2024-12-09 12:10:03',
                'updated_at' => '2024-12-09 12:10:03',
            ),
            77 => 
            array (
                'id' => 311,
                'name' => 'Product Brand delete',
                'guard_name' => 'web',
                'parent' => 'Product Brand',
                'created_at' => '2024-12-09 12:10:03',
                'updated_at' => '2024-12-09 12:10:03',
            ),
            78 => 
            array (
                'id' => 312,
                'name' => 'Product Brand print',
                'guard_name' => 'web',
                'parent' => 'Product Brand',
                'created_at' => '2024-12-09 12:10:03',
                'updated_at' => '2024-12-09 12:10:03',
            ),
            79 => 
            array (
                'id' => 313,
                'name' => 'Product Brand show',
                'guard_name' => 'web',
                'parent' => 'Product Brand',
                'created_at' => '2024-12-09 12:10:03',
                'updated_at' => '2024-12-09 12:10:03',
            ),
            80 => 
            array (
                'id' => 314,
                'name' => 'Product Brand trash',
                'guard_name' => 'web',
                'parent' => 'Product Brand',
                'created_at' => '2024-12-09 12:10:03',
                'updated_at' => '2024-12-09 12:10:03',
            ),
            81 => 
            array (
                'id' => 315,
                'name' => 'Product Size create',
                'guard_name' => 'web',
                'parent' => 'Product Size',
                'created_at' => '2024-12-10 10:52:39',
                'updated_at' => '2024-12-10 10:52:39',
            ),
            82 => 
            array (
                'id' => 316,
                'name' => 'Product Size view',
                'guard_name' => 'web',
                'parent' => 'Product Size',
                'created_at' => '2024-12-10 10:52:39',
                'updated_at' => '2024-12-10 10:52:39',
            ),
            83 => 
            array (
                'id' => 317,
                'name' => 'Product Size edit',
                'guard_name' => 'web',
                'parent' => 'Product Size',
                'created_at' => '2024-12-10 10:52:39',
                'updated_at' => '2024-12-10 10:52:39',
            ),
            84 => 
            array (
                'id' => 318,
                'name' => 'Product Size destroy',
                'guard_name' => 'web',
                'parent' => 'Product Size',
                'created_at' => '2024-12-10 10:52:39',
                'updated_at' => '2024-12-10 10:52:39',
            ),
            85 => 
            array (
                'id' => 319,
                'name' => 'Product Size status',
                'guard_name' => 'web',
                'parent' => 'Product Size',
                'created_at' => '2024-12-10 10:52:39',
                'updated_at' => '2024-12-10 10:52:39',
            ),
            86 => 
            array (
                'id' => 320,
                'name' => 'Product Size restore',
                'guard_name' => 'web',
                'parent' => 'Product Size',
                'created_at' => '2024-12-10 10:52:39',
                'updated_at' => '2024-12-10 10:52:39',
            ),
            87 => 
            array (
                'id' => 321,
                'name' => 'Product Size delete',
                'guard_name' => 'web',
                'parent' => 'Product Size',
                'created_at' => '2024-12-10 10:52:39',
                'updated_at' => '2024-12-10 10:52:39',
            ),
            88 => 
            array (
                'id' => 322,
                'name' => 'Product Size print',
                'guard_name' => 'web',
                'parent' => 'Product Size',
                'created_at' => '2024-12-10 10:52:39',
                'updated_at' => '2024-12-10 10:52:39',
            ),
            89 => 
            array (
                'id' => 323,
                'name' => 'Product Size show',
                'guard_name' => 'web',
                'parent' => 'Product Size',
                'created_at' => '2024-12-10 10:52:39',
                'updated_at' => '2024-12-10 10:52:39',
            ),
            90 => 
            array (
                'id' => 324,
                'name' => 'Product Size trash',
                'guard_name' => 'web',
                'parent' => 'Product Size',
                'created_at' => '2024-12-10 10:52:39',
                'updated_at' => '2024-12-10 10:52:39',
            ),
            91 => 
            array (
                'id' => 325,
                'name' => 'Product Color create',
                'guard_name' => 'web',
                'parent' => 'Product Color',
                'created_at' => '2024-12-10 10:53:32',
                'updated_at' => '2024-12-10 10:53:32',
            ),
            92 => 
            array (
                'id' => 326,
                'name' => 'Product Color view',
                'guard_name' => 'web',
                'parent' => 'Product Color',
                'created_at' => '2024-12-10 10:53:32',
                'updated_at' => '2024-12-10 10:53:32',
            ),
            93 => 
            array (
                'id' => 327,
                'name' => 'Product Color edit',
                'guard_name' => 'web',
                'parent' => 'Product Color',
                'created_at' => '2024-12-10 10:53:32',
                'updated_at' => '2024-12-10 10:53:32',
            ),
            94 => 
            array (
                'id' => 328,
                'name' => 'Product Color destroy',
                'guard_name' => 'web',
                'parent' => 'Product Color',
                'created_at' => '2024-12-10 10:53:32',
                'updated_at' => '2024-12-10 10:53:32',
            ),
            95 => 
            array (
                'id' => 329,
                'name' => 'Product Color status',
                'guard_name' => 'web',
                'parent' => 'Product Color',
                'created_at' => '2024-12-10 10:53:32',
                'updated_at' => '2024-12-10 10:53:32',
            ),
            96 => 
            array (
                'id' => 330,
                'name' => 'Product Color restore',
                'guard_name' => 'web',
                'parent' => 'Product Color',
                'created_at' => '2024-12-10 10:53:32',
                'updated_at' => '2024-12-10 10:53:32',
            ),
            97 => 
            array (
                'id' => 331,
                'name' => 'Product Color delete',
                'guard_name' => 'web',
                'parent' => 'Product Color',
                'created_at' => '2024-12-10 10:53:32',
                'updated_at' => '2024-12-10 10:53:32',
            ),
            98 => 
            array (
                'id' => 332,
                'name' => 'Product Color print',
                'guard_name' => 'web',
                'parent' => 'Product Color',
                'created_at' => '2024-12-10 10:53:32',
                'updated_at' => '2024-12-10 10:53:32',
            ),
            99 => 
            array (
                'id' => 333,
                'name' => 'Product Color show',
                'guard_name' => 'web',
                'parent' => 'Product Color',
                'created_at' => '2024-12-10 10:53:32',
                'updated_at' => '2024-12-10 10:53:32',
            ),
            100 => 
            array (
                'id' => 334,
                'name' => 'Product Color trash',
                'guard_name' => 'web',
                'parent' => 'Product Color',
                'created_at' => '2024-12-10 10:53:32',
                'updated_at' => '2024-12-10 10:53:32',
            ),
            101 => 
            array (
                'id' => 335,
                'name' => 'Unit create',
                'guard_name' => 'web',
                'parent' => 'Unit',
                'created_at' => '2024-12-10 16:35:42',
                'updated_at' => '2024-12-10 16:35:42',
            ),
            102 => 
            array (
                'id' => 336,
                'name' => 'Unit view',
                'guard_name' => 'web',
                'parent' => 'Unit',
                'created_at' => '2024-12-10 16:35:42',
                'updated_at' => '2024-12-10 16:35:42',
            ),
            103 => 
            array (
                'id' => 337,
                'name' => 'Unit edit',
                'guard_name' => 'web',
                'parent' => 'Unit',
                'created_at' => '2024-12-10 16:35:42',
                'updated_at' => '2024-12-10 16:35:42',
            ),
            104 => 
            array (
                'id' => 338,
                'name' => 'Unit destroy',
                'guard_name' => 'web',
                'parent' => 'Unit',
                'created_at' => '2024-12-10 16:35:42',
                'updated_at' => '2024-12-10 16:35:42',
            ),
            105 => 
            array (
                'id' => 339,
                'name' => 'Unit status',
                'guard_name' => 'web',
                'parent' => 'Unit',
                'created_at' => '2024-12-10 16:35:42',
                'updated_at' => '2024-12-10 16:35:42',
            ),
            106 => 
            array (
                'id' => 340,
                'name' => 'Unit restore',
                'guard_name' => 'web',
                'parent' => 'Unit',
                'created_at' => '2024-12-10 16:35:43',
                'updated_at' => '2024-12-10 16:35:43',
            ),
            107 => 
            array (
                'id' => 341,
                'name' => 'Unit delete',
                'guard_name' => 'web',
                'parent' => 'Unit',
                'created_at' => '2024-12-10 16:35:43',
                'updated_at' => '2024-12-10 16:35:43',
            ),
            108 => 
            array (
                'id' => 342,
                'name' => 'Unit print',
                'guard_name' => 'web',
                'parent' => 'Unit',
                'created_at' => '2024-12-10 16:35:43',
                'updated_at' => '2024-12-10 16:35:43',
            ),
            109 => 
            array (
                'id' => 343,
                'name' => 'Unit show',
                'guard_name' => 'web',
                'parent' => 'Unit',
                'created_at' => '2024-12-10 16:35:43',
                'updated_at' => '2024-12-10 16:35:43',
            ),
            110 => 
            array (
                'id' => 344,
                'name' => 'Unit trash',
                'guard_name' => 'web',
                'parent' => 'Unit',
                'created_at' => '2024-12-10 16:35:43',
                'updated_at' => '2024-12-10 16:35:43',
            ),
            111 => 
            array (
                'id' => 345,
                'name' => 'Sub Unit create',
                'guard_name' => 'web',
                'parent' => 'Sub Unit',
                'created_at' => '2024-12-10 16:36:30',
                'updated_at' => '2024-12-10 16:36:30',
            ),
            112 => 
            array (
                'id' => 346,
                'name' => 'Sub Unit view',
                'guard_name' => 'web',
                'parent' => 'Sub Unit',
                'created_at' => '2024-12-10 16:36:30',
                'updated_at' => '2024-12-10 16:36:30',
            ),
            113 => 
            array (
                'id' => 347,
                'name' => 'Sub Unit edit',
                'guard_name' => 'web',
                'parent' => 'Sub Unit',
                'created_at' => '2024-12-10 16:36:30',
                'updated_at' => '2024-12-10 16:36:30',
            ),
            114 => 
            array (
                'id' => 348,
                'name' => 'Sub Unit destroy',
                'guard_name' => 'web',
                'parent' => 'Sub Unit',
                'created_at' => '2024-12-10 16:36:30',
                'updated_at' => '2024-12-10 16:36:30',
            ),
            115 => 
            array (
                'id' => 349,
                'name' => 'Sub Unit status',
                'guard_name' => 'web',
                'parent' => 'Sub Unit',
                'created_at' => '2024-12-10 16:36:30',
                'updated_at' => '2024-12-10 16:36:30',
            ),
            116 => 
            array (
                'id' => 350,
                'name' => 'Sub Unit restore',
                'guard_name' => 'web',
                'parent' => 'Sub Unit',
                'created_at' => '2024-12-10 16:36:30',
                'updated_at' => '2024-12-10 16:36:30',
            ),
            117 => 
            array (
                'id' => 351,
                'name' => 'Sub Unit delete',
                'guard_name' => 'web',
                'parent' => 'Sub Unit',
                'created_at' => '2024-12-10 16:36:30',
                'updated_at' => '2024-12-10 16:36:30',
            ),
            118 => 
            array (
                'id' => 352,
                'name' => 'Sub Unit print',
                'guard_name' => 'web',
                'parent' => 'Sub Unit',
                'created_at' => '2024-12-10 16:36:31',
                'updated_at' => '2024-12-10 16:36:31',
            ),
            119 => 
            array (
                'id' => 353,
                'name' => 'Sub Unit show',
                'guard_name' => 'web',
                'parent' => 'Sub Unit',
                'created_at' => '2024-12-10 16:36:31',
                'updated_at' => '2024-12-10 16:36:31',
            ),
            120 => 
            array (
                'id' => 354,
                'name' => 'Sub Unit trash',
                'guard_name' => 'web',
                'parent' => 'Sub Unit',
                'created_at' => '2024-12-10 16:36:31',
                'updated_at' => '2024-12-10 16:36:31',
            ),
            121 => 
            array (
                'id' => 355,
                'name' => 'Product Information create',
                'guard_name' => 'web',
                'parent' => 'Product Information',
                'created_at' => '2024-12-12 12:52:46',
                'updated_at' => '2024-12-12 12:52:46',
            ),
            122 => 
            array (
                'id' => 356,
                'name' => 'Product Information view',
                'guard_name' => 'web',
                'parent' => 'Product Information',
                'created_at' => '2024-12-12 12:52:46',
                'updated_at' => '2024-12-12 12:52:46',
            ),
            123 => 
            array (
                'id' => 357,
                'name' => 'Product Information edit',
                'guard_name' => 'web',
                'parent' => 'Product Information',
                'created_at' => '2024-12-12 12:52:46',
                'updated_at' => '2024-12-12 12:52:46',
            ),
            124 => 
            array (
                'id' => 358,
                'name' => 'Product Information destroy',
                'guard_name' => 'web',
                'parent' => 'Product Information',
                'created_at' => '2024-12-12 12:52:46',
                'updated_at' => '2024-12-12 12:52:46',
            ),
            125 => 
            array (
                'id' => 359,
                'name' => 'Product Information status',
                'guard_name' => 'web',
                'parent' => 'Product Information',
                'created_at' => '2024-12-12 12:52:46',
                'updated_at' => '2024-12-12 12:52:46',
            ),
            126 => 
            array (
                'id' => 360,
                'name' => 'Product Information restore',
                'guard_name' => 'web',
                'parent' => 'Product Information',
                'created_at' => '2024-12-12 12:52:46',
                'updated_at' => '2024-12-12 12:52:46',
            ),
            127 => 
            array (
                'id' => 361,
                'name' => 'Product Information delete',
                'guard_name' => 'web',
                'parent' => 'Product Information',
                'created_at' => '2024-12-12 12:52:47',
                'updated_at' => '2024-12-12 12:52:47',
            ),
            128 => 
            array (
                'id' => 362,
                'name' => 'Product Information print',
                'guard_name' => 'web',
                'parent' => 'Product Information',
                'created_at' => '2024-12-12 12:52:47',
                'updated_at' => '2024-12-12 12:52:47',
            ),
            129 => 
            array (
                'id' => 363,
                'name' => 'Product Information show',
                'guard_name' => 'web',
                'parent' => 'Product Information',
                'created_at' => '2024-12-12 12:52:47',
                'updated_at' => '2024-12-12 12:52:47',
            ),
            130 => 
            array (
                'id' => 364,
                'name' => 'Product Information trash',
                'guard_name' => 'web',
                'parent' => 'Product Information',
                'created_at' => '2024-12-12 12:52:47',
                'updated_at' => '2024-12-12 12:52:47',
            ),
            131 => 
            array (
                'id' => 404,
                'name' => 'Division Setup create',
                'guard_name' => 'web',
                'parent' => 'Division Setup',
                'created_at' => '2024-12-19 18:04:09',
                'updated_at' => '2024-12-19 18:04:09',
            ),
            132 => 
            array (
                'id' => 405,
                'name' => 'Division Setup view',
                'guard_name' => 'web',
                'parent' => 'Division Setup',
                'created_at' => '2024-12-19 18:04:09',
                'updated_at' => '2024-12-19 18:04:09',
            ),
            133 => 
            array (
                'id' => 406,
                'name' => 'Division Setup edit',
                'guard_name' => 'web',
                'parent' => 'Division Setup',
                'created_at' => '2024-12-19 18:04:09',
                'updated_at' => '2024-12-19 18:04:09',
            ),
            134 => 
            array (
                'id' => 407,
                'name' => 'Division Setup destroy',
                'guard_name' => 'web',
                'parent' => 'Division Setup',
                'created_at' => '2024-12-19 18:04:09',
                'updated_at' => '2024-12-19 18:04:09',
            ),
            135 => 
            array (
                'id' => 408,
                'name' => 'Division Setup status',
                'guard_name' => 'web',
                'parent' => 'Division Setup',
                'created_at' => '2024-12-19 18:04:09',
                'updated_at' => '2024-12-19 18:04:09',
            ),
            136 => 
            array (
                'id' => 409,
                'name' => 'Division Setup restore',
                'guard_name' => 'web',
                'parent' => 'Division Setup',
                'created_at' => '2024-12-19 18:04:09',
                'updated_at' => '2024-12-19 18:04:09',
            ),
            137 => 
            array (
                'id' => 410,
                'name' => 'Division Setup delete',
                'guard_name' => 'web',
                'parent' => 'Division Setup',
                'created_at' => '2024-12-19 18:04:09',
                'updated_at' => '2024-12-19 18:04:09',
            ),
            138 => 
            array (
                'id' => 411,
                'name' => 'Division Setup print',
                'guard_name' => 'web',
                'parent' => 'Division Setup',
                'created_at' => '2024-12-19 18:04:09',
                'updated_at' => '2024-12-19 18:04:09',
            ),
            139 => 
            array (
                'id' => 412,
                'name' => 'Division Setup show',
                'guard_name' => 'web',
                'parent' => 'Division Setup',
                'created_at' => '2024-12-19 18:04:09',
                'updated_at' => '2024-12-19 18:04:09',
            ),
            140 => 
            array (
                'id' => 413,
                'name' => 'Division Setup trash',
                'guard_name' => 'web',
                'parent' => 'Division Setup',
                'created_at' => '2024-12-19 18:04:09',
                'updated_at' => '2024-12-19 18:04:09',
            ),
            141 => 
            array (
                'id' => 414,
                'name' => 'District Setup create',
                'guard_name' => 'web',
                'parent' => 'District Setup',
                'created_at' => '2024-12-19 18:05:36',
                'updated_at' => '2024-12-19 18:05:36',
            ),
            142 => 
            array (
                'id' => 415,
                'name' => 'District Setup view',
                'guard_name' => 'web',
                'parent' => 'District Setup',
                'created_at' => '2024-12-19 18:05:36',
                'updated_at' => '2024-12-19 18:05:36',
            ),
            143 => 
            array (
                'id' => 416,
                'name' => 'District Setup edit',
                'guard_name' => 'web',
                'parent' => 'District Setup',
                'created_at' => '2024-12-19 18:05:36',
                'updated_at' => '2024-12-19 18:05:36',
            ),
            144 => 
            array (
                'id' => 417,
                'name' => 'District Setup destroy',
                'guard_name' => 'web',
                'parent' => 'District Setup',
                'created_at' => '2024-12-19 18:05:36',
                'updated_at' => '2024-12-19 18:05:36',
            ),
            145 => 
            array (
                'id' => 418,
                'name' => 'District Setup status',
                'guard_name' => 'web',
                'parent' => 'District Setup',
                'created_at' => '2024-12-19 18:05:36',
                'updated_at' => '2024-12-19 18:05:36',
            ),
            146 => 
            array (
                'id' => 419,
                'name' => 'District Setup restore',
                'guard_name' => 'web',
                'parent' => 'District Setup',
                'created_at' => '2024-12-19 18:05:36',
                'updated_at' => '2024-12-19 18:05:36',
            ),
            147 => 
            array (
                'id' => 420,
                'name' => 'District Setup delete',
                'guard_name' => 'web',
                'parent' => 'District Setup',
                'created_at' => '2024-12-19 18:05:36',
                'updated_at' => '2024-12-19 18:05:36',
            ),
            148 => 
            array (
                'id' => 421,
                'name' => 'District Setup print',
                'guard_name' => 'web',
                'parent' => 'District Setup',
                'created_at' => '2024-12-19 18:05:36',
                'updated_at' => '2024-12-19 18:05:36',
            ),
            149 => 
            array (
                'id' => 422,
                'name' => 'District Setup show',
                'guard_name' => 'web',
                'parent' => 'District Setup',
                'created_at' => '2024-12-19 18:05:36',
                'updated_at' => '2024-12-19 18:05:36',
            ),
            150 => 
            array (
                'id' => 423,
                'name' => 'District Setup trash',
                'guard_name' => 'web',
                'parent' => 'District Setup',
                'created_at' => '2024-12-19 18:05:36',
                'updated_at' => '2024-12-19 18:05:36',
            ),
            151 => 
            array (
                'id' => 424,
                'name' => 'Vendor create',
                'guard_name' => 'web',
                'parent' => 'Vendor',
                'created_at' => '2024-12-19 18:24:27',
                'updated_at' => '2024-12-19 18:24:27',
            ),
            152 => 
            array (
                'id' => 425,
                'name' => 'Vendor view',
                'guard_name' => 'web',
                'parent' => 'Vendor',
                'created_at' => '2024-12-19 18:24:27',
                'updated_at' => '2024-12-19 18:24:27',
            ),
            153 => 
            array (
                'id' => 426,
                'name' => 'Vendor edit',
                'guard_name' => 'web',
                'parent' => 'Vendor',
                'created_at' => '2024-12-19 18:24:27',
                'updated_at' => '2024-12-19 18:24:27',
            ),
            154 => 
            array (
                'id' => 427,
                'name' => 'Vendor destroy',
                'guard_name' => 'web',
                'parent' => 'Vendor',
                'created_at' => '2024-12-19 18:24:27',
                'updated_at' => '2024-12-19 18:24:27',
            ),
            155 => 
            array (
                'id' => 428,
                'name' => 'Vendor status',
                'guard_name' => 'web',
                'parent' => 'Vendor',
                'created_at' => '2024-12-19 18:24:27',
                'updated_at' => '2024-12-19 18:24:27',
            ),
            156 => 
            array (
                'id' => 429,
                'name' => 'Vendor restore',
                'guard_name' => 'web',
                'parent' => 'Vendor',
                'created_at' => '2024-12-19 18:24:27',
                'updated_at' => '2024-12-19 18:24:27',
            ),
            157 => 
            array (
                'id' => 430,
                'name' => 'Vendor delete',
                'guard_name' => 'web',
                'parent' => 'Vendor',
                'created_at' => '2024-12-19 18:24:27',
                'updated_at' => '2024-12-19 18:24:27',
            ),
            158 => 
            array (
                'id' => 431,
                'name' => 'Vendor print',
                'guard_name' => 'web',
                'parent' => 'Vendor',
                'created_at' => '2024-12-19 18:24:27',
                'updated_at' => '2024-12-19 18:24:27',
            ),
            159 => 
            array (
                'id' => 432,
                'name' => 'Vendor show',
                'guard_name' => 'web',
                'parent' => 'Vendor',
                'created_at' => '2024-12-19 18:24:27',
                'updated_at' => '2024-12-19 18:24:27',
            ),
            160 => 
            array (
                'id' => 433,
                'name' => 'Vendor trash',
                'guard_name' => 'web',
                'parent' => 'Vendor',
                'created_at' => '2024-12-19 18:24:27',
                'updated_at' => '2024-12-19 18:24:27',
            ),
            161 => 
            array (
                'id' => 434,
                'name' => 'Supplier Info create',
                'guard_name' => 'web',
                'parent' => 'Supplier Info',
                'created_at' => '2024-12-21 14:57:47',
                'updated_at' => '2024-12-21 14:57:47',
            ),
            162 => 
            array (
                'id' => 435,
                'name' => 'Supplier Info view',
                'guard_name' => 'web',
                'parent' => 'Supplier Info',
                'created_at' => '2024-12-21 14:57:47',
                'updated_at' => '2024-12-21 14:57:47',
            ),
            163 => 
            array (
                'id' => 436,
                'name' => 'Supplier Info edit',
                'guard_name' => 'web',
                'parent' => 'Supplier Info',
                'created_at' => '2024-12-21 14:57:47',
                'updated_at' => '2024-12-21 14:57:47',
            ),
            164 => 
            array (
                'id' => 437,
                'name' => 'Supplier Info destroy',
                'guard_name' => 'web',
                'parent' => 'Supplier Info',
                'created_at' => '2024-12-21 14:57:47',
                'updated_at' => '2024-12-21 14:57:47',
            ),
            165 => 
            array (
                'id' => 438,
                'name' => 'Supplier Info status',
                'guard_name' => 'web',
                'parent' => 'Supplier Info',
                'created_at' => '2024-12-21 14:57:47',
                'updated_at' => '2024-12-21 14:57:47',
            ),
            166 => 
            array (
                'id' => 439,
                'name' => 'Supplier Info restore',
                'guard_name' => 'web',
                'parent' => 'Supplier Info',
                'created_at' => '2024-12-21 14:57:47',
                'updated_at' => '2024-12-21 14:57:47',
            ),
            167 => 
            array (
                'id' => 440,
                'name' => 'Supplier Info delete',
                'guard_name' => 'web',
                'parent' => 'Supplier Info',
                'created_at' => '2024-12-21 14:57:47',
                'updated_at' => '2024-12-21 14:57:47',
            ),
            168 => 
            array (
                'id' => 441,
                'name' => 'Supplier Info print',
                'guard_name' => 'web',
                'parent' => 'Supplier Info',
                'created_at' => '2024-12-21 14:57:47',
                'updated_at' => '2024-12-21 14:57:47',
            ),
            169 => 
            array (
                'id' => 442,
                'name' => 'Supplier Info show',
                'guard_name' => 'web',
                'parent' => 'Supplier Info',
                'created_at' => '2024-12-21 14:57:47',
                'updated_at' => '2024-12-21 14:57:47',
            ),
            170 => 
            array (
                'id' => 443,
                'name' => 'Supplier Info trash',
                'guard_name' => 'web',
                'parent' => 'Supplier Info',
                'created_at' => '2024-12-21 14:57:47',
                'updated_at' => '2024-12-21 14:57:47',
            ),
            171 => 
            array (
                'id' => 444,
                'name' => 'Shipping Class create',
                'guard_name' => 'web',
                'parent' => 'Shipping Class',
                'created_at' => '2024-12-21 18:21:57',
                'updated_at' => '2024-12-21 18:21:57',
            ),
            172 => 
            array (
                'id' => 445,
                'name' => 'Shipping Class view',
                'guard_name' => 'web',
                'parent' => 'Shipping Class',
                'created_at' => '2024-12-21 18:21:57',
                'updated_at' => '2024-12-21 18:21:57',
            ),
            173 => 
            array (
                'id' => 446,
                'name' => 'Shipping Class edit',
                'guard_name' => 'web',
                'parent' => 'Shipping Class',
                'created_at' => '2024-12-21 18:21:57',
                'updated_at' => '2024-12-21 18:21:57',
            ),
            174 => 
            array (
                'id' => 447,
                'name' => 'Shipping Class destroy',
                'guard_name' => 'web',
                'parent' => 'Shipping Class',
                'created_at' => '2024-12-21 18:21:57',
                'updated_at' => '2024-12-21 18:21:57',
            ),
            175 => 
            array (
                'id' => 448,
                'name' => 'Shipping Class status',
                'guard_name' => 'web',
                'parent' => 'Shipping Class',
                'created_at' => '2024-12-21 18:21:57',
                'updated_at' => '2024-12-21 18:21:57',
            ),
            176 => 
            array (
                'id' => 449,
                'name' => 'Shipping Class restore',
                'guard_name' => 'web',
                'parent' => 'Shipping Class',
                'created_at' => '2024-12-21 18:21:57',
                'updated_at' => '2024-12-21 18:21:57',
            ),
            177 => 
            array (
                'id' => 450,
                'name' => 'Shipping Class delete',
                'guard_name' => 'web',
                'parent' => 'Shipping Class',
                'created_at' => '2024-12-21 18:21:57',
                'updated_at' => '2024-12-21 18:21:57',
            ),
            178 => 
            array (
                'id' => 451,
                'name' => 'Shipping Class print',
                'guard_name' => 'web',
                'parent' => 'Shipping Class',
                'created_at' => '2024-12-21 18:21:57',
                'updated_at' => '2024-12-21 18:21:57',
            ),
            179 => 
            array (
                'id' => 452,
                'name' => 'Shipping Class show',
                'guard_name' => 'web',
                'parent' => 'Shipping Class',
                'created_at' => '2024-12-21 18:21:57',
                'updated_at' => '2024-12-21 18:21:57',
            ),
            180 => 
            array (
                'id' => 453,
                'name' => 'Shipping Class trash',
                'guard_name' => 'web',
                'parent' => 'Shipping Class',
                'created_at' => '2024-12-21 18:21:57',
                'updated_at' => '2024-12-21 18:21:57',
            ),
            181 => 
            array (
                'id' => 454,
                'name' => 'Thana Setup create',
                'guard_name' => 'web',
                'parent' => 'Thana Setup',
                'created_at' => '2024-12-22 11:59:29',
                'updated_at' => '2024-12-22 11:59:29',
            ),
            182 => 
            array (
                'id' => 455,
                'name' => 'Thana Setup view',
                'guard_name' => 'web',
                'parent' => 'Thana Setup',
                'created_at' => '2024-12-22 11:59:29',
                'updated_at' => '2024-12-22 11:59:29',
            ),
            183 => 
            array (
                'id' => 456,
                'name' => 'Thana Setup edit',
                'guard_name' => 'web',
                'parent' => 'Thana Setup',
                'created_at' => '2024-12-22 11:59:29',
                'updated_at' => '2024-12-22 11:59:29',
            ),
            184 => 
            array (
                'id' => 457,
                'name' => 'Thana Setup destroy',
                'guard_name' => 'web',
                'parent' => 'Thana Setup',
                'created_at' => '2024-12-22 11:59:29',
                'updated_at' => '2024-12-22 11:59:29',
            ),
            185 => 
            array (
                'id' => 458,
                'name' => 'Thana Setup status',
                'guard_name' => 'web',
                'parent' => 'Thana Setup',
                'created_at' => '2024-12-22 11:59:29',
                'updated_at' => '2024-12-22 11:59:29',
            ),
            186 => 
            array (
                'id' => 459,
                'name' => 'Thana Setup restore',
                'guard_name' => 'web',
                'parent' => 'Thana Setup',
                'created_at' => '2024-12-22 11:59:29',
                'updated_at' => '2024-12-22 11:59:29',
            ),
            187 => 
            array (
                'id' => 460,
                'name' => 'Thana Setup delete',
                'guard_name' => 'web',
                'parent' => 'Thana Setup',
                'created_at' => '2024-12-22 11:59:30',
                'updated_at' => '2024-12-22 11:59:30',
            ),
            188 => 
            array (
                'id' => 461,
                'name' => 'Thana Setup print',
                'guard_name' => 'web',
                'parent' => 'Thana Setup',
                'created_at' => '2024-12-22 11:59:30',
                'updated_at' => '2024-12-22 11:59:30',
            ),
            189 => 
            array (
                'id' => 462,
                'name' => 'Thana Setup show',
                'guard_name' => 'web',
                'parent' => 'Thana Setup',
                'created_at' => '2024-12-22 11:59:30',
                'updated_at' => '2024-12-22 11:59:30',
            ),
            190 => 
            array (
                'id' => 463,
                'name' => 'Thana Setup trash',
                'guard_name' => 'web',
                'parent' => 'Thana Setup',
                'created_at' => '2024-12-22 11:59:30',
                'updated_at' => '2024-12-22 11:59:30',
            ),
            191 => 
            array (
                'id' => 464,
                'name' => 'Delivery Charge create',
                'guard_name' => 'web',
                'parent' => 'Delivery Charge',
                'created_at' => '2024-12-22 17:39:12',
                'updated_at' => '2024-12-22 17:39:12',
            ),
            192 => 
            array (
                'id' => 465,
                'name' => 'Delivery Charge view',
                'guard_name' => 'web',
                'parent' => 'Delivery Charge',
                'created_at' => '2024-12-22 17:39:13',
                'updated_at' => '2024-12-22 17:39:13',
            ),
            193 => 
            array (
                'id' => 466,
                'name' => 'Delivery Charge edit',
                'guard_name' => 'web',
                'parent' => 'Delivery Charge',
                'created_at' => '2024-12-22 17:39:13',
                'updated_at' => '2024-12-22 17:39:13',
            ),
            194 => 
            array (
                'id' => 467,
                'name' => 'Delivery Charge destroy',
                'guard_name' => 'web',
                'parent' => 'Delivery Charge',
                'created_at' => '2024-12-22 17:39:13',
                'updated_at' => '2024-12-22 17:39:13',
            ),
            195 => 
            array (
                'id' => 468,
                'name' => 'Delivery Charge status',
                'guard_name' => 'web',
                'parent' => 'Delivery Charge',
                'created_at' => '2024-12-22 17:39:13',
                'updated_at' => '2024-12-22 17:39:13',
            ),
            196 => 
            array (
                'id' => 469,
                'name' => 'Delivery Charge restore',
                'guard_name' => 'web',
                'parent' => 'Delivery Charge',
                'created_at' => '2024-12-22 17:39:13',
                'updated_at' => '2024-12-22 17:39:13',
            ),
            197 => 
            array (
                'id' => 470,
                'name' => 'Delivery Charge delete',
                'guard_name' => 'web',
                'parent' => 'Delivery Charge',
                'created_at' => '2024-12-22 17:39:13',
                'updated_at' => '2024-12-22 17:39:13',
            ),
            198 => 
            array (
                'id' => 471,
                'name' => 'Delivery Charge print',
                'guard_name' => 'web',
                'parent' => 'Delivery Charge',
                'created_at' => '2024-12-22 17:39:13',
                'updated_at' => '2024-12-22 17:39:13',
            ),
            199 => 
            array (
                'id' => 472,
                'name' => 'Delivery Charge show',
                'guard_name' => 'web',
                'parent' => 'Delivery Charge',
                'created_at' => '2024-12-22 17:39:13',
                'updated_at' => '2024-12-22 17:39:13',
            ),
            200 => 
            array (
                'id' => 473,
                'name' => 'Delivery Charge trash',
                'guard_name' => 'web',
                'parent' => 'Delivery Charge',
                'created_at' => '2024-12-22 17:39:13',
                'updated_at' => '2024-12-22 17:39:13',
            ),
        ));
        
        
    }
}