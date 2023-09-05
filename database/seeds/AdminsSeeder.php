<?php

use App\Admin;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        Admin::truncate();
        Admin::insert([
            [
                'name' => 'Superadmin',
                'username' => 'superadmin',
                'email' => 'superadmin@gmail.com',
                'password' => bcrypt('superadmin'),
                'role_id' => 1,
                'is_active' => 1
            ],
            [
                'name' => 'Master',
                'username' => 'master',
                'email' => 'master@gmail.com',
                'password' => bcrypt('master'),
                'role_id' => 2,
                'is_active' => 1
            ],
        ]);
    }
}
