<?php

use App\PaketType;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PaketTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        PaketType::truncate();
        PaketType::insert([
            [
                'name' => 'Bulanan',
            ],
        ]);
    }
}