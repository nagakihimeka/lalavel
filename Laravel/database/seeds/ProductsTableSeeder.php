<?php

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
        DB::table('products')->insert([
            ['author' => 1,
             'title' => '一郎の作品一号',
              'color' => '1',
              'genre' => '2',
              'technique' => '1',
              'price' =>2000,
              ]
        ]);
    }
}
