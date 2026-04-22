<?php

namespace App\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Foundation\Auth\User as AuthUser;

class PrincipalPolicy
{
    use HandlesAuthorization;

    public function viewAny(AuthUser $authUser): bool
    {
        return $authUser->can('ViewAny:Principal');
    }

    public function view(AuthUser $authUser): bool
    {
        return $authUser->can('View:Principal');
    }

    public function create(AuthUser $authUser): bool
    {
        return $authUser->can('Create:Principal');
    }

    public function update(AuthUser $authUser): bool
    {
        return $authUser->can('Update:Principal');
    }

    public function delete(AuthUser $authUser): bool
    {
        return $authUser->can('Delete:Principal');
    }

    public function deleteAny(AuthUser $authUser): bool
    {
        return $authUser->can('DeleteAny:Principal');
    }

    public function restore(AuthUser $authUser): bool
    {
        return $authUser->can('Restore:Principal');
    }

    public function forceDelete(AuthUser $authUser): bool
    {
        return $authUser->can('ForceDelete:Principal');
    }

    public function forceDeleteAny(AuthUser $authUser): bool
    {
        return $authUser->can('ForceDeleteAny:Principal');
    }

    public function restoreAny(AuthUser $authUser): bool
    {
        return $authUser->can('RestoreAny:Principal');
    }

    public function replicate(AuthUser $authUser): bool
    {
        return $authUser->can('Replicate:Principal');
    }

    public function reorder(AuthUser $authUser): bool
    {
        return $authUser->can('Reorder:Principal');
    }
}
