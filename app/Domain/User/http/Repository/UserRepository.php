<?php

namespace App\Domain\User\http\Repository;

use App\Domain\User\http\Interfaces\UserRepositoryInterface;
use App\Domain\User\http\Models\User;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;

class UserRepository implements UserRepositoryInterface
{

    public function create(array $data): User
    {
        return User::create($data);
    }
}
