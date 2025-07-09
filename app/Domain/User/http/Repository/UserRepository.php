<?php

namespace App\Domain\User\http\Repository;

use App\Domain\User\http\Interfaces\UserRepositoryInterface;
use App\Domain\User\http\Models\User;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;

class UserRepository implements UserRepositoryInterface
{
    public function find(int $id): ?User
    {
        return User::find($id);
    }

    public function create(array $data): User
    {
        return User::create($data);
    }

    public function update(User $user, array $data): User
    {
        $user->update($data);
        return $user->fresh();
    }

    public function delete(int $id): bool
    {
        return User::destroy($id) > 0;
    }

    public function all(): Collection
    {
        return User::all();
    }

    public function findByEmail(string $email): ?User
    {
        return User::where('email', $email)->first();
    }

    public function findByMobile(string $mobile): ?User
    {
        return User::where('mobile', $mobile)->first();
    }
}
