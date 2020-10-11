<?php

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
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
    }
}
