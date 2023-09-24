<?php

use App\ProductType;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        ProductType::truncate();
        ProductType::insert([
            [
                'name' => 'Produk Trending',
            ],
            [
                'name' => 'Produk Umum',
            ],
            [
                'name' => 'Produk Best Seller',
            ],
        ]);
    }
}