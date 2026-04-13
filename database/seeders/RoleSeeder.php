<?php

namespace Database\Seeders;

use App\Enum\Roles;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach (Roles::cases() as $role) {
            DB::table('roles')->updateOrInsert(
                ['name' => $role->value],
                ['guard_name' => 'web']
            );
        }
    }
}
