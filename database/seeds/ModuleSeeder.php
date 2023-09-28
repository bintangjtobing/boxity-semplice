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
                'menu_type' => 1,
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
                'menu_type' => 1,
                'is_shown' => 1
            ],
            [
                'module_group_id' => null,
                'name' => 'Url Bisnis',
                'order' => 2,
                'icon' => 'mail',
                'route' => 'url-bisnis',
                'type' => 2,
                'menu_type' => 2,
                'is_shown' => 1
            ],
            [
                'module_group_id' => null,
                'name' => 'Profil Owner',
                'order' => 3,
                'icon' => 'message-square',
                'route' => 'profile-owner',
                'type' => 2,
                'menu_type' => 2,
                'is_shown' => 1
            ],
            [
                'module_group_id' => null,
                'name' => 'Tentang Bisnis',
                'order' => 4,
                'icon' => 'shopping-cart',
                'route' => 'business-about',
                'type' => 2,
                'menu_type' => 2,
                'is_shown' => 1
            ],
            [
                'module_group_id' => null,
                'name' => 'Lokasi Bisnis',
                'order' => 5,
                'icon' => 'aperture',
                'route' => 'business-location',
                'type' => 2,
                'menu_type' => 2,
                'is_shown' => 1
            ],
            [
                'module_group_id' => null,
                'name' => 'Testimoni',
                'order' => 6,
                'icon' => 'target',
                'route' => 'testimoni',
                'type' => 2,
                'menu_type' => 2,
                'is_shown' => 1
            ],
            [
                'module_group_id' => null,
                'name' => 'Produk',
                'order' => 7,
                'icon' => 'calendar',
                'route' => 'product',
                'type' => 2,
                'menu_type' => 2,
                'is_shown' => 1
            ],
            [
                'module_group_id' => null,
                'name' => 'Kontak Bisnis',
                'order' => 8,
                'icon' => 'folder',
                'route' => 'business-contact',
                'type' => 2,
                'menu_type' => 2,
                'is_shown' => 1
            ],
            [
                'module_group_id' => null,
                'name' => 'Web & Social Media',
                'order' => 9,
                'icon' => 'user-check',
                'route' => 'social-media-site',
                'type' => 2,
                'menu_type' => 2,
                'is_shown' => 1
            ],
            [
                'module_group_id' => null,
                'name' => 'Marketplace Bisnis',
                'order' => 10,
                'icon' => 'file-text',
                'route' => 'business-marketplace',
                'type' => 2,
                'menu_type' => 2,
                'is_shown' => 1
            ],
            [
                'module_group_id' => null,
                'name' => 'Promo / Event',
                'order' => 11,
                'icon' => 'check-square',
                'route' => 'promo-or-event',
                'type' => 2,
                'menu_type' => 2,
                'is_shown' => 1
            ],
            // [
            //     'module_group_id' => 2,
            //     'name' => 'Role',
            //     'order' => null,
            //     'icon' => null,
            //     'route' => 'role',
            //     'type' => 2,
            // 'menu_type' => 2,
            //     'is_shown' => 1
            // ],
            // [
            //     'module_group_id' => 2,
            //     'name' => 'Admin',
            //     'order' => null,
            //     'icon' => null,
            //     'route' => 'admin',
            //     'type' => 2,
            // 'menu_type' => 2,
            //     'is_shown' => 1
            // ],
            // [
            //     'module_group_id' => 2,
            //     'name' => 'Authorization',
            //     'order' => null,
            //     'icon' => null,
            //     'route' => 'authorization',
            //     'type' => 2,
            // 'menu_type' => 2,
            //     'is_shown' => 1
            // ],
        ]);
    }
}
