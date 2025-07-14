<?php

namespace App\Domain\User\http\Models\Enume;

enum UserRoles: string
{
    case CUSTOMER = '0';
    case RESTAURANT= '1';
}
