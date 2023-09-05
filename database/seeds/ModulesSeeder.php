<?php

use App\Module;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ModulesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        Module::truncate();
        Module::insert([
            //superadmin module
            [
                'module_group_id' => null,
                'name' => 'Dashboard',
                'order' => 1,
                'icon' => 'home',
                'route' => 'dashboard',
                'type' => 1,
                'is_shown' => 1
            ],
            //admin module
            [
                'module_group_id' => null,
                'name' => 'Dashboard',
                'order' => 1,
                'icon' => 'home',
                'route' => 'dashboard',
                'type' => 2,
                'is_shown' => 1
            ],
            [
                'module_group_id' => 2,
                'name' => 'Role',
                'order' => null,
                'icon' => null,
                'route' => 'role',
                'type' => 2,
                'is_shown' => 1
            ],
            [
                'module_group_id' => 2,
                'name' => 'Admin',
                'order' => null,
                'icon' => null,
                'route' => 'admin',
                'type' => 2,
                'is_shown' => 1
            ],
            [
                'module_group_id' => 2,
                'name' => 'Authorization',
                'order' => null,
                'icon' => null,
                'route' => 'authorization',
                'type' => 2,
                'is_shown' => 1
            ],
        ]);
    }
}
