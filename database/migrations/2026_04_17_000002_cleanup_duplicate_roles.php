<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up(): void
    {
        $staleRoles = ['admin sekolah', 'kepala sekolah', 'super_admin', 'Admin Sekolah', 'Kepala Sekolah'];

        $ids = DB::table('roles')->whereIn('name', $staleRoles)->pluck('id');

        DB::table('model_has_roles')->whereIn('role_id', $ids)->delete();
        DB::table('role_has_permissions')->whereIn('role_id', $ids)->delete();
        DB::table('roles')->whereIn('id', $ids)->delete();
    }

    public function down(): void {}
};
