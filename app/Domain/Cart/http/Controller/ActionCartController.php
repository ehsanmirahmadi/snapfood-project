<?php

namespace App\Domain\Cart\http\Controller;

use App\Domain\Cart\http\Services\CartService;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Collection;


class ActionCartController extends Controller
{
    public function __construct( private CartService $CartService) {}

    public function createCart( $foodId)
    {
        $this->CartService->addCart($foodId);
        return redirect()->route('dashboard.cart');
    }

    public function deleteCart($foodId) : RedirectResponse
    {
        $this->CartService->deleteCart($foodId);
        return redirect()->route('dashboard.cart');
    }


}
