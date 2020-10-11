<?php

use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
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
            'name' => 'Electronic',
        ));
        User::create(array(
            'id' => 2,
            'name' => 'Game',
        ));
        User::create(array(
            'id' => 3,
            'name' => 'Computer',
        ));
        User::create(array(
            'id' => 4,
            'name' => 'Furniture',
        ));
        User::create(array(
            'id' => 5,
            'name' => 'Other',
        ));
    }
}
