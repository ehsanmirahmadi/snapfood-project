<?php

namespace App\Domain\Menu\http\Services;

use App\Domain\Menu\http\Interfaces\MenuServiceInterface;
use App\Domain\Menu\http\Models\Menu;
use App\Domain\User\http\Models\RestaurantOwner;
use Illuminate\Support\Collection;

class MenuService implements MenuServiceInterface
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        //
    }
    public function findBySlug(string $slug): Collection
    {
        $restaurantOwner = RestaurantOwner::where('slug', $slug)->first();
        return $restaurantOwner->menus;
    }

    public function create(array $data) : Menu
    {
        $Menu = [
           'restaurants_id' => $data['resId'],
            'name_food'=>$data['foodName'],
            'recipe' =>$data['recipe'],
            'quntity' =>$data['quntity'],
            'price'=>$data['price'],
        ];
         $menu = Menu::create($Menu);
        return $menu;
    }

    public function findMenuById($slug, $menuId): Menu
    {
        $menu = Menu::where('id','=', $menuId)->first();
        return $menu;
    }

    public function update(array $data , $menuId): void
    {
        $Menu = [
            'name_food'=> $data['foodName'],
            'recipe' => $data['recipe'],
            'quntity' => $data['quntity'],
            'price' => $data['price'],
        ];
         Menu::where('id' ,'=', $menuId)->update($Menu);
    }
    public function delete($menuId): void
    {
        Menu::where('id', '=' , $menuId)->delete();
    }
}
