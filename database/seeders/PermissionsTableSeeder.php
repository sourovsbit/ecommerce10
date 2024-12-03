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
                'id' => 68,
                'name' => 'Role create',
                'guard_name' => 'web',
                'parent' => 'Role',
                'created_at' => '2024-06-22 14:49:32',
                'updated_at' => '2024-06-22 14:49:32',
            ),
            21 => 
            array (
                'id' => 69,
                'name' => 'Role view',
                'guard_name' => 'web',
                'parent' => 'Role',
                'created_at' => '2024-06-22 14:49:32',
                'updated_at' => '2024-06-22 14:49:32',
            ),
            22 => 
            array (
                'id' => 70,
                'name' => 'Role edit',
                'guard_name' => 'web',
                'parent' => 'Role',
                'created_at' => '2024-06-22 14:49:32',
                'updated_at' => '2024-06-22 14:49:32',
            ),
            23 => 
            array (
                'id' => 71,
                'name' => 'Role destroy',
                'guard_name' => 'web',
                'parent' => 'Role',
                'created_at' => '2024-06-22 14:49:32',
                'updated_at' => '2024-06-22 14:49:32',
            ),
            24 => 
            array (
                'id' => 72,
                'name' => 'Role status',
                'guard_name' => 'web',
                'parent' => 'Role',
                'created_at' => '2024-06-22 14:49:32',
                'updated_at' => '2024-06-22 14:49:32',
            ),
            25 => 
            array (
                'id' => 73,
                'name' => 'Role restore',
                'guard_name' => 'web',
                'parent' => 'Role',
                'created_at' => '2024-06-22 14:49:32',
                'updated_at' => '2024-06-22 14:49:32',
            ),
            26 => 
            array (
                'id' => 74,
                'name' => 'Role delete',
                'guard_name' => 'web',
                'parent' => 'Role',
                'created_at' => '2024-06-22 14:49:32',
                'updated_at' => '2024-06-22 14:49:32',
            ),
            27 => 
            array (
                'id' => 75,
                'name' => 'Role print',
                'guard_name' => 'web',
                'parent' => 'Role',
                'created_at' => '2024-06-22 14:49:32',
                'updated_at' => '2024-06-22 14:49:32',
            ),
            28 => 
            array (
                'id' => 76,
                'name' => 'Role trash',
                'guard_name' => 'web',
                'parent' => 'Role',
                'created_at' => '2024-06-22 14:49:32',
                'updated_at' => '2024-06-22 14:49:32',
            ),
            29 => 
            array (
                'id' => 77,
                'name' => 'Role show',
                'guard_name' => 'web',
                'parent' => 'Role',
                'created_at' => '2024-06-22 14:49:32',
                'updated_at' => '2024-06-22 14:49:32',
            ),
            30 => 
            array (
                'id' => 78,
                'name' => 'Users create',
                'guard_name' => 'web',
                'parent' => 'Users',
                'created_at' => '2024-06-22 14:49:47',
                'updated_at' => '2024-06-22 14:49:47',
            ),
            31 => 
            array (
                'id' => 79,
                'name' => 'Users view',
                'guard_name' => 'web',
                'parent' => 'Users',
                'created_at' => '2024-06-22 14:49:47',
                'updated_at' => '2024-06-22 14:49:47',
            ),
            32 => 
            array (
                'id' => 80,
                'name' => 'Users edit',
                'guard_name' => 'web',
                'parent' => 'Users',
                'created_at' => '2024-06-22 14:49:47',
                'updated_at' => '2024-06-22 14:49:47',
            ),
            33 => 
            array (
                'id' => 81,
                'name' => 'Users destroy',
                'guard_name' => 'web',
                'parent' => 'Users',
                'created_at' => '2024-06-22 14:49:47',
                'updated_at' => '2024-06-22 14:49:47',
            ),
            34 => 
            array (
                'id' => 82,
                'name' => 'Users status',
                'guard_name' => 'web',
                'parent' => 'Users',
                'created_at' => '2024-06-22 14:49:47',
                'updated_at' => '2024-06-22 14:49:47',
            ),
            35 => 
            array (
                'id' => 83,
                'name' => 'Users restore',
                'guard_name' => 'web',
                'parent' => 'Users',
                'created_at' => '2024-06-22 14:49:47',
                'updated_at' => '2024-06-22 14:49:47',
            ),
            36 => 
            array (
                'id' => 84,
                'name' => 'Users delete',
                'guard_name' => 'web',
                'parent' => 'Users',
                'created_at' => '2024-06-22 14:49:47',
                'updated_at' => '2024-06-22 14:49:47',
            ),
            37 => 
            array (
                'id' => 85,
                'name' => 'Users print',
                'guard_name' => 'web',
                'parent' => 'Users',
                'created_at' => '2024-06-22 14:49:47',
                'updated_at' => '2024-06-22 14:49:47',
            ),
            38 => 
            array (
                'id' => 86,
                'name' => 'Users trash',
                'guard_name' => 'web',
                'parent' => 'Users',
                'created_at' => '2024-06-22 14:49:47',
                'updated_at' => '2024-06-22 14:49:47',
            ),
            39 => 
            array (
                'id' => 87,
                'name' => 'Users show',
                'guard_name' => 'web',
                'parent' => 'Users',
                'created_at' => '2024-06-22 14:49:47',
                'updated_at' => '2024-06-22 14:49:47',
            ),
            40 => 
            array (
                'id' => 209,
                'name' => 'Dashboard View',
                'guard_name' => 'web',
                'parent' => 'Dashboard',
                'created_at' => '2024-12-03 14:13:34',
                'updated_at' => '2024-12-03 14:13:34',
            ),
        ));
        
        
    }
}