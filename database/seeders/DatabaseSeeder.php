<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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

        DB::table('aboutuses')->insert([
            'image'=>'tl.jpg',
            'desc'=>'Libero aliquam eiget rhoncus elit quis mattis tos neque ullco qua praesent interdum orc torristique aenean at dictumst velit fames molestie tristique magna sociosqu ine rhoncuis in cubilia magno senectus sociis tortor enim.

            Libero aliquam eiget rhoncus elit quis mattis tos neque ullco qua praesent interdum orc torristique aenean at dictumst velit

            Libero aliquam eiget rhoncus elit quis mattis tos neque ullco qua praesent interdum orc torristique aenean at dictumst velit

            Libero aliquam eiget rhoncus elit quis mattis tos neque ullco qua praesent interdum orc torristique aenean at dictumst velit fames molestie tristique magna sociosqu ine rhoncuis in cubilia magno senectus sociis tortor enim.',
        ]);
    }
}
