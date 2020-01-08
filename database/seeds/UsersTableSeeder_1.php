<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder_1 extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\User::create([
           'name' => 'moon',
           'usertype' => 2,
           'email' => 'moon@gmail.com',
           'dept'=>'CSE',
           'password' => Hash::make('password') 
        ]);

        \App\User::create([
           'name' => 'ank',
           'usertype' => 2,
           'email' => 'ank@gmail.com',
           'dept'=>'CSE',
           'password' => Hash::make('password') 
        ]);
    }
}
