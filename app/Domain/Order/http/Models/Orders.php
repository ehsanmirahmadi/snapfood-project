<?php

namespace App\Domain\Order\http\Models;

use App\Domain\Order\http\Models\Traits\Relationship\OrderRelationships;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    use OrderRelationships;
    protected $table = 'orders';
    protected $guarded = [];

}
