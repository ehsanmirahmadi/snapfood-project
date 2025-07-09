<?php

namespace App\Domain\User\http\Services;



use App\Domain\User\http\Interfaces\UserRepositoryInterface;
use App\Domain\User\http\Interfaces\UserServiceInterface;
use App\Domain\User\http\Models\Enume\UserRoles;
use \App\Domain\User\http\Models\User;
use App\Domain\User\Enums\UserRole;
use Illuminate\Support\Facades\Hash;

class UserService implements UserServiceInterface
{
    public function __construct(
        private UserRepositoryInterface $userRepository
    ) {}

    public function registerUser(array $data): User
    {
        $userData = [
            'name' => $data['firstName'].$data['lastName'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'mobile' => $data['mobile'],
            'city' => $data['city'],
            'address' => $data['address'],
            'age'  => $data['age'],
            'role' => 0 ,
        ];
        return $this->userRepository->create($userData);
    }

    public function loginUser(array $data): User
    {
        $data["password"] = Hash::make($data["password"]);
        return $this->userRepository->findByLogin($data);
    }

    public function updateUserProfile(int $userId, array $data): User
    {
        $user = $this->userRepository->find($userId);

        if (!$user) {
            throw new \Exception('User not found');
        }

        $updateData = $data->toArray();

        if ($data->password) {
            $updateData['password'] = Hash::make($data->password);
        }

        return $this->userRepository->update($user, $updateData);
    }

    public function deleteUser(int $userId): bool
    {
        return $this->userRepository->delete($userId);
    }

    public function getUserById(int $userId): ?User
    {
        return $this->userRepository->find($userId);
    }

    public function getAllUsers(array $filters = [])
    {
        // می‌توانید فیلترها را اینجا پیاده‌سازی کنید
        return $this->userRepository->paginate();
    }

    public function changeUserRole(int $userId, string $role): User
    {
        $user = $this->userRepository->find($userId);

        if (!$user) {
            throw new \Exception('User not found');
        }

        return $this->userRepository->update($user, [
            'role' => UserRoles::from($role)->value
        ]);
    }

    public function incrementPurchases(int $userId): User
    {
        $user = $this->userRepository->find($userId);

        if (!$user) {
            throw new \Exception('User not found');
        }

        return $this->userRepository->update($user, [
            'Number_purchases' => $user->Number_purchases + 1
        ]);
    }
}
