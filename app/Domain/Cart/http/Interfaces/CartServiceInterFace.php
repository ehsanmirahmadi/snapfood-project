<?php

namespace App\Domain\Cart\http\Interfaces;

use Illuminate\Support\Collection;

interface CartServiceInterFace
{
    public function addCart($foodId) :  void;
    public function cartUser($userId) : ?Collection ;
    public function deleteCart($foodId) : void ;
 }
