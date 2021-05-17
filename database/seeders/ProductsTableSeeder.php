<?php

namespace Database\Seeders;
use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Models\product::factory(10)->create();
    }
}
