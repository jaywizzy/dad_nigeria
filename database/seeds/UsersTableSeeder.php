<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'email' => 'jaywizzy34@gmail.com',
            'password' => 'oluwasegun',
        ]);

        DB::table('users')->insert([
            'email' => 'vanshergzie@gmail.com',
            'password' => 'oluwasegun',
        ]);

        DB::table('users')->insert([
            'email' => 'shergzie@gmail.com',
            'password' => 'oluwasegun',
        ]);
        //
    }
}
