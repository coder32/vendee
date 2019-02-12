<?php

use Illuminate\Database\Seeder;
use \App\Roles;
use \App\Permissions;
use \App\RoleHasPermission;
class PermissionRoles extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        Permissions::truncate();
        Roles::truncate();
        RoleHasPermission::truncate();


        $permissionData = [];

        //Freelancer Permissions

        array_push($permissionData, [ //id=1
            'name'     => 'viewFreelancer',
            'guard_name'    => 'viewFreelancer',
        ]);

        array_push($permissionData, [//id=2
            'name'     => 'approveFreelancerAccount',
            'guard_name'    => 'approveFreelancerAccount',
        ]);

        array_push($permissionData, [//id=3
            'name'     => 'disableFreelancer',
            'guard_name'    => 'disableFreelancer',
        ]);
        array_push($permissionData, [//id=4
            'name'     => 'deleteFreelancer',
            'guard_name'    => 'deleteFreelancer',
        ]);


        //Employer Permission
        array_push($permissionData, [ //id=1
            'name'     => 'viewEmployer',
            'guard_name'    => 'viewEmployer',
        ]);

        array_push($permissionData, [//id=2
            'name'     => 'approveEmployerAccount',
            'guard_name'    => 'approveEmployerAccount',
        ]);

        array_push($permissionData, [//id=3
            'name'     => 'disableEmployer',
            'guard_name'    => 'disableEmployer',
        ]);
        array_push($permissionData, [//id=4
            'name'     => 'deleteEmployer',
            'guard_name'    => 'deleteEmployer',
        ]);


        //Moderator Permission
        array_push($permissionData, [ //id=1
            'name'     => 'viewModerator',
            'guard_name'    => 'viewModerator',
        ]);

        array_push($permissionData, [//id=2
            'name'     => 'approveModeratorAccount',
            'guard_name'    => 'approveModeratorAccount',
        ]);

        array_push($permissionData, [//id=3
            'name'     => 'disableModerator',
            'guard_name'    => 'disableModerator',
        ]);
        array_push($permissionData, [//id=4
            'name'     => 'deleteModerator',
            'guard_name'    => 'deleteModerator',
        ]);


        //Manager Permission
        array_push($permissionData, [ //id=1
            'name'     => 'viewManager',
            'guard_name'    => 'viewManager',
        ]);

        array_push($permissionData, [//id=2
            'name'     => 'approveManagerAccount',
            'guard_name'    => 'approveManagerAccount',
        ]);

        array_push($permissionData, [//id=3
            'name'     => 'disableManager',
            'guard_name'    => 'disableManager',
        ]);
        array_push($permissionData, [//id=4
            'name'     => 'deleteManager',
            'guard_name'    => 'deleteManager',
        ]);


        //Roles Permission

        array_push($permissionData, [ //id=1
            'name'     => 'changeUserRole',
            'guard_name'    => 'changeUserRole',
        ]);


        //Testimonial Permission
        array_push($permissionData, [ //id=1
            'name'     => 'viewTestimonial',
            'guard_name'    => 'viewTestimonial',
        ]);

        array_push($permissionData, [//id=2
            'name'     => 'addTestimonial',
            'guard_name'    => 'addTestimonial',
        ]);

        array_push($permissionData, [//id=3
            'name'     => 'deleteTestimonial',
            'guard_name'    => 'deleteTestimonial',
        ]);


        //Project Permission

        array_push($permissionData, [//id=7
            'name'     => 'viewProject',
            'guard_name'    => 'viewProject',
        ]);

        array_push($permissionData, [//id=8
            'name'     => 'approveProject',
            'guard_name'    => 'approveProject',
        ]);

        array_push($permissionData, [//id=9
            'name'     => 'disableProject',
            'guard_name'    => 'disableProject',
        ]);
        array_push($permissionData, [//id=10
            'name'     => 'deleteProject',
            'guard_name'    => 'deleteProject',
        ]);


        //Bid Permissions

        array_push($permissionData, [//id=15
            'name'     => 'viewBid',
            'guard_name'    => 'viewBid',
        ]);

        array_push($permissionData, [//id=17
            'name'     => 'deleteBid',
            'guard_name'    => 'deleteBid',
        ]);

        array_push($permissionData, [//id=18
            'name'     => 'disableBid',
            'guard_name'    => 'disableBid',
        ]);

        //Comments Permission

        array_push($permissionData, [//id=20
            'name'     => 'editComment',
            'guard_name'    => 'editComment',
        ]);

        array_push($permissionData, [//id=21
            'name'     => 'viewComment',
            'guard_name'    => 'viewComment',
        ]);
        array_push($permissionData, [//id=22
            'name'     => 'deleteComment',
            'guard_name'    => 'deleteComment',
        ]);
        array_push($permissionData, [//id=23
            'name'     => 'replyComment',
            'guard_name'    => 'replyComment',
        ]);

        //Setting Permission

        array_push($permissionData, [//id=15
            'name'     => 'Roles',
            'guard_name'    => 'Roles',
        ]);

        array_push($permissionData, [//id=17
            'name'     => 'Accounts',
            'guard_name'    => 'Accounts',
        ]);

        array_push($permissionData, [//id=17
            'name'     => 'depositMoney',
            'guard_name'    => 'depositMoney',
        ]);

        array_push($permissionData, [//id=18
            'name'     => 'Notification',
            'guard_name'    => 'Notification',
        ]);



        array_push($permissionData, [//id=18
            'name'     => 'Testimonial',
            'guard_name'    => 'Testimonial',
        ]);

        array_push($permissionData, [//id=18
            'name'     => 'Logs',
            'guard_name'    => 'Logs',
        ]);


        array_push($permissionData, [//id=18
            'name'     => 'viewFeed',
            'guard_name'    => 'viewFeed',
        ]);

        array_push($permissionData, [//id=18
            'name'     => 'postFeed',
            'guard_name'    => 'postFeed',
        ]);

        array_push($permissionData, [//id=18
            'name'     => 'disableFeed',
            'guard_name'    => 'postFeed',
        ]);
        array_push($permissionData, [//id=18
            'name'     => 'deleteFeed',
            'guard_name'    => 'postFeed',
        ]);

        array_push($permissionData, [//id=18
            'name'     => 'viewSkill',
            'guard_name'    => 'viewSkill',
        ]);

        array_push($permissionData, [//id=18
            'name'     => 'addSkill',
            'guard_name'    => 'addSkill',
        ]);

        array_push($permissionData, [//id=18
            'name'     => 'deleteSkill',
            'guard_name'    => 'deleteSkill',
        ]);


        array_push($permissionData, [//id=18
            'name'     => 'disableSkill',
            'guard_name'    => 'disableSkill',
        ]);



        array_push($permissionData, [//id=18
            'name'     => 'viewCategory',
            'guard_name'    => 'viewCategory',
        ]);

        array_push($permissionData, [//id=18
            'name'     => 'insertCategory',
            'guard_name'    => 'insertCategory',
        ]);

        array_push($permissionData, [//id=18
            'name'     => 'deleteCategory',
            'guard_name'    => 'deleteCategory',
        ]);






        $roleData = [];

        array_push($roleData, [//id=1
            'name'     => 'admin',
            'guard_name'    => 'admin',
        ]);
        array_push($roleData, [//id=2
            'name'     => 'manager',
            'guard_name'    => 'manager',
        ]);
        array_push($roleData, [//id=3
            'name'     => 'moderator',
            'guard_name'    => 'moderator',
        ]);
        array_push($roleData, [//id=4
            'name'     => 'employer',
            'guard_name'    => 'employer',
        ]);
        array_push($roleData, [//id=5
            'name'     => 'employee',
            'guard_name'    => 'employee',
        ]);


        $rolePermissionData = [];

        //Admin Permissions
        array_push($rolePermissionData, [
            'permission_id'     => '1',
            'role_id'    => '1',
        ]);
        array_push($rolePermissionData, [
            'permission_id'     => '2',
            'role_id'    => '1',
        ]);
        array_push($rolePermissionData, [
            'permission_id'     => '3',
            'role_id'    => '1',
        ]);
        array_push($rolePermissionData, [
            'permission_id'     => '4',
            'role_id'    => '1',
        ]);
        array_push($rolePermissionData, [
            'permission_id'     => '5',
            'role_id'    => '1',
        ]);
        array_push($rolePermissionData, [
            'permission_id'     => '6',
            'role_id'    => '1',
        ]);
        array_push($rolePermissionData, [
            'permission_id'     => '7',
            'role_id'    => '1',
        ]);
        array_push($rolePermissionData, [
            'permission_id'     => '8',
            'role_id'    => '1',
        ]);
        array_push($rolePermissionData, [
            'permission_id'     => '9',
            'role_id'    => '1',
        ]);
        array_push($rolePermissionData, [
            'permission_id'     => '10',
            'role_id'    => '1',
        ]);
        array_push($rolePermissionData, [
            'permission_id'     => '11',
            'role_id'    => '1',
        ]);
        array_push($rolePermissionData, [
            'permission_id'     => '12',
            'role_id'    => '1',
        ]);
        array_push($rolePermissionData, [
            'permission_id'     => '13',
            'role_id'    => '1',
        ]);
        array_push($rolePermissionData, [
            'permission_id'     => '14',
            'role_id'    => '1',
        ]);
        array_push($rolePermissionData, [
            'permission_id'     => '15',
            'role_id'    => '1',
        ]);
        array_push($rolePermissionData, [
            'permission_id'     => '16',
            'role_id'    => '1',
        ]);
        array_push($rolePermissionData, [
            'permission_id'     => '17',
            'role_id'    => '1',
        ]);
        array_push($rolePermissionData, [
            'permission_id'     => '18',
            'role_id'    => '1',
        ]);
        array_push($rolePermissionData, [
            'permission_id'     => '19',
            'role_id'    => '1',
        ]);
        array_push($rolePermissionData, [
            'permission_id'     => '20',
            'role_id'    => '1',
        ]);
        array_push($rolePermissionData, [
            'permission_id'     => '21',
            'role_id'    => '1',
        ]);
        array_push($rolePermissionData, [
            'permission_id'     => '22',
            'role_id'    => '1',
        ]);
        array_push($rolePermissionData, [
            'permission_id'     => '23',
            'role_id'    => '1',
        ]);


        //Managers Permissions
        array_push($rolePermissionData, [
            'permission_id'     => '1',
            'role_id'    => '2',
        ]);
        array_push($rolePermissionData, [
            'permission_id'     => '2',
            'role_id'    => '2',
        ]);
        array_push($rolePermissionData, [
            'permission_id'     => '3',
            'role_id'    => '2',
        ]);
        array_push($rolePermissionData, [
            'permission_id'     => '4',
            'role_id'    => '2',
        ]);
        array_push($rolePermissionData, [
            'permission_id'     => '5',
            'role_id'    => '2',
        ]);
        array_push($rolePermissionData, [
            'permission_id'     => '6',
            'role_id'    => '2',
        ]);
        array_push($rolePermissionData, [
            'permission_id'     => '7',
            'role_id'    => '2',
        ]);
        array_push($rolePermissionData, [
            'permission_id'     => '8',
            'role_id'    => '2',
        ]);
        array_push($rolePermissionData, [
            'permission_id'     => '9',
            'role_id'    => '2',
        ]);
        array_push($rolePermissionData, [
            'permission_id'     => '10',
            'role_id'    => '2',
        ]);
        array_push($rolePermissionData, [
            'permission_id'     => '11',
            'role_id'    => '2',
        ]);
        array_push($rolePermissionData, [
            'permission_id'     => '12',
            'role_id'    => '2',
        ]);
        array_push($rolePermissionData, [
            'permission_id'     => '13',
            'role_id'    => '2',
        ]);
        array_push($rolePermissionData, [
            'permission_id'     => '14',
            'role_id'    => '2',
        ]);
        array_push($rolePermissionData, [
            'permission_id'     => '15',
            'role_id'    => '2',
        ]);
        array_push($rolePermissionData, [
            'permission_id'     => '16',
            'role_id'    => '2',
        ]);
        array_push($rolePermissionData, [
            'permission_id'     => '17',
            'role_id'    => '2',
        ]);
        array_push($rolePermissionData, [
            'permission_id'     => '18',
            'role_id'    => '2',
        ]);
        array_push($rolePermissionData, [
            'permission_id'     => '19',
            'role_id'    => '2',
        ]);
        array_push($rolePermissionData, [
            'permission_id'     => '20',
            'role_id'    => '2',
        ]);
        array_push($rolePermissionData, [
            'permission_id'     => '21',
            'role_id'    => '2',
        ]);
        array_push($rolePermissionData, [
            'permission_id'     => '22',
            'role_id'    => '2',
        ]);
        array_push($rolePermissionData, [
            'permission_id'     => '23',
            'role_id'    => '2',
        ]);


        //Moderator Permission
        array_push($rolePermissionData, [
            'permission_id'     => '1',
            'role_id'    => '3',
        ]);
        array_push($rolePermissionData, [
            'permission_id'     => '2',
            'role_id'    => '3',
        ]);
        array_push($rolePermissionData, [
            'permission_id'     => '3',
            'role_id'    => '3',
        ]);
        array_push($rolePermissionData, [
            'permission_id'     => '4',
            'role_id'    => '3',
        ]);
        array_push($rolePermissionData, [
            'permission_id'     => '5',
            'role_id'    => '3',
        ]);
        array_push($rolePermissionData, [
            'permission_id'     => '6',
            'role_id'    => '3',
        ]);
        array_push($rolePermissionData, [
            'permission_id'     => '7',
            'role_id'    => '3',
        ]);
        array_push($rolePermissionData, [
            'permission_id'     => '8',
            'role_id'    => '3',
        ]);
        array_push($rolePermissionData, [
            'permission_id'     => '9',
            'role_id'    => '3',
        ]);
        array_push($rolePermissionData, [
            'permission_id'     => '10',
            'role_id'    => '3',
        ]);
        array_push($rolePermissionData, [
            'permission_id'     => '11',
            'role_id'    => '3',
        ]);
        array_push($rolePermissionData, [
            'permission_id'     => '12',
            'role_id'    => '3',
        ]);
        array_push($rolePermissionData, [
            'permission_id'     => '13',
            'role_id'    => '3',
        ]);
        array_push($rolePermissionData, [
            'permission_id'     => '14',
            'role_id'    => '3',
        ]);
        array_push($rolePermissionData, [
            'permission_id'     => '15',
            'role_id'    => '3',
        ]);
        array_push($rolePermissionData, [
            'permission_id'     => '16',
            'role_id'    => '3',
        ]);
        array_push($rolePermissionData, [
            'permission_id'     => '17',
            'role_id'    => '3',
        ]);
        array_push($rolePermissionData, [
            'permission_id'     => '18',
            'role_id'    => '3',
        ]);
        array_push($rolePermissionData, [
            'permission_id'     => '19',
            'role_id'    => '3',
        ]);
        array_push($rolePermissionData, [
            'permission_id'     => '20',
            'role_id'    => '3',
        ]);
        array_push($rolePermissionData, [
            'permission_id'     => '21',
            'role_id'    => '3',
        ]);
        array_push($rolePermissionData, [
            'permission_id'     => '22',
            'role_id'    => '3',
        ]);
        array_push($rolePermissionData, [
            'permission_id'     => '23',
            'role_id'    => '3',
        ]);

        //Employer Permission
        array_push($rolePermissionData, [
            'permission_id'     => '1',
            'role_id'    => '4',
        ]);
        array_push($rolePermissionData, [
            'permission_id'     => '2',
            'role_id'    => '4',
        ]);
        array_push($rolePermissionData, [
            'permission_id'     => '3',
            'role_id'    => '4',
        ]);
        array_push($rolePermissionData, [
            'permission_id'     => '4',
            'role_id'    => '4',
        ]);
        array_push($rolePermissionData, [
            'permission_id'     => '5',
            'role_id'    => '4',
        ]);
        array_push($rolePermissionData, [
            'permission_id'     => '6',
            'role_id'    => '4',
        ]);
        array_push($rolePermissionData, [
            'permission_id'     => '7',
            'role_id'    => '4',
        ]);
        array_push($rolePermissionData, [
            'permission_id'     => '8',
            'role_id'    => '4',
        ]);
        array_push($rolePermissionData, [
            'permission_id'     => '9',
            'role_id'    => '4',
        ]);
        array_push($rolePermissionData, [
            'permission_id'     => '10',
            'role_id'    => '4',
        ]);
        array_push($rolePermissionData, [
            'permission_id'     => '11',
            'role_id'    => '4',
        ]);
        array_push($rolePermissionData, [
            'permission_id'     => '12',
            'role_id'    => '4',
        ]);
        array_push($rolePermissionData, [
            'permission_id'     => '13',
            'role_id'    => '4',
        ]);
        array_push($rolePermissionData, [
            'permission_id'     => '14',
            'role_id'    => '4',
        ]);
        array_push($rolePermissionData, [
            'permission_id'     => '15',
            'role_id'    => '4',
        ]);
        array_push($rolePermissionData, [
            'permission_id'     => '16',
            'role_id'    => '4',
        ]);
        array_push($rolePermissionData, [
            'permission_id'     => '17',
            'role_id'    => '4',
        ]);
        array_push($rolePermissionData, [
            'permission_id'     => '18',
            'role_id'    => '4',
        ]);
        array_push($rolePermissionData, [
            'permission_id'     => '19',
            'role_id'    => '4',
        ]);
        array_push($rolePermissionData, [
            'permission_id'     => '20',
            'role_id'    => '4',
        ]);
        array_push($rolePermissionData, [
            'permission_id'     => '21',
            'role_id'    => '4',
        ]);
        array_push($rolePermissionData, [
            'permission_id'     => '22',
            'role_id'    => '4',
        ]);
        array_push($rolePermissionData, [
            'permission_id'     => '23',
            'role_id'    => '4',
        ]);

        //Employee Permission
        array_push($rolePermissionData, [
            'permission_id'     => '1',
            'role_id'    => '5',
        ]);
        array_push($rolePermissionData, [
            'permission_id'     => '2',
            'role_id'    => '5',
        ]);
        array_push($rolePermissionData, [
            'permission_id'     => '3',
            'role_id'    => '5',
        ]);
        array_push($rolePermissionData, [
            'permission_id'     => '4',
            'role_id'    => '5',
        ]);
        array_push($rolePermissionData, [
            'permission_id'     => '5',
            'role_id'    => '5',
        ]);
        array_push($rolePermissionData, [
            'permission_id'     => '6',
            'role_id'    => '5',
        ]);
        array_push($rolePermissionData, [
            'permission_id'     => '7',
            'role_id'    => '5',
        ]);
        array_push($rolePermissionData, [
            'permission_id'     => '8',
            'role_id'    => '5',
        ]);
        array_push($rolePermissionData, [
            'permission_id'     => '9',
            'role_id'    => '5',
        ]);
        array_push($rolePermissionData, [
            'permission_id'     => '10',
            'role_id'    => '5',
        ]);
        array_push($rolePermissionData, [
            'permission_id'     => '11',
            'role_id'    => '5',
        ]);
        array_push($rolePermissionData, [
            'permission_id'     => '12',
            'role_id'    => '5',
        ]);
        array_push($rolePermissionData, [
            'permission_id'     => '13',
            'role_id'    => '5',
        ]);
        array_push($rolePermissionData, [
            'permission_id'     => '14',
            'role_id'    => '5',
        ]);
        array_push($rolePermissionData, [
            'permission_id'     => '15',
            'role_id'    => '5',
        ]);
        array_push($rolePermissionData, [
            'permission_id'     => '16',
            'role_id'    => '5',
        ]);
        array_push($rolePermissionData, [
            'permission_id'     => '17',
            'role_id'    => '5',
        ]);
        array_push($rolePermissionData, [
            'permission_id'     => '18',
            'role_id'    => '5',
        ]);
        array_push($rolePermissionData, [
            'permission_id'     => '19',
            'role_id'    => '5',
        ]);
        array_push($rolePermissionData, [
            'permission_id'     => '20',
            'role_id'    => '5',
        ]);
        array_push($rolePermissionData, [
            'permission_id'     => '21',
            'role_id'    => '5',
        ]);
        array_push($rolePermissionData, [
            'permission_id'     => '22',
            'role_id'    => '5',
        ]);
        array_push($rolePermissionData, [
            'permission_id'     => '23',
            'role_id'    => '5',
        ]);


        Permissions::insert($permissionData);
        Roles::insert($roleData);
        RoleHasPermission::insert($rolePermissionData);
    }
}
