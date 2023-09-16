<?php

use App\Module;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ModuleSeeder extends Seeder
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
                'module_group_id' => null,
                'name' => 'Url Bisnis',
                'order' => 2,
                'icon' => 'message',
                'route' => 'url-bisnis',
                'type' => 2,
                'is_shown' => 1
            ],
            [
                'module_group_id' => null,
                'name' => 'Profil Owner',
                'order' => 3,
                'icon' => 'message',
                'route' => 'profile-owner',
                'type' => 2,
                'is_shown' => 1
            ],
            [
                'module_group_id' => null,
                'name' => 'Tentang Bisnis',
                'order' => 4,
                'icon' => 'cart',
                'route' => 'business-about',
                'type' => 2,
                'is_shown' => 1
            ],
            [
                'module_group_id' => null,
                'name' => 'Lokasi Bisnis',
                'order' => 5,
                'icon' => 'message',
                'route' => 'business-location',
                'type' => 2,
                'is_shown' => 1
            ],
            [
                'module_group_id' => null,
                'name' => 'Testimoni',
                'order' => 6,
                'icon' => 'message',
                'route' => 'testimoni',
                'type' => 2,
                'is_shown' => 1
            ],
            [
                'module_group_id' => null,
                'name' => 'Produk',
                'order' => 7,
                'icon' => 'message',
                'route' => 'product',
                'type' => 2,
                'is_shown' => 1
            ],
            [
                'module_group_id' => null,
                'name' => 'Kontak Bisnis',
                'order' => 8,
                'icon' => 'message',
                'route' => 'business-contact',
                'type' => 2,
                'is_shown' => 1
            ],
            [
                'module_group_id' => null,
                'name' => 'Web & Social Media',
                'order' => 9,
                'icon' => 'message',
                'route' => 'social-media',
                'type' => 2,
                'is_shown' => 1
            ],
            [
                'module_group_id' => null,
                'name' => 'Marketplace Bisnis',
                'order' => 10,
                'icon' => 'message',
                'route' => 'business-marketplace',
                'type' => 2,
                'is_shown' => 1
            ],
            [
                'module_group_id' => null,
                'name' => 'Promo / Event',
                'order' => 11,
                'icon' => 'message',
                'route' => 'promo-or-event',
                'type' => 2,
                'is_shown' => 1
            ],
            // [
            //     'module_group_id' => 2,
            //     'name' => 'Role',
            //     'order' => null,
            //     'icon' => null,
            //     'route' => 'role',
            //     'type' => 2,
            //     'is_shown' => 1
            // ],
            // [
            //     'module_group_id' => 2,
            //     'name' => 'Admin',
            //     'order' => null,
            //     'icon' => null,
            //     'route' => 'admin',
            //     'type' => 2,
            //     'is_shown' => 1
            // ],
            // [
            //     'module_group_id' => 2,
            //     'name' => 'Authorization',
            //     'order' => null,
            //     'icon' => null,
            //     'route' => 'authorization',
            //     'type' => 2,
            //     'is_shown' => 1
            // ],
        ]);
    }
}
