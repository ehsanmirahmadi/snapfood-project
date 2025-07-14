<?php

namespace App\Domain\Order\http\Interfaces;

use Illuminate\Support\Collection;

interface OrderServiceInterFace
{
    public function createOrder($userSlug , $resId) :void ;
    public function showOrderById($userId) : ?Collection;
    public function showOrderByIdRes($resId) : ?Collection;
    public function editOrder(array $data) : void ;

}
