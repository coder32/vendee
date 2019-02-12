<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        $this->call(PermissionRoles::class);
        //$this->call(ModelSeeder::class);
        //$this->call(UserSeeder::class);

        Model::reguard();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
