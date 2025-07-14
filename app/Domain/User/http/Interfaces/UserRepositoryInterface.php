<?php

namespace App\Domain\User\http\Interfaces;

use App\Domain\User\http\Models\User;
use Illuminate\Support\Collection;


interface UserRepositoryInterface
{
    public function create(array $data): User;
}
