<?php

namespace App\Domain\Order\http\Controller;

use App\Domain\Order\http\Services\OrderService;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class ActionOrderController extends Controller
{

    public function __construct( private OrderService $CartService) {}
    public function createOrderUser($userSlug ,$resId)
    {
        $this->CartService->createOrder($userSlug , $resId);
        return redirect()->route('dashboard.user')->with('success', 'سفارش با موفقیت ثبت شد.');
    }

    public function editOrderRes(Request $request)
    {
        $validated = $request->validate([
            'order_id' => 'required',
            'status'   => 'required|in:0,1,2',
        ]);
        $this->CartService->editOrder($validated);
        return redirect()->route('dashboard.res.order');
    }
}
