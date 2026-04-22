<?php

namespace App\Models;

use App\Enum\Roles;

class Superadmin extends User
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
        static::addGlobalScope('superadmin', function ($query) {
            $query->role(Roles::Superadmin->value);
        });

        static::created(function (self $model) {
            $model->assignRole(Roles::Superadmin->value);
        });
    }
}
