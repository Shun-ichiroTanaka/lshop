<?php

use App\Product;
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
        Product::create([
            'name' => 'surfboard 1',
            'slug' => 'surfboard-1',
            'details' => '15 inch, 32型 RAM',
            'price' => 50000,
            'description' => '軽量かつバランス重視の最新版',
        ]);
        Product::create([
            'name' => 'surfboard 2',
            'slug' => 'surfboard-2',
            'details' => '15 inch, 16型 RAM',
            'price' => 40000,
            'description' => '軽量かつバランス重視の最新版',
        ]);

        Product::create([
            'name' => 'surfboard 3',
            'slug' => 'surfboard-3',
            'details' => '13 inch, 16型 RAM',
            'price' => 40000,
            'description' => '軽量かつバランス重視の最新版',
        ]);

        Product::create([
            'name' => 'surfboard 4',
            'slug' => 'surfboard-4',
            'details' => '15 inch, 16型 RAM',
            'price' => 40000,
            'description' => '軽量かつバランス重視の最新版',
        ]);

        Product::create([
            'name' => 'surfboard 5',
            'slug' => 'surfboard-5',
            'details' => '15 inch, 16型 RAM',
            'price' => 40000,
            'description' => '軽量かつバランス重視の最新版',
        ]);

        Product::create([
            'name' => 'surfboard 6',
            'slug' => 'surfboard-6',
            'details' => '15 inch, 16型 RAM',
            'price' => 40000,
            'description' => '軽量かつバランス重視の最新版',
        ]);

        Product::create([
            'name' => 'surfboard 7',
            'slug' => 'surfboard-7',
            'details' => '15 inch, 16型 RAM',
            'price' => 40000,
            'description' => '軽量かつバランス重視の最新版',
        ]);

        Product::create([
            'name' => 'surfboard 8',
            'slug' => 'surfboard-8',
            'details' => '15 inch, 16型 RAM',
            'price' => 40000,
            'description' => '軽量かつバランス重視の最新版',
        ]);

        Product::create([
            'name' => 'surfboard 9',
            'slug' => 'surfboard-9',
            'details' => '15 inch, 16型 RAM',
            'price' => 40000,
            'description' => '軽量かつバランス重視の最新版',
        ]);
        Product::create([
            'name' => 'surfboard 10',
            'slug' => 'surfboard-10',
            'details' => '15 inch, 16型 RAM',
            'price' => 40000,
            'description' => '軽量かつバランス重視の最新版',
        ]);
    }
}
