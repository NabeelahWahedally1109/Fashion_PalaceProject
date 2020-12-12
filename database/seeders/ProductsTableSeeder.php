<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use DB;

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
       'name' => 'Pink Dress',
       'slug' => 'pink-dress',
       'price' => 30.00,
       'description' => 'Pink Dress',
       'category_id' => 1,
       'brand_id' => 1,
       'image_path' => 'img/product/1.jpg'
   ]);

    Product::create([
       'name' => 'Black Leather Jacket',
       'slug' => 'jacket',
       'price' => 50.00,
       'description' => 'Black Leather Jacket',
       'category_id' => 1,
       'brand_id' => 2,
       'image_path' => 'img/product/2.jpg'
   ]);

     Product::create([
       'name' => 'White Crop Top and Pant',
       'slug' => 'top-pant',
       'price' => 20.00,
       'description' => 'White Crop Top and Pant',
       'category_id' => 2,
       'brand_id' => 1,
       'image_path' => 'img/product/3.jpg'
   ]);

    Product::create([
       'name' => 'Light Blue Dress',
       'slug' => 'blue-dress',
       'price' => 10.00,
       'description' => 'Light Blue Dress',
       'category_id' => 3,
       'brand_id' => 3,
       'image_path' => 'img/product/4.jpg'
   ]);

     Product::create([
       'name' => 'Jumpsuit',
       'slug' => 'jumpsuit',
       'price' => 55.00,
       'description' => 'Jumpsuit',
       'category_id' => 4,
       'brand_id' => 4,
       'image_path' => 'img/product/5.jpg'
   ]);

    Product::create([
       'name' => 'Black Top',
       'slug' => 'top',
       'price' => 10.00,
       'description' => 'Samsung Digital Camera',
       'category_id' => 5,
       'brand_id' => 4,
       'image_path' => 'img/product/6.jpg'
   ]);

     Product::create([
       'name' => 'White Long Sleeve Top and Short',
       'slug' => 'top-short',
       'shipping_cost' => Free,
       'description' => 'White Long Sleeve Top and Short',
       'category_id' => 2,
       'brand_id' => 5,
       'image_path' => 'img/product/7.jpg'
   ]);

    Product::create([
       'name' => 'Pink Top and Jacket',
       'slug' => 'top-jacket',
       'price' => 60.00,
       'description' => 'Pink Top and Jacket',
       'category_id' => 2,
       'brand_id' => 5,
       'image_path' => 'img/product/8.jpg'
   ]);

     Product::create([
       'name' => 'Turquoise Jumpsuit',
       'slug' => 'jumsuit',
       'price' => 40,00,
       'description' => 'Turquoise Jumpsuit',
       'category_id' => 2,
       'brand_id' => 5,
       'image_path' => 'img/product/9.jpg'
   ]);

     Product::create([
       'name' => 'Orange Long Dress',
       'slug' => 'long-dress',
       'price' => 35.00,
       'description' => 'Orange Long Dress',
       'category_id' => 2,
       'brand_id' => 5,
       'image_path' => 'img/product/10.jpg'
   ]);

    Product::create([
       'name' => 'Pink Jacket',
       'slug' => 'jacket',
       'price' => 10.00,
       'description' => 'Pink Jacket',
       'category_id' => 2,
       'brand_id' => 5,
       'image_path' => 'img/product/11.jpg'
   ]);

     Product::create([
       'name' => 'Yellow Kurti and Pink Plazzo',
       'slug' => 'kurti',
       'price' => 25.00,
       'description' => 'Yellow Kurti and Pink Plazzo',
       'category_id' => 2,
       'brand_id' => 5,
       'image_path' => 'img/product/12.jpg'
   ]);
    }
}
