<?php

namespace App\Domain\User\http\Models;

use App\Domain\User\http\Models\Enume\UserRoles;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Customer extends Model
{
    protected $table = 'users';

    protected static function booted()
    {
        static::addGlobalScope('customer', function ($builder) {
            $builder->where('role', UserRoles::CUSTOMER->value);
        });
    }

    public function orders(): HasMany
    {
        return $this->hasMany(Order::class, 'user_id');
    }

    public function getLoyaltyLevelAttribute()
    {
        if ($this->Number_purchases > 50) return 'gold';
        if ($this->Number_purchases > 20) return 'silver';
        return 'bronze';
    }
}
