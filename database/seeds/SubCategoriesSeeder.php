<?php

use Illuminate\Database\Seeder;

class SubCategoriesSeeder extends Seeder
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
            'categories_id' => 1,
            'name' => 'Monitor',
        ));
        User::create(array(
            'id' => 2,
            'categories_id' => 1,
            'name' => 'Console',
        ));
        User::create(array(
            'id' => 3,
            'categories_id' => 1,
            'name' => 'Handphone',
        ));
        User::create(array(
            'id' => 4,
            'categories_id' => 1,
            'name' => 'Other',
        ));
        User::create(array(
            'id' => 5,
            'categories_id' => 2,
            'name' => 'Skin and Item',
        ));
        User::create(array(
            'id' => 6,
            'categories_id' => 2,
            'name' => 'Account',
        ));
        User::create(array(
            'id' => 7,
            'categories_id' => 2,
            'name' => 'Disk',
        ));
        User::create(array(
            'id' => 8,
            'categories_id' => 2,
            'name' => 'Other',
        ));
        User::create(array(
            'id' => 9,
            'categories_id' => 3,
            'name' => 'CPU',
        ));
        User::create(array(
            'id' => 10,
            'categories_id' => 3,
            'name' => 'VGA',
        ));
        User::create(array(
            'id' => 11,
            'categories_id' => 3,
            'name' => 'Motherboard',
        ));
        User::create(array(
            'id' => 12,
            'categories_id' => 3,
            'name' => 'RAM',
        ));
        User::create(array(
            'id' => 13,
            'categories_id' => 3,
            'name' => 'SSD & HDD',
        ));
        User::create(array(
            'id' => 14,
            'categories_id' => 3,
            'name' => 'Other',
        ));
        User::create(array(
            'id' => 15,
            'categories_id' => 4,
            'name' => 'Headset',
        ));
        User::create(array(
            'id' => 16,
            'categories_id' => 4,
            'name' => 'Mouse',
        ));
        User::create(array(
            'id' => 17,
            'categories_id' => 4,
            'name' => 'Keyboard',
        ));
        User::create(array(
            'id' => 18,
            'categories_id' => 4,
            'name' => 'Harddisk External',
        ));
        User::create(array(
            'id' => 19,
            'categories_id' => 4,
            'name' => 'Controller',
        ));
        User::create(array(
            'id' => 20,
            'categories_id' => 4,
            'name' => 'Other',
        ));
    }
}
