<?php

namespace App\Domain\Menu\http\Controller;

use App\Domain\Menu\http\Controller\Requests\MenuRequset;
use App\Domain\Menu\http\Services\MenuService;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;

class ActionMenuController extends Controller
{
    public function __construct( private MenuService $MenuService) {}

    public function createMenu(MenuRequset $requset) : RedirectResponse
    {
        $this->MenuService->create($requset->validated());
        return redirect()->route('dashboard.res.menu' , ['slug' => $requset['slug']]);
    }

    public function editMenu(MenuRequset $requset , $slug , $menuId) : RedirectResponse
    {
        $this->MenuService->update($requset->validated() , $menuId);
        return redirect()->route('dashboard.res.menu' , ['slug' => $requset['slug']]);
    }
    public function deleteMenu($slug ,$menuId) : RedirectResponse
    {
        $this->MenuService->delete($menuId);
        return redirect()->route('dashboard.res.menu' , ['slug' => $slug]);
    }
}
