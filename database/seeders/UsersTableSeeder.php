<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Tanim',
                'email' => 'tanimchy417@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$tBwzsOUW5q11giFP6VYjMeLGeRStVeDBzYMV2dDEXq4i1yADyiwae',
                'remember_token' => NULL,
                'created_at' => '2024-04-07 08:14:56',
                'updated_at' => '2024-04-26 21:47:41',
                'phone' => '01872583429',
                'role_id' => 2,
                'deleted_at' => NULL,
                'image' => NULL,
                'create_by' => NULL,
            ),
            1 => 
            array (
                'id' => 3,
                'name' => 'Super Admin',
                'email' => 'super@admin.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$TDR9KA1yeoIzt0C9bXiJ9euzbwoP2H0MNVOqhBNYQ64d41L01or26',
                'remember_token' => NULL,
                'created_at' => '2024-04-25 17:25:04',
                'updated_at' => '2024-12-03 14:09:35',
                'phone' => '01575434262',
                'role_id' => 2,
                'deleted_at' => NULL,
                'image' => '427295067.jpg',
                'create_by' => 1,
            ),
        ));
        
        
    }
}