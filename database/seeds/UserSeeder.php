<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //DB::table('users')->insert([
        //  'username'=>'rober',
        //  'password'=>1234
        //]);

        DB::table('books')->insert([
          'name'=>'Metro 2033',
          'author_name'=>'Dimitry',
          'isbn_number'=>123456789,
        ]);

        DB::table('books')->insert([
          'name'=>'Fahrenheit 451',
          'author_name'=>'Ray Bradbury',
          'isbn_number'=>987654321,
        ]);

    }
}
