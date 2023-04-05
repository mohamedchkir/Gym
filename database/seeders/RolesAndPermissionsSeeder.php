<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;
use App\Models\User;
use Illuminate\Support\Str;


class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Coach Permissions
        Permission::create(['name' => 'view Coachs']);
        Permission::create(['name' => 'create Coachs']);
        Permission::create(['name' => 'edit Coachs']);
        Permission::create(['name' => 'delete Coachs']);

        // Product Permissions
        Permission::create(['name' => 'view Product']);
        Permission::create(['name' => 'create Product']);
        Permission::create(['name' => 'edit Product']);
        Permission::create(['name' => 'delete Product']);

        // Programme Permissions
        Permission::create(['name' => 'view Programme']);
        Permission::create(['name' => 'create Programme']);
        Permission::create(['name' => 'edit Programme']);
        Permission::create(['name' => 'delete Programme']);


        // Material Permissions
        Permission::create(['name' => 'view Materials']);
        Permission::create(['name' => 'create Materials']);
        Permission::create(['name' => 'edit Materials']);
        Permission::create(['name' => 'delete Materials']);


        // Comments Permissions
        Permission::create(['name' => 'view Comments']);
        Permission::create(['name' => 'create Comments']);
        Permission::create(['name' => 'edit Comments']);
        Permission::create(['name' => 'delete Comments']);

        // Users Permissions
        Permission::create(['name' => 'view users']);
        Permission::create(['name' => 'create users']);
        Permission::create(['name' => 'edit users']);
        Permission::create(['name' => 'delete users']);

        // // Role Permissions
        // Permission::create(['name' => 'view roles']);
        // Permission::create(['name' => 'create roles']);
        // Permission::create(['name' => 'edit roles']);
        // Permission::create(['name' => 'delete roles']);
        // Permission::create(['name' => 'grant and revoke permission']);
        // Permission::create(['name' => 'assign role']);

        // Permission Permissions
        Permission::create(['name' => 'view permissions']);
        Permission::create(['name' => 'create permissions']);
        Permission::create(['name' => 'edit permissions']);
        Permission::create(['name' => 'delete permissions']);

        //payement Permissions
        Permission::create(['name' => 'make payements']);


        // Create Roles
        $adminRole = Role::create(['name' => 'admin']);
        $coachRole = Role::create(['name' => 'coach']);
        $userRole = Role::create(['name' => 'user']);



        // Assign Permissions to Roles
        $adminRole->syncPermissions(Permission::all());
        $coachRole->syncPermissions(['view Coachs', 'delete Coachs', 'edit Coachs','view Programme', 'create Programme' ,'edit Programme','delete Programme']);
        $userRole->syncPermissions(['view Coachs', 'view Programme','view Comments', 'create Comments', 'edit Comments', 'delete Comments', 'view Product','make payements']);
    }
}
