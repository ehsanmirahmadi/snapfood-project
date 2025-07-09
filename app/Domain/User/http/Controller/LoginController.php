<?php

namespace App\Domain\User\http\Controller;

use App\Domain\User\http\Controller\Requests\LoginRequest;
use App\Domain\User\http\Services\UserService;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class LoginController extends Controller
{
    public function __construct(private UserService $userService) {}

    public function showLoginForm(): View
    {
        return view('login');
    }

    public function login(LoginRequest $request): RedirectResponse
    {
        $this->userService->loginUser($request);
        return redirect()->intended(route('user-management'));
    }

    public function logout(): RedirectResponse
    {
        $this->authService->logout();
        return redirect()->route('home');
    }
}
