<?php

use App\Paket;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PaketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        Paket::truncate();
        Paket::insert([
            [
                'name' => 'Free Trial',
                'duration' => 1,
                'price' => 0,
                'paket_type_id' => 1,
                'max_upload_product' => 3,
                'max_upload_testimonial' => 3
            ],
        ]);
    }
}
