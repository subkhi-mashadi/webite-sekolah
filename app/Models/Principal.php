<?php

namespace App\Models;

use App\Enum\Roles;

class Principal extends User
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
        static::addGlobalScope('principal', function ($query) {
            $query->role(Roles::Principal->value);
        });

        static::created(function (self $model) {
            $model->assignRole(Roles::Principal->value);
        });
    }
}
