<?php

use Illuminate\Database\Seeder;
use \App\User;
use \App\ModelHasPermission;
use \App\ModelHasRole;
use \App\Http\Controllers\Utils;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        ModelHasPermission::truncate();
        ModelHasRole::truncate();

        $userData = [];

        array_push($userData, [ //id=1
            'name'     => 'Admin',
            'email'    => 'admin@email.com',
            'password' => Utils::setPassword('12345'),
            'role_id' => '1',
        ]);
       /* array_push($userData, [ //id=1
            'name'     => 'manager',
            'email'    => 'manager@email.com',
            'password' => Utils::setPassword('1234'),
            'role_id' => '2',
        ]);

        array_push($userData, [ //id=1
            'name'     => 'moderator',
            'email'    => 'moderator@email.com',
            'password' => Utils::setPassword('123'),
            'role_id' => '3',
        ]);*/


        User::insert($userData);


        $modelHasPermission = [];
        $modelHasRoles = [];


        //Set super admin permissions


        //Model id is basically a role id
        array_push($modelHasPermission, [
            'permission_id'     => '1',
            'model_type'    => 'default',
            'model_id' => '1',
        ]);

        array_push($modelHasPermission, [
            'permission_id'     => '2',
            'model_type'    => 'default',
            'model_id' => '1',
        ]);

        array_push($modelHasPermission, [
            'permission_id'     => '3',
            'model_type'    => 'default',
            'model_id' => '1',
        ]);
        array_push($modelHasPermission, [
            'permission_id'     => '4',
            'model_type'    => 'default',
            'model_id' => '1',
        ]);
        array_push($modelHasPermission, [
            'permission_id'     => '5',
            'model_type'    => 'default',
            'model_id' => '1',
        ]);
        array_push($modelHasPermission, [
            'permission_id'     => '6',
            'model_type'    => 'default',
            'model_id' => '1',
        ]);
        array_push($modelHasPermission, [
            'permission_id'     => '7',
            'model_type'    => 'default',
            'model_id' => '1',
        ]);
        array_push($modelHasPermission, [
        'permission_id'     => '8',
        'model_type'    => 'default',
        'model_id' => '1',
        ]);
        array_push($modelHasPermission, [
        'permission_id'     => '9',
        'model_type'    => 'default',
        'model_id' => '1',
        ]);
        array_push($modelHasPermission, [
            'permission_id'     => '10',
            'model_type'    => 'default',
            'model_id' => '1',
        ]);array_push($modelHasPermission, [
        'permission_id'     => '11',
        'model_type'    => 'default',
        'model_id' => '1',
        ]);
        array_push($modelHasPermission, [
        'permission_id'     => '12',
        'model_type'    => 'default',
        'model_id' => '1',
        ]);
        array_push($modelHasPermission, [
            'permission_id'     => '13',
            'model_type'    => 'default',
            'model_id' => '1',
        ]);
        array_push($modelHasPermission, [
            'permission_id'     => '14',
            'model_type'    => 'default',
            'model_id' => '1',
        ]);
        array_push($modelHasPermission, [
            'permission_id'     => '15',
            'model_type'    => 'default',
            'model_id' => '1',
        ]);
        array_push($modelHasPermission, [
            'permission_id'     => '16',
            'model_type'    => 'default',
            'model_id' => '1',
        ]);
        array_push($modelHasPermission, [
            'permission_id'     => '17',
            'model_type'    => 'default',
            'model_id' => '1',
        ]);
        array_push($modelHasPermission, [
            'permission_id'     => '18',
            'model_type'    => 'default',
            'model_id' => '1',
        ]);
        array_push($modelHasPermission, [
        'permission_id'     => '19',
        'model_type'    => 'default',
        'model_id' => '1',
        ]);
        array_push($modelHasPermission, [
            'permission_id'     => '20',
            'model_type'    => 'default',
            'model_id' => '1',
        ]);
        array_push($modelHasPermission, [
            'permission_id'     => '21',
            'model_type'    => 'default',
            'model_id' => '1',
        ]);
        array_push($modelHasPermission, [
            'permission_id'     => '22',
            'model_type'    => 'default',
            'model_id' => '1',
        ]);
        array_push($modelHasPermission, [
            'permission_id'     => '23',
            'model_type'    => 'default',
            'model_id' => '1',
        ]);

        ModelHasPermission::insert($modelHasPermission); //set admin permissions


        array_push($modelHasRoles, [
            'role_id'     => '1',
            'model_type'    => 'default',
            'model_id' => '1',
        ]);

       // ModelHasRole::insert($modelHasRoles);




    }
}
