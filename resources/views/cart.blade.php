@extends("_master.app")
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
                <div class="col-lg-8">
                    <h3>Your Shopping Cart</h3>

                    <!-- Cart Item 1 -->
                    <div class="cart-item d-flex justify-content-between">
                        <div class="d-flex">
                            <img src="https://via.placeholder.com/100" alt="Product" class="product-img me-3">
                            <div>
                                <h5>Product Name 1</h5>
                                <p class="text-muted">Description of the product.</p>
                                <input type="number" class="form-control w-25" value="1">
                            </div>
                        </div>
                        <div class="d-flex flex-column justify-content-between">
                            <span>$25.99</span>
                            <button class="btn btn-sm btn-danger">Remove</button>
                        </div>
                    </div>

                    <!-- Cart Item 2 -->
                    <div class="cart-item d-flex justify-content-between">
                        <div class="d-flex">
                            <img src="https://via.placeholder.com/100" alt="Product" class="product-img me-3">
                            <div>
                                <h5>Product Name 2</h5>
                                <p class="text-muted">Another product description.</p>
                                <input type="number" class="form-control w-25" value="2">
                            </div>
                        </div>
                        <div class="d-flex flex-column justify-content-between">
                            <span>$19.99</span>
                            <button class="btn btn-sm btn-danger">Remove</button>
                        </div>
                    </div>

                </div>

                <!-- Cart Summary -->
                <div class="col-lg-4">
                    <div class="cart-summary">
                        <h4>Cart Summary</h4>
                        <ul class="list-unstyled">
                            <li class="d-flex justify-content-between">
                                <span>Subtotal:</span>
                                <span>$45.98</span>
                            </li>
                            <li class="d-flex justify-content-between">
                                <span>Shipping:</span>
                                <span>$5.00</span>
                            </li>
                            <li class="d-flex justify-content-between">
                                <span class="total-price">Total:</span>
                                <span class="total-price">$50.98</span>
                            </li>
                        </ul>
                        <button class="btn btn-checkout w-100">Proceed to Checkout</button>
                    </div>
                </div>
            </div>
        </div>
    </main>

@endsection
