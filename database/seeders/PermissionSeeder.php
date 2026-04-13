<?php

namespace Database\Seeders;

use App\Enum\Roles;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        app(PermissionRegistrar::class)->forgetCachedPermissions();

        $allPermissions = Permission::query()
            ->where('guard_name', 'web')
            ->pluck('name')
            ->all();

        $superadminRole = Role::query()->firstOrCreate([
            'name' => Roles::Superadmin->value,
            'guard_name' => 'web',
        ]);

        $superadminRole->syncPermissions($allPermissions);

        app(PermissionRegistrar::class)->forgetCachedPermissions();
    }
}
