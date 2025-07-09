<?php

namespace App\Domain\User\http\Controller;

use App\Domain\User\http\Services\UserService;
use App\Http\Controllers\Controller;
use Illuminate\View\View;

class DashboardController extends Controller
{
    public function __construct(private UserService $DashboardService) {}

    public function showUserDashboard() :View
    {
        $user =  auth()->user();
        return view('user-management' , ['user' => $user]);
    }

    public function showRestaurant() :View
    {
        return view('restaurant');
    }
}
