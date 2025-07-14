<?php

namespace App\Domain\User\http\Models;


use App\Domain\User\http\Models\Enume\UserRoles;
use App\Domain\User\http\Models\Traits\Relationship\UserRelationships;
use App\Domain\User\http\Models\Traits\Scope\UserScopes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable, UserScopes , UserRelationships;

    protected $fillable = [
        'name',
        'slug',
        'email',
        'mobile',
        'city',
        'address',
        'age',
        'role',
        'img_url',
        'Number_purchases',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
        'role' => UserRoles::class,
        'age' => 'integer',
        'Number_purchases' => 'integer',
    ];
}
