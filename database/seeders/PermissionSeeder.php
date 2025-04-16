<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class PermissionSeeder extends Seeder
{
    
    public function run(): void
    {
        $role_admin = Role::updateOrCreate(
            [
                'name' => 'admin'
            ],
            [
                'name' => 'admin'
            ]
        );
        $role_admkred = Role::updateOrCreate(
            [
                'name' => 'admkred'
            ],
            [
                'name' => 'admkred'
            ]
        );
       
        $role_hrd = Role::updateOrCreate(
            [
                'name' => 'hrd'
            ],
            [
                'name' => 'hrd'
            ]
        );
        // ===========================================

        $permission1 = Permission::updateOrCreate(
            [
                'name' => 'view_all'
            ],
            ['name' => 'view_all']
        );

        $permission2 = Permission::updateOrCreate(
            [
                'name' => 'view_profil'
            ],
            ['name' => 'view_profil']
        );

        $permission3 = Permission::updateOrCreate(
            [
                'name' => 'view_admkred'
            ],
            ['name' => 'view_admkred']
        );

        $permission4 = Permission::updateOrCreate(
            [
                'name' => 'view_admin'
            ],
            ['name' => 'view_admin']
        );

        // ====================================
        $role_admin->syncPermissions([$permission1, $permission2, $permission3, $permission3]);
        $role_hrd->syncPermissions([$permission2]);
        $role_admkred->syncPermissions([$permission1, $permission2, $permission3]);
        


        // ====================================
        $admkredUsers = User::whereIn('id', [232])->get();
        foreach ($admkredUsers as $admkredUser) {
            $admkredUser->assignRole('admkred');
        }

        $adminUsers = User::whereIn('id', [230,233])->get();
        foreach ($adminUsers as $adminUser) {
            $adminUser->assignRole('admin');
        }

        $hrdUsers = User::whereIn('id', [231])->get();
        foreach ($hrdUsers as $hrdUser) {
            $hrdUser->assignRole('hrd');
        }
    }
}
