<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'name' => 'A New Hope',
            'description' => 'A New Hope'
        ]);

        Product::create([
            'name' => 'The Empire Strikes Back',
            'description' => 'The Empire Strikes Back'
        ]);
    }
}
