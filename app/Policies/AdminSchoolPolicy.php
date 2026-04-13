<?php

namespace App\Policies;

use Illuminate\Foundation\Auth\User as AuthUser;
use Illuminate\Auth\Access\HandlesAuthorization;

class AdminSchoolPolicy
{
    use HandlesAuthorization;
    
    public function viewAny(AuthUser $authUser): bool
    {
        return $authUser->can('ViewAny:AdminSchool');
    }

    public function view(AuthUser $authUser): bool
    {
        return $authUser->can('View:AdminSchool');
    }

    public function create(AuthUser $authUser): bool
    {
        return $authUser->can('Create:AdminSchool');
    }

    public function update(AuthUser $authUser): bool
    {
        return $authUser->can('Update:AdminSchool');
    }

    public function delete(AuthUser $authUser): bool
    {
        return $authUser->can('Delete:AdminSchool');
    }

    public function deleteAny(AuthUser $authUser): bool
    {
        return $authUser->can('DeleteAny:AdminSchool');
    }

    public function restore(AuthUser $authUser): bool
    {
        return $authUser->can('Restore:AdminSchool');
    }

    public function forceDelete(AuthUser $authUser): bool
    {
        return $authUser->can('ForceDelete:AdminSchool');
    }

    public function forceDeleteAny(AuthUser $authUser): bool
    {
        return $authUser->can('ForceDeleteAny:AdminSchool');
    }

    public function restoreAny(AuthUser $authUser): bool
    {
        return $authUser->can('RestoreAny:AdminSchool');
    }

    public function replicate(AuthUser $authUser): bool
    {
        return $authUser->can('Replicate:AdminSchool');
    }

    public function reorder(AuthUser $authUser): bool
    {
        return $authUser->can('Reorder:AdminSchool');
    }

}