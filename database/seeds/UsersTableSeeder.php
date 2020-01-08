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
       \App\User::create([
           'name' => 'zns',
           'usertype' => 1,
           'email' => 'zns@gmail.com',
           'dept'=>'CSE',
           'password' => Hash::make('password') 
        ]);

        \App\User::create([
           'name' => 'naw',
           'usertype' => 1,
           'email' => 'naw@gmail.com',
           'dept'=>'EEE',
           'password' => Hash::make('password') 
        ]);

        \App\User::create([
           'name' => 'rai',
           'usertype' => 2,
           'email' => 'rai@gmail.com',
           'dept'=>'CSE',
           'password' => Hash::make('password') 
        ]);

    }
}
