<?php

namespace App\Domain\Cart\http\Services;

use App\Domain\Cart\http\Interfaces\CartServiceInterFace;
use App\Domain\Cart\http\Models\Cart;
use App\Domain\Menu\http\Models\Menu;
use Illuminate\Support\Collection;

class CartService implements CartServiceInterface
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        //
    }
    public function addCart($foodId) :  void
    {
        $carts = Cart::where('menu_id', $foodId)->where('user_id' , auth()->user()['id'])->first() ;

        if (isset($carts)) {
           Cart::where('id', $carts->id)->where('user_id' , auth()->user()['id'])->update(['quantity' => $carts->quantity + 1]);
        }
        else {
            $cart = [
                'user_id' => auth()->user()['id'],
                'menu_id' => $foodId,
                'quantity' => 1,
            ];
            Cart::create($cart);
        }

    }
    public function cartUser($userId) : ?Collection
    {
        $cart = Cart::with(['menus', 'users'])
            ->where('user_id', $userId)
            ->get();

        if ($cart->isEmpty()) {
            return null;
        }
        $grouped = $cart->groupBy(function ($item) {
            return $item->menus->restaurants_id;
        });

        return $grouped;
    }

    public function deleteCart($foodId) : void
    {
        Cart::where('id', $foodId)->delete();

    }

}
