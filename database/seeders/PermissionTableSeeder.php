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
            // 'tiket_penerbangan-list',
            // 'tiket_penerbangan-create',
            // 'tiket_penerbangan-edit',
            // 'tiket_penerbangan-delete',
            'kamar_hotel-list',
            'kamar_hotel-create',
            'kamar_hotel-edit',
            'kamar_hotel-delete',
            // 'role-create',
            // 'role-list',
            // 'role-edit',
            // 'role-delete'
         ];
         
         foreach ($permissions as $permission) {
              Permission::create(['name' => $permission]);
         }
    }
}
