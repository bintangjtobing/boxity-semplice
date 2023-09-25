<?php

use App\OwnerBusiness;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OwnerBusinessSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        OwnerBusiness::truncate();
        OwnerBusiness::insert([
            [
                'owner_id' => null,
                'url' => null,
                'photo' => null,
                'description' => null,
                'address' => null,
                'link_location' => null,
                'is_show_location' => null,
                'whatsapp_number' => null,
                'phone_number' => null,
                'email' => null,
                'admin_id' => 2
            ],
        ]);
    }
}