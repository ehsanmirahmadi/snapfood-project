<?php

namespace App\Domain\User\http\Models;

use App\Domain\User\http\Models\Enume\UserRoles;
use App\Domain\User\http\Models\Traits\Relationship\RestaurantRelationships;
use App\Domain\User\http\Models\Traits\Relationship\UserRelationships;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class RestaurantOwner extends Model
{
    protected $table = 'users';
    use RestaurantRelationships;

    protected static function booted()
    {
        static::addGlobalScope('restaurant', function ($query) {
            $query->where('role', UserRoles::RESTAURANT->value);
        });
    }
}
