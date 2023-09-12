<?php

use App\ModuleGroup;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ModuleGroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        ModuleGroup::truncate();
        ModuleGroup::insert([
            //superadmin module group
            [
                'name' => 'User & Authorization',
                'order' => 1,
                'icon' => 'settings',
                'type' => 1,
            ],
            // //admin module group
            // [
            //     'name' => 'User & Authorization',
            //     'order' => 1,
            //     'icon' => 'settings',
            //     'type' => 2,
            // ],
        ]);
    }
}