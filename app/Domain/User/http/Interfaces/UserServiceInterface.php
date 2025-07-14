<?php

namespace App\Domain\User\http\Interfaces;

use App\Domain\User\http\Models\User;

interface UserServiceInterface
{
    public function registerUser(array $data): User;
    public function loginUser(array $data): ?User;
    public function logoutUser(): void ;
}
