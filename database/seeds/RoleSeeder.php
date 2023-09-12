<?php

use App\Role;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        Role::truncate();
        Role::insert([
            [
                'id' => 1,
                'name' => 'superadmin',
                'type' => 1,
            ],
            [
                'id' => 2,
                'name' => 'master',
                'type' => 2,
            ],
        ]);
    }
}