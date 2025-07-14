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
        $user = $this->userService->loginUser($request->validated());
        if ($user->role->value == 0) {
            return redirect()->intended(route('dashboard.user'));
        }
        elseif($user->role->value == 1)
            return redirect()->intended(route('dashboard.res'));
        else return redirect()->intended(route('login'));
    }

    public function logout(): RedirectResponse
    {
        $this->userService->logoutUser();
        return redirect()->route('login');
    }
}
