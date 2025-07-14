@extends("_master.customer")
@section("extra_css" )
    .cart-item {
    border-bottom: 1px solid #e0e0e0;
    padding-bottom: 20px;
    margin-bottom: 20px;
    }

    .cart-summary {
    border: 1px solid #e0e0e0;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .cart-summary .total-price {
    font-size: 1.5rem;
    font-weight: bold;
    }

    .btn-checkout {
    background-color: #28a745;
    color: white;
    }

    .btn-checkout:hover {
    background-color: #218838;
    }

    .product-img {
    max-width: 100px;
    object-fit: cover;
    }
@endsection
@section("main")

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 mt-5">
        <div class="container mt-5">
            <div class="row">
                <!-- Shopping Cart Items -->
                <div class="col-lg-12">
                    <h3>Your Shopping Cart</h3>
                    @if(isset($cartUser))
                        @foreach($cartUser as $res_id => $items)
                            @php
                                $totla = 0;
                                $res_name = \App\Domain\User\http\Models\User::where('id' , $items[0]->menus->restaurants_id)->first()->name;
                            @endphp
                            <hr>
                                <h4>{{$res_name}}</h4>
                            <hr>
                            @foreach($items as $cart)
                                @php
                                    $totla =$totla + ($cart->quantity * $cart->menus->price );
                                @endphp
                                    <!-- Cart Item 1 -->
                                <div class="cart-item d-flex justify-content-between">
                                    <div class="d-flex">
                                        <img src="{{asset($cart->menus->img_url)}}" alt="Product" class="product-img me-3">
                                        <div>
                                            <h5>{{$cart->menus->name_food}}</h5>
                                            <small > {{$res_name}}</small>
                                            <hr>
                                            <strong>{{$cart->quantity}}</strong>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-column justify-content-between">
                                        <span>${{$cart->quantity * $cart->menus->price}}</span>
                                        <a href="{{route('dashboard.delete-cart' , ['foodId' => $cart->id]) }}" class="btn btn-sm btn-danger">Remove</a>
                                    </div>
                                </div>
                            @endforeach
                            <div class="cart-summary">
                                <h4>Cart Summary : {{$res_name}}</h4>
                                <ul class="list-unstyled">
                                    <li class="d-flex justify-content-between">
                                        <span class="total-price">Total:</span>
                                        <span class="total-price">${{$totla ?? ""}}</span>
                                    </li>
                                </ul>
                                <a href="{{route('dashboard.user.order.create' , ['userSlug' => auth()->user()['slug'] , 'resId' => $res_id ])}}" class="btn btn-checkout w-100">Checkout</a>
                            </div>
                        @endforeach
                    @else
                        <h1> no products at cart</h1>
                    @endif

                </div>
            </div>
        </div>
    </main>

@endsection
