<?php

use Illuminate\Database\Seeder;
use \App\UserModel;

class ModelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        UserModel::truncate();
        $userModelData = [];

        array_push($userModelData, [
            'model_name'     => 'admin',
        ]);

        array_push($userModelData, [
            'model_name'     => 'manager',
        ]);


        array_push($userModelData, [
            'model_name'     => 'moderator',
        ]);


        array_push($userModelData, [
            'model_name'     => 'employer',
        ]);


        array_push($userModelData, [
            'model_name'     => 'employee',
        ]);

        UserModel::insert($userModelData);
    }
}
