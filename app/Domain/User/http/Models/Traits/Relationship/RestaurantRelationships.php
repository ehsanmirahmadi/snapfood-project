<?php

namespace App\Domain\User\http\Models\Traits\Relationship;

use App\Domain\Menu\http\Models\Menu;
use Illuminate\Database\Eloquent\Relations\HasMany;

trait RestaurantRelationships
{
    public function menus(): HasMany
    {
        return $this->hasMany(Menu::class, 'restaurants_id');
    }
}
