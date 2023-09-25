<?php

use App\BusinessHasPaket;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BusinessHasPaketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        BusinessHasPaket::truncate();
        BusinessHasPaket::insert([
            [
                'owner_business_id' => 1,
                'transaction_id' => 1,
                'expired_date' => Carbon::now()->addMonth(),
            ],
        ]);
    }
}