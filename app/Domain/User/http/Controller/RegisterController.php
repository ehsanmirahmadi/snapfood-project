<?php

namespace App\Domain\User\http\Controller;

use App\Domain\User\http\Controller\Requests\RegisterRequest;
use App\Domain\User\http\Services\UserService;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class RegisterController extends Controller
{
    public function __construct(private UserService $registrationService) {}

    public function showRegistrationForm(): View
    {
        return view('register');
    }
    public function register(RegisterRequest $request): RedirectResponse
    {
        $user = $this->registrationService->registerUser($request->validated());
        auth()->login($user);

        if ($user->role->value == 0) {
            return redirect()->intended(route('dashboard.user'));
        }
        elseif($user->role->value == 1)
            return redirect()->intended(route('dashboard.res'));
        else return redirect()->intended(route('login'));
    }
}
