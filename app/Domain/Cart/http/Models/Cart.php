<?php

namespace App\Domain\Cart\http\Models;

use App\Domain\Cart\http\Models\Traits\Relationship\CartRelationships;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use CartRelationships ;
    protected $table = 'cart';
    protected $guarded = [];
}
