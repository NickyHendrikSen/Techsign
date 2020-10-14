<?php

use Illuminate\Database\Seeder;
use App\Category;
use App\SubCategory;
use App\Item;

class MainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'id' => 1,
            'name' => 'John Doe',
            'phone' => '0888888888',
            'email' => 'johndoe@gmail.com',
            'password' => bcrypt('john'),
            'role' => 'User',
            'balance' => 20
        ]);
        DB::table('users')->insert([
            'id' => 2,
            'name' => 'Jane Doe',
            'phone' => '0888888888',
            'email' => 'janedoe@gmail.com',
            'password' => bcrypt('jane'),
            'role' => 'User',
            'balance' => 20
        ]);

        //CategoriesSeeder
        Category::create(array(
            'id' => 1,
            'name' => 'Electronic',
        ));
        Category::create(array(
            'id' => 2,
            'name' => 'Game',
        ));
        Category::create(array(
            'id' => 3,
            'name' => 'Computer',
        ));
        Category::create(array(
            'id' => 4,
            'name' => 'Furniture',
        ));
        Category::create(array(
            'id' => 5,
            'name' => 'Other',
        ));

        //SubCategoriesSeeder
        SubCategory::create(array(
            'id' => 1,
            'categories_id' => 1,
            'name' => 'Monitor',
        ));
        SubCategory::create(array(
            'id' => 2,
            'categories_id' => 1,
            'name' => 'Console',
        ));
        SubCategory::create(array(
            'id' => 3,
            'categories_id' => 1,
            'name' => 'Handphone',
        ));
        SubCategory::create(array(
            'id' => 4,
            'categories_id' => 1,
            'name' => 'Other',
        ));
        SubCategory::create(array(
            'id' => 5,
            'categories_id' => 2,
            'name' => 'Skin and Item',
        ));
        SubCategory::create(array(
            'id' => 6,
            'categories_id' => 2,
            'name' => 'Account',
        ));
        SubCategory::create(array(
            'id' => 7,
            'categories_id' => 2,
            'name' => 'Disk',
        ));
        SubCategory::create(array(
            'id' => 8,
            'categories_id' => 2,
            'name' => 'Other',
        ));
        SubCategory::create(array(
            'id' => 9,
            'categories_id' => 3,
            'name' => 'CPU',
        ));
        SubCategory::create(array(
            'id' => 10,
            'categories_id' => 3,
            'name' => 'VGA',
        ));
        SubCategory::create(array(
            'id' => 11,
            'categories_id' => 3,
            'name' => 'Motherboard',
        ));
        SubCategory::create(array(
            'id' => 12,
            'categories_id' => 3,
            'name' => 'RAM',
        ));
        SubCategory::create(array(
            'id' => 13,
            'categories_id' => 3,
            'name' => 'SSD & HDD',
        ));
        SubCategory::create(array(
            'id' => 14,
            'categories_id' => 3,
            'name' => 'Other',
        ));
        SubCategory::create(array(
            'id' => 15,
            'categories_id' => 4,
            'name' => 'Headset',
        ));
        SubCategory::create(array(
            'id' => 16,
            'categories_id' => 4,
            'name' => 'Mouse',
        ));
        SubCategory::create(array(
            'id' => 17,
            'categories_id' => 4,
            'name' => 'Keyboard',
        ));
        SubCategory::create(array(
            'id' => 18,
            'categories_id' => 4,
            'name' => 'Harddisk External',
        ));
        SubCategory::create(array(
            'id' => 19,
            'categories_id' => 4,
            'name' => 'Controller',
        ));
        SubCategory::create(array(
            'id' => 20,
            'categories_id' => 4,
            'name' => 'Other',
        ));

        Item::create([
            'sub_categories_id' => 5,
            'name' => 'Skylark',
            'users_id' => 1,
            'description' => "Powerfull skin.",
            'price' => 3000000,
            'delivery_price' => 0,
            'stock' => 200
        ]);
    }
}
