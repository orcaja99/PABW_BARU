<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permissions = [
<<<<<<< HEAD
            'tiket_penerbangan-list',
            'tiket_penerbangan-create',
            'tiket_penerbangan-edit',
            'tiket_penerbangan-delete',
            'role-list',
            'role-create',
            'role-edit',
            'role-delete',
            'kamar-hotel-list',
            'kamar-hotel-create',
            'kamar-hotel-edit',
            'kamar-hotel-delete',
=======
            'kamar_hotel-list',
            'kamar_hotel-create',
            'kamar_hotel-edit',
            'kamar_hotel-delete',
>>>>>>> 8942a5971afb73e9264d24269faa9c5b8196e75f
         ];
         
         foreach ($permissions as $permission) {
              Permission::create(['name' => $permission]);
         }
    }
}
