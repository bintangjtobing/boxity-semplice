<?php

use Carbon\Carbon;
use App\Transaction;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        Transaction::truncate();
        Transaction::insert([
            [
                'price' => 0,
                'value' => 1,
                'duration_type' => 'Bulanan',
                'transaction_date' => Carbon::now(),
                'status' => 1,
                'paket_id' => 1
            ],
        ]);
    }
}