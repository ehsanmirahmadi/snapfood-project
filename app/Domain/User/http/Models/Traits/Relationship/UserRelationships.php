<?php

namespace App\Domain\User\http\Models\Traits\Relationship;

use Illuminate\Database\Eloquent\Relations\HasMany;

trait UserRelationships
{
    /**
     * رابطه سفارشات کاربر (برای مشتریان)
     */
    public function orders(): HasMany
    {
        return $this->hasMany(Order::class, 'user_id');
    }

    /**
     * رابطه منوهای رستوران (برای صاحبان رستوران)
     */
    public function menus(): HasMany
    {
        return $this->hasMany(Menu::class, 'user_id');
    }

    /**
     * رابطه سفارشات تحویلی (برای پیک‌ها)
     */
    public function deliveries(): HasMany
    {
        return $this->hasMany(Order::class, 'delivery_man_id');
    }
}
