<?php

namespace App\Models;

use App\Enum\Roles;

class AdminSchool extends User
{
    protected $table = 'users';

    protected $fillable = [
        'name',
        'email',
        'password',
        'is_active',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected static function booted(): void
    {
        static::addGlobalScope('school_admin', function ($query) {
            $query->role(Roles::SchoolAdmin->value);
        });

        static::created(function (self $model) {
            $model->assignRole(Roles::SchoolAdmin->value);
        });
    }
}
