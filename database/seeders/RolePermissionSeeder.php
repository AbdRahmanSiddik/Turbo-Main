<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        $permissions = [
            'view dashboard',
            'manage users',
            'manage courses',
            'enroll course',
            'approve enrollments'
        ];

        foreach ($permissions as $permission) {
            Permission::firstOrCreate(['name' => $permission]);
        }

        $admin = Role::firstOrCreate(['name' => 'admin']);
        $mentor = Role::firstOrCreate(['name' => 'mentor']);
        $operator = Role::firstOrCreate(['name' => 'operator']);
        $peserta = Role::firstOrCreate(['name' => 'peserta']);

        $admin->givePermissionTo(['view dashboard', 'manage users', 'manage courses', 'approve enrollments']);
        $mentor->givePermissionTo(['view dashboard', 'manage courses']);
        $operator->givePermissionTo(['view dashboard', 'approve enrollments']);
        $peserta->givePermissionTo(['view dashboard', 'enroll course']);
    }
}
