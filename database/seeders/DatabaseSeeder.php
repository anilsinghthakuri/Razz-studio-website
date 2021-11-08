<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        DB::table('users')->insert([
            'name'=>'Admin',
            'email'=>'admin@user.com',
            'password'=>Hash::make('1234'),
        ]);


        DB::table('abouts')->insert([
            'image'=>'t1.jpg',
            'desc'=>'Libero aliquam eiget rhoncus elit quis mattis tos neque ullco qua praesent interdum orc torristique aenean at dictumst velit fames molestie tristique magna sociosqu ine rhoncuis in cubilia magno senectus sociis tortor enim',
        ]);

        DB::table('missions')->insert([
            'image'=>'t2.jpg',
            'desc'=>'Libero aliquam eiget rhoncus elit quis mattis tos neque ullco qua praesent interdum orc torristique aenean at dictumst velit fames molestie tristique magna sociosqu ine rhoncuis in cubilia magno senectus sociis tortor enim',
        ]);
    }
}
