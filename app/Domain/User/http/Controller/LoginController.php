<?php

namespace App\Domain\User\http\Controller;

use App\Domain\User\http\Controller\Requests\LoginRequest;
use App\Domain\User\http\Services\UserService;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
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
        $this->userService->loginUser($request->validated());
        return redirect()->intended(route('dashboard.user'));
    }

    public function logout(): RedirectResponse
    {
        $this->userService->logoutUser();
        return redirect()->route('login');
    }
}
