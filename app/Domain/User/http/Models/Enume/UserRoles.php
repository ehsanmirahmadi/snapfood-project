<?php

namespace App\Domain\User\http\Models\Enume;

enum UserRoles: string
{
    case CUSTOMER = '0';
    case RESTAURAN= '1';


    public function label(): string
    {
        return match($this) {
            self::CUSTOMER => 'مشتری',
            self::RESTAURAN=> 'صاحب رستوران',
        };
    }
}
