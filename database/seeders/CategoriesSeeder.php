<?php

namespace Database\Seeders;

use App\Models\Category;
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
        $category = new Category();
        $category->name = 'Cafe';
        $category->desc = '';
        $category->save();

        $category = new Category();
        $category->name = 'Nước Ép';
        $category->desc = '';
        $category->save();

        $category = new Category();
        $category->name = 'Trà';
        $category->desc = '';
        $category->save();
    }
}
