<?php

namespace App\Domain\Menu\http\Controller;

use App\Domain\Menu\http\Services\MenuService;
use App\Http\Controllers\Controller;
use Illuminate\View\View;

class ShowMenuController extends Controller
{
    public function __construct( private MenuService $MenuService) {}
    public  function showUserMenu($slug) :View
    {
        $menu = $this->MenuService->findBySlug($slug);
        return view('user-menu' , ['menus' => $menu]);
    }

    public function ShowResMenu($slug) :View
    {
        $menu = $this->MenuService->findBySlug($slug);
        return view('res-menu' , ['menus' => $menu]);
    }

    public function ShowCreateMenu($slug) :View
    {
        return view('create-menu');
    }

    public function ShowEditMenu( $menuId , $slug) : View
    {
        $menu = $this->MenuService->findMenuById($menuId , $slug);
        return view('create-menu' , ['menus' => $menu]);
    }
}
