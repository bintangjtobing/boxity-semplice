<?php

use Illuminate\Database\Seeder;
use Database\Seeders\RolesSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            RolesSeeder::class,
            AdminSeeder::class,
            AuthorizationTypeSeeder::class,
            ModuleGroupSeeder::class,
            ModuleSeeder::class,
            AuthorizationSeeder::class,
            PaketTypeSeeder::class,
            MarketplaceTypeSeeder::class,
            SocialMediaTypeSeeder::class,
            ProductTypeSeeder::class,
        ]);
    }
}
