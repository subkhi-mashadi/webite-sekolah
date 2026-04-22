<?php

namespace App\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Foundation\Auth\User as AuthUser;

class SuperadminPolicy
{
    use HandlesAuthorization;

    public function viewAny(AuthUser $authUser): bool
    {
        return $authUser->can('ViewAny:Superadmin');
    }

    public function view(AuthUser $authUser): bool
    {
        return $authUser->can('View:Superadmin');
    }

    public function create(AuthUser $authUser): bool
    {
        return $authUser->can('Create:Superadmin');
    }

    public function update(AuthUser $authUser): bool
    {
        return $authUser->can('Update:Superadmin');
    }

    public function delete(AuthUser $authUser): bool
    {
        return $authUser->can('Delete:Superadmin');
    }

    public function deleteAny(AuthUser $authUser): bool
    {
        return $authUser->can('DeleteAny:Superadmin');
    }

    public function restore(AuthUser $authUser): bool
    {
        return $authUser->can('Restore:Superadmin');
    }

    public function forceDelete(AuthUser $authUser): bool
    {
        return $authUser->can('ForceDelete:Superadmin');
    }

    public function forceDeleteAny(AuthUser $authUser): bool
    {
        return $authUser->can('ForceDeleteAny:Superadmin');
    }

    public function restoreAny(AuthUser $authUser): bool
    {
        return $authUser->can('RestoreAny:Superadmin');
    }

    public function replicate(AuthUser $authUser): bool
    {
        return $authUser->can('Replicate:Superadmin');
    }

    public function reorder(AuthUser $authUser): bool
    {
        return $authUser->can('Reorder:Superadmin');
    }
}
