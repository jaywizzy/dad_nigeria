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
            'first_name' => 'oluwasegun',
            'last_name' => 'jay',
            'email'    => 'j@gmail.com',
            'organisation'    => 'Nhub',
            'password' => Hash::make('awesome'),
        ]);

        //
    }
}
