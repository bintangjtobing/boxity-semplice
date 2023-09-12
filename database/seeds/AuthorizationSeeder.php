<?php

use App\Module;
use App\Authorization;
use App\AuthorizationType;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AuthorizationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        Authorization::truncate();
        $type = [1,2];
        foreach ($type as $t) {
            $module = Module::where('type', $t)->get();
            $auth_type = AuthorizationType::get();
            foreach ($module as $m) {
                foreach ($auth_type as $a) {
                    Authorization::insert([
                        [
                            'module_id' => $m->id,
                            'authorization_type_id' => $a->id,
                            'role_id' => $t,
                            'type' => $t
                        ]
                    ]);
                }
            }
        }
    }
}