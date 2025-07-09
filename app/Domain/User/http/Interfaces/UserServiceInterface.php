<?php

namespace App\Domain\User\http\Interfaces;

use App\Domain\User\http\Models\User;

interface UserServiceInterface
{
    public function registerUser(array $data): User;
    public function loginUser(array $data): ?User;
    public function logoutUser(): void ;
    public function updateUserProfile(int $userId, array $data): User;
    public function deleteUser(int $userId): bool;
    public function getUserById(int $userId): ?User;
    public function getAllUsers(array $filters = []);
    public function changeUserRole(int $userId, string $role): User;
    public function incrementPurchases(int $userId): User;
}
