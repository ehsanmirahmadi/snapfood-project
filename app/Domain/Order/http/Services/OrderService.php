<?php

namespace App\Domain\Order\http\Services;

use App\Domain\Cart\http\Models\Cart;
use App\Domain\Order\http\Interfaces\OrderServiceInterFace;
use App\Domain\Order\http\Models\Orders;
use App\Domain\User\http\Models\User;
use Illuminate\Support\Collection;

class OrderService implements OrderServiceInterface
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        //
    }

    public function createOrder($userSlug , $resId) :void
    {
        $user = User::where('slug', $userSlug)->where("role" , 0)->first();


           $cart = Cart::with('menus')
               ->where('user_id', $user->id)
               ->whereHas('menus', function ($query) use ($resId) {
                   $query->where('restaurants_id', $resId);
               })
               ->get()
               ->groupBy(function($item) {
                   return $item->menus->restaurants_id;
               });

        foreach ($cart as $restaurantId => $items) {
            $lastOrderId = Orders::where('user_id', $user->id)->max('order_id');
            $newOrderId = $lastOrderId ? $lastOrderId + 1 : 1;
            foreach ($items as $item) {
                Orders::create([
                    'order_id'       => $newOrderId,
                    'user_id'        => $user->id,
                    'restaurants_id' => $restaurantId,
                    'menu_id'        => $item->menu_id,
                    'quantity'       => $item->quantity,
                    'price'          => $item->menus->price,
                    'status'         => 0,
                ]);
            }

            Cart::whereIn('id', $items->pluck('id')->all())->delete();
        }
    }
    public function showOrderById($userId) : ?Collection
    {
        $orders = Orders::with(['menus' , 'users'])->where('user_id', $userId)
            ->orderBy('created_at', 'desc')
            ->get()
            ->groupBy('order_id');

        if ($orders->isEmpty()) {
            return null;
        }

        return $orders;
    }
    public function showOrderByIdRes($resId) : ?Collection
    {
        $orders = Orders::with(['menus' , 'users'])->where('restaurants_id', $resId)
            ->orderBy('status', 'asc')
            ->get()
            ->groupBy('order_id');

        if ($orders->isEmpty()) {
            return null;
        }

        return $orders;
    }

    public function editOrder(array $data): void
    {
        Orders::where('order_id', $data['order_id'])
            ->update(['status' => $data['status']]);
    }

}
