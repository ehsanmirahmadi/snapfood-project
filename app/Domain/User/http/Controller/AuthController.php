<?php

namespace App\Domain\User\http\Controller;

use App\Domain\User\http\Services\UserService;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function __construct(private UserService $userService) {}
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);
        $user = $this->userService->loginUser($credentials);
        if (is_null($user)) {
            return response()->json([
                'message' => 'ایمیل یا رمز عبور اشتباه است'
            ], 401);
        }
        return response()->json([
            'message' => 'ثبت نام موفق بود',
            'user' => $user
        ]);
    }

    public function register(Request $request)
    {
        $credentials = $request->validate([
            'firstName' => 'required|string|max:255',
            'lastName' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6',
            'mobile' => 'required',
            'age' => 'required|integer|min:2',
            'address' => 'required',
            'city' => 'required',
            'role'=> 'required',
        ]);
        $user = $this->userService->registerUser($credentials);

        if (is_null($user)) {
            return response()->json([
                'message' => 'ایمیل یا رمز عبور اشتباه است'
            ], 401);
        }
        return response()->json([
            'message' => 'ورود موفقیت‌آمیز بود',
            'user' => $user
        ]);
    }
}
