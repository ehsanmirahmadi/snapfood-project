<?php

namespace App\Domain\User\http\Models\Traits\Scope;

use App\Domain\User\http\Models\Enume\UserRoles;

trait UserScopes
{
    /**
     * اسکوپ برای کاربران عادی
     */
    public function scopeCustomers($query)
    {
        return $query->where('role', UserRoles::CUSTOMER->value);
    }

    /**
     * اسکوپ برای رستوران‌ها
     */
    public function scopeRestaurants($query)
    {
        return $query->where('role', UserRoles::RESTAURAN->value);
    }

    /**
     * اسکوپ فیلتر بر اساس شهر
     */
    public function scopeByCity($query, string $city)
    {
        return $query->where('city', $city);
    }

    /**
     * اسکوپ کاربران با بیشترین خرید
     */
    public function scopeTopCustomers($query, int $limit = 10)
    {
        return $query->customers()
            ->orderByDesc('Number_purchases')
            ->limit($limit);
    }
}
