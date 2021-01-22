<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            ["first_name"=>'Admin', "last_name"=>'1', "email"=>'admin@gmail.com','password'=>bcrypt('admin123'), 'role'=>'admin'],
        ]);
    }
}
