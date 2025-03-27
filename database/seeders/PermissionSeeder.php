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
        $role_dokter = Role::updateOrCreate(
            [
                'name' => 'dokter'
            ],
            [
                'name' => 'dokter'
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

        $permission = Permission::updateOrCreate(
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
                'name' => 'view_penilaian'
            ],
            ['name' => 'view_penilaian']
        );

        $permission4 = Permission::updateOrCreate(
            [
                'name' => 'view_hrd'
            ],
            ['name' => 'view_hrd']
        );

        $permission5 = Permission::updateOrCreate(
            [
                'name' => 'view_dokter'
            ],
            ['name' => 'view_dokter']
        );

        // ====================================
        $role_admin->givePermissionTo($permission);
        $role_admin->givePermissionTo($permission2);
        $role_admin->givePermissionTo($permission3);
        $role_admin->givePermissionTo($permission4);

        $role_hrd->givePermissionTo($permission);
        $role_hrd->givePermissionTo($permission2);
        $role_hrd->givePermissionTo($permission4);

        $role_dokter->givePermissionTo($permission2);
        $role_dokter->givePermissionTo($permission5);


        // ====================================
        $dokterUsers = User::whereIn('id', [161, 162, 163, 164, 165, 166, 167, 168, 169, 170, 171, 172, 173, 174, 175, 176, 177, 178, 179, 180, 181, 182, 183, 184, 185, 186, 187, 188, 189, 190, 191, 192, 193, 194, 195, 196, 197, 198, 199, 200, 201, 202, 203, 204, 205, 206, 207, 208, 209, 210, 211, 212, 213, 214, 215, 216, 217, 218, 219, 220, 221, 222, 223, 224, 225, 226, 227, 228, 229])->get();
        foreach ($dokterUsers as $dokterUser) {
            $dokterUser->assignRole('dokter');
        }

        $adminUsers = User::whereIn('id', [230])->get();
        foreach ($adminUsers as $adminUser) {
            $adminUser->assignRole('admin');
        }

        $hrdUsers = User::whereIn('id', [231])->get();
        foreach ($hrdUsers as $hrdUser) {
            $hrdUser->assignRole('hrd');
        }
    }
}
