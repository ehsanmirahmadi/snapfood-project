<?php

namespace App\Domain\User\http\Models\Traits\Scope;

use App\Domain\User\http\Models\Enume\UserRoles;

trait UserScopes
{
    public function scopeCustomers($query)
    {
        return $query->where('role', UserRoles::CUSTOMER->value);
    }
    public function scopeRestaurants($query)
    {
        return $query->where('role', UserRoles::RESTAURANT->value);
    }
    public function scopeByCity($query, string $city)
    {
        return $query->where('city', $city);
    }
}
