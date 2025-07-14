<?php

namespace App\Domain\Cart\http\Models\Traits\Relationship;


use App\Domain\Menu\http\Models\Menu;
use App\Domain\User\http\Models\User;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

trait CartRelationships
{
    public function menus():BelongsTo
    {
        return $this->belongsTo(Menu::class, 'menu_id');
    }

    public function users() : BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
