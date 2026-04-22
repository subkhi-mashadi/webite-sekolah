<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class SchoolSetting extends Model implements HasMedia
{
    use InteractsWithMedia, SoftDeletes;

    protected $fillable = [
        'name',
        'npsn',
        'status',
        'accreditation',
        'principal_name',
        'principal_nip',
        'principal_message',
        'address',
        'phone',
        'email',
        'website',
        'vision',
        'mission',
        'history',
        'social_media',
    ];

    protected $casts = [
        'social_media' => 'array',
    ];

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('logo')->singleFile();
        $this->addMediaCollection('principal_photo')->singleFile();
        $this->addMediaCollection('banner')->singleFile();
    }
}
