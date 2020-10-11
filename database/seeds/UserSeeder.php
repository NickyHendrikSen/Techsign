<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create(array(
            'id' => 1,
            'name' => 'John Doe',
            'phone' => '0888888888',
            'email' => 'johndoe@gmail.com',
            'password' => Hash::make('john'),
            'role' => 'Seller',
            'balance' => 20
        ));
        User::create(array(
            'id' => 1,
            'name' => 'Jane Doe',
            'phone' => '0888888888',
            'email' => 'janedoe@gmail.com',
            'password' => Hash::make('jane'),
            'role' => 'User',
            'balance' => 20
        ));
    }
}
