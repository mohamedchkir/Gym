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
        $viewCoachs = Permission::create(['name' => 'view Coachs']);
        $createCoachs = Permission::create(['name' => 'create Coachs']);
        $editCoachs = Permission::create(['name' => 'edit Coachs']);
        $deleteCoachs = Permission::create(['name' => 'delete Coachs']);

        // Product Permissions
        $viewProduct = Permission::create(['name' => 'view Product']);
        $createProduct = Permission::create(['name' => 'create Product']);
        $editProduct = Permission::create(['name' => 'edit Product']);
        $deleteProduct = Permission::create(['name' => 'delete Product']);

        // Programme Permissions
        $viewProgramme = Permission::create(['name' => 'view Programme']);
        $createProgramme = Permission::create(['name' => 'create Programme']);
        $editProgramme = Permission::create(['name' => 'edit Programme']);
        $deleteProgramme = Permission::create(['name' => 'delete Programme']);


        // Material Permissions
        $viewMaterials = Permission::create(['name' => 'view Materials']);
        $createMaterials = Permission::create(['name' => 'create Materials']);
        $editMaterials = Permission::create(['name' => 'edit Materials']);
        $deleteMaterials = Permission::create(['name' => 'delete Materials']);


        // Comments Permissions
        $viewComments = Permission::create(['name' => 'create Comments']);
        $createComments = Permission::create(['name' => 'create Comments']);
        $editComments = Permission::create(['name' => 'edit Comments']);
        $deleteComments = Permission::create(['name' => 'delete Comments']);

        // Users Permissions
        $viewusers = Permission::create(['name' => 'view users']);
        $createusers = Permission::create(['name' => 'create users']);
        $editusers = Permission::create(['name' => 'edit users']);
        $deleteusers = Permission::create(['name' => 'delete users']);

        // // Role Permissions
        // $viewroles = Permission::create(['name' => 'view roles']);
        // $createroles = Permission::create(['name' => 'create roles']);
        // $editroles = Permission::create(['name' => 'edit roles']);
        // $deleteroles = Permission::create(['name' => 'delete roles']);
        // $grantand = Permission::create(['name' => 'grant and revoke permission']);
        // $assignrole = Permission::create(['name' => 'assign role']);

        // Permission Permissions
        $viewpermissions = Permission::create(['name' => 'view permissions']);
        $createpermissions = Permission::create(['name' => 'create permissions']);
        $editpermissions = Permission::create(['name' => 'edit permissions']);
        $deletepermissions = Permission::create(['name' => 'delete permissions']);

        //payement Permissions
        $makepayements = Permission::create(['name' => 'make payements']);

        //Cart Permissions
        $viewcart = Permission::create(['name' => 'view cart']);
        $addtocart = Permission::create(['name' => 'add to cart']);
        $deletefromcart = Permission::create(['name' => 'delete from cart']);
        $updatecart = Permission::create(['name' => 'update cart']);


        // Create Roles
        $adminRole = Role::create(['name' => 'admin']);
        $coachRole = Role::create(['name' => 'coach']);
        $userRole = Role::create(['name' => 'user']);

        // statistics
        $viewstatistics = Permission::create(['name' => 'view statistics']);




        // Assign Permissions to Roles
        $adminRole->syncPermissions(Permission::all());
        $coachRole->syncPermissions([$viewCoachs , $deleteCoachs , $editCoachs, $viewProgramme ,$createProgramme , $editProgramme ,$deleteProgramme]);
        $userRole->syncPermissions([$viewCoachs , $viewProgramme, $viewComments , $createComments , $editComments , $deleteComments , $viewProduct, $makepayements, $viewcart, $addtocart, $deletefromcart, $updatecart]);
    }
}
