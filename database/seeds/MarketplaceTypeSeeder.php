<?php

use App\MarketplaceType;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MarketplaceTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        MarketplaceType::truncate();
        MarketplaceType::insert([
            [
                'name' => 'Shopee',
            ],
            [
                'name' => 'Tokopedia',
            ],
            [
                'name' => 'Lazada',
            ],
            [
                'name' => 'Bukalapak',
            ],
            [
                'name' => 'Tiktok',
            ],
        ]);
    }
}