<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder {
    public function run() {
        DB::table('users')->insert([
            [
                'name'         => 'Admin 1',
                'email'         => 'admin@gmail.com',
                'password'      => bcrypt('123456'), 
                'email_verified_at'    => date("Y-m-d h:i:s"),
                'created_at'    => date("Y-m-d h:i:s"), 
                'updated_at'    => date("Y-m-d h:i:s")
            ],
            [
                'name'         => 'MD',
                'email'         => 'email@gmail.com',
                'password'      => bcrypt('123456'), 
                'email_verified_at'    => date("Y-m-d h:i:s"),
                'created_at'    => date("Y-m-d h:i:s"), 
                'updated_at'    => date("Y-m-d h:i:s")
            ],
            [
                'name'         => 'atioonline',
                'email'         => 'admin@atitonline.com',
                'password'      => bcrypt('123456'), 
                'email_verified_at'    => date("Y-m-d h:i:s"),
                'created_at'    => date("Y-m-d h:i:s"), 
                'updated_at'    => date("Y-m-d h:i:s")
            ],
            [
                'name'         => 'atio',
                'email'         => 'user@atitonline.com',
                'password'      => bcrypt('123456'), 
                'email_verified_at'    => date("Y-m-d h:i:s"),
                'created_at'    => date("Y-m-d h:i:s"), 
                'updated_at'    => date("Y-m-d h:i:s")
            ],
            [
                'name'         => 'User',
                'email'         => 'user@gmail.com',
                'password'      => bcrypt('123456'), 
                'email_verified_at'    => date("Y-m-d h:i:s"),
                'created_at'    => date("Y-m-d h:i:s"), 
                'updated_at'    => date("Y-m-d h:i:s")
            ]
        ]);
    }
}
