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
         ];
         
         foreach ($permissions as $permission) {
              Permission::create(['name' => $permission]);
         }
    }
}
