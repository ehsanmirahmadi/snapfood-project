<?php

namespace App\Domain\User\http\Controller;

use App\Domain\Menu\http\Services\MenuService;
use App\Domain\User\http\Models\RestaurantOwner;
use App\Domain\User\http\Services\UserService;
use App\Http\Controllers\Controller;
use Illuminate\View\View;

class DashboardController extends Controller
{
    public function __construct(private UserService $DashboardService , private MenuService $MenuService) {}

    public function showUserDashboard() :View
    {
        return view('user-management' , ['user' => auth()->user()]);
    }

    public function showRestaurant() :View
    {
        $restaurants = RestaurantOwner::all() ;
        return view('user-restaurant',['restaurants' => $restaurants]);
    }

    public function ShowResDashboard() : View
    {
        return view('restaurant-management' , ['user' => auth()->user()]);
    }



}
