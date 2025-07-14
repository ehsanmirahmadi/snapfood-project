<?php

namespace App\Domain\User\http\Services;



use App\Domain\User\http\Interfaces\UserRepositoryInterface;
use App\Domain\User\http\Interfaces\UserServiceInterface;
use App\Domain\User\http\Models\Enume\UserRoles;
use \App\Domain\User\http\Models\User;
use App\Domain\User\Enums\UserRole;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserService implements UserServiceInterface
{
    public function __construct( private UserRepositoryInterface $userRepository ) {}
    public function registerUser(array $data): User
    {
        $userData = [
            'name' => $data['firstName'].$data['lastName'],
            'slug' => Str::slug($data['firstName'] . " ".$data['lastName'] , "-"),
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'mobile' => $data['mobile'],
            'city' => $data['city'],
            'address' => $data['address'],
            'age'  => $data['age'],
            'role' => $data['role'] ,
        ];
        return $this->userRepository->create($userData);
    }

    public function loginUser(array $data): ?User
    {
        $user = User::where('email', $data['email'])->first();
        if (!$user || !Hash::check($data['password'], $user->password)) {
            return null;
        }
        Auth::login($user);
        return $user;
    }
    public function logoutUser(): void
    {
        auth()->logout();
    }
}
