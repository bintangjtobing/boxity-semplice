<?php

use App\AuthorizationType;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AuthorizationTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        AuthorizationType::truncate();
        $name = [
            'view',
            'add',
            'edit',
            'delete',
        ];

        for ($i=0; $i < count($name); $i++) {
            AuthorizationType::insert([
                [
                    'name' => $name[$i],
                ],
            ]);
        }
    }
}
