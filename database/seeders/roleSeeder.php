<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role1 = Role:: create(['name'=>'Admin']);
        $role2 = Role:: create(['name'=>'Usuario']);

        $permission = Permission::create(['name' => 'admin.home'])->syncRoles([$role1,$role2]);
        $permission = Permission::create(['name' => 'admin.profile'])->syncRoles([$role2]);

    }
}
