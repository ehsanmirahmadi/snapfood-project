<?php

namespace App\Domain\Cart\http\Controller;

use App\Domain\Cart\http\Services\CartService;
use App\Http\Controllers\Controller;
use Illuminate\View\View;


class ShowCartController extends Controller
{
    public function __construct( private CartService $CartService) {}

    public function showCart() : View
    {
        $userId = auth()->user()['id'];
        $cartUser = $this->CartService->cartUser($userId);
        return view('user-cart' , ['cartUser' => $cartUser]);
    }
}
