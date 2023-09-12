<?php

use Illuminate\Database\Seeder;

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
            RoleSeeder::class,
            AdminSeeder::class,
            AuthorizationTypeSeeder::class,
            ModuleGroupSeeder::class,
            ModuleSeeder::class,
            AuthorizationSeeder::class,
        ]);
    }
}