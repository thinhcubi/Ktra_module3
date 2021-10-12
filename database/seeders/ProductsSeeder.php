<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new Product();
        $product->name = 'Cafe cốt dừa';
        $product->image = '';
        $product->price = '35000';
        $product->save();

        $product = new Product();
        $product->name = 'Cafe nâu đá';
        $product->image = '';
        $product->price = '20000';
        $product->save();

        $product = new Product();
        $product->name = 'Nước ép lựu';
        $product->image = '';
        $product->price = '30000';
        $product->save();
    }
}
