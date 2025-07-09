<?php

namespace App\Domain\User\http\Models;

use App\Domain\User\http\Models\Enume\UserRoles;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class RestaurantOwner extends Model
{
    protected $table = 'users';

}
