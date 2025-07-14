<?php

namespace App\Domain\User\http\Models\Traits\Relationship;

use App\Domain\Menu\http\Models\Menu;
use App\Domain\Order\http\Models\Orders;
use Illuminate\Database\Eloquent\Relations\HasMany;

trait UserRelationships
{
    public function menus(): HasMany
    {
        return $this->hasMany(Menu::class, 'user_id');
    }
    /////////////////////
    public function orders(): HasMany
    {
        return $this->hasMany(Orders::class, 'user_id');
    }
}
