<?php

namespace App\Domain\User\http\Interfaces;

use App\Domain\User\http\Models\User;
use Nette\Utils\Paginator;
use Ramsey\Collection\Collection;

interface UserRepositoryInterface
{
    public function find(int $id): ?User;
    public function create(array $data): User;
    public function update(User $user, array $data): User;
    public function delete(int $id): bool;
    public function all(): Collection;
    public function findByEmail(string $email): ?User;
    public function findByMobile(string $mobile): ?User;
}
