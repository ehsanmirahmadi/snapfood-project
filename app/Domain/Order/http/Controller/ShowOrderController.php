<?php

namespace App\Domain\Order\http\Controller;

use App\Domain\Order\http\Services\OrderService;
use App\Http\Controllers\Controller;
use Illuminate\View\View;

class ShowOrderController extends Controller
{
    public function __construct( private OrderService $CartService) {}
    public function showOrderUser() : View
    {
        $userId = auth()->user()['id'];
        $orders = $this->CartService->showOrderById($userId);
        return view('user-order' , ['orders' => $orders]);
    }

    public function showOrderRes() : View
    {
        $resId = auth()->user()['id'];
        $orders = $this->CartService->showOrderByIdRes($resId);
        return view('res-order' , ['orders' => $orders]);
    }
}
