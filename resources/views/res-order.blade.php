@extends("_master.restaurant")
@section("extra_css")
    #progressbar-1 {
    color: #455A64;
    }

    #progressbar-1 li {
    list-style-type: none;
    font-size: 13px;
    width: 33.33%;
    float: left;
    position: relative;
    }

    #progressbar-1 #step1:before {
    content: "1";
    color: #fff;
    width: 29px;
    margin-left: 22px;
    padding-left: 11px;
    }

    #progressbar-1 #step2:before {
    content: "2";
    color: #fff;
    width: 29px;
    }

    #progressbar-1 #step3:before {
    content: "3";
    color: #fff;
    width: 29px;
    margin-right: 22px;
    text-align: center;
    }

    #progressbar-1 li:before {
    line-height: 29px;
    display: block;
    font-size: 12px;
    background: #455A64;
    border-radius: 50%;
    margin: auto;
    }

    #progressbar-1 li:after {
    content: '';
    width: 121%;
    height: 2px;
    background: #455A64;
    position: absolute;
    left: 0%;
    right: 0%;
    top: 15px;
    z-index: -1;
    }

    #progressbar-1 li:nth-child(2):after {
    left: 50%
    }

    #progressbar-1 li:nth-child(1):after {
    left: 25%;
    width: 121%
    }

    #progressbar-1 li:nth-child(3):after {
    left: 25%;
    width: 50%;
    }

    #progressbar-1 li.active:before,
    #progressbar-1 li.active:after {
    background: #1266f1;
    }

    .card-stepper {
    z-index: 0
    }
@endsection
@section("main")
    <section class="vh-95 gradient-custom-2">
        <div class="container py-5 h-100">
            <div class="row justify-content-center align-items-start">
                @if(isset($orders))
                    @foreach($orders as $orderId => $order)
                        <div class="col-md-10 col-lg-8 col-xl-6 mb-4 d-flex">
                            <div class="card card-stepper flex-fill" style="border-radius: 16px;">
                                <div class="card-header p-4">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <p class="text-muted mb-2">
                                                Order ID <span class="fw-bold text-body">{{ $orderId }}</span>
                                            </p>
                                            <p class="text-muted mb-0">
                                                Placed On <span class="fw-bold text-body">{{ $order[0]->created_at->format('Y-m-d H:i') }}</span>
                                            </p>
                                            @php
                                                $cusName = \App\Domain\User\http\Models\User::find($order[0]->user_id)->name ?? 'Unknown Customer';
                                            @endphp
                                            <p class="text-muted mb-0">
                                                Customer Name <span class="fw-bold text-body">{{ $cusName }}</span>
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-body p-4 d-flex flex-column">
                                    @foreach($order as $item)
                                        @if(!is_null($item->menus))
                                            <div class="d-flex flex-row mb-4 pb-2">
                                                <div class="flex-fill">
                                                    <h5 class="fw-bold">{{ $item->menus->name_food }}</h5>
                                                    <p class="text-muted">Qt: {{ $item->quantity }} item</p>
                                                    <h4 class="mb-3">
                                                        $ {{ $item->menus->price * $item->quantity }}
                                                        <span class="small text-muted">via (COD)</span>
                                                    </h4>
                                                </div>
                                                <div>
                                                    <img class="align-self-center img-fluid" src="{{ asset($item->menus->img_url) }}" width="250" alt="{{ $item->menus->name_food }}">
                                                </div>
                                            </div>
                                        @else
                                            <h3>محصولی ناموجود بود</h3>
                                        @endif

                                    @endforeach

                                    <ul id="progressbar-1" class="mx-0 mt-0 mb-5 px-0 pt-0 pb-4 d-flex justify-content-between">
                                        <li class="step0 {{ $item->status >= 0 ? 'active' : '' }}" id="step1">
                                            <span style="margin-left: 22px; margin-top: 12px;">PLACED</span>
                                        </li>
                                        <li class="step0 {{ $item->status >= 1 ? 'active' : '' }} text-center" id="step2">
                                            <span>SHIPPED</span>
                                        </li>
                                        <li class="step0 text-muted text-end {{ $item->status >= 2 ? 'active' : '' }}" id="step3">
                                            <span style="margin-right: 22px;">DELIVERED</span>
                                        </li>
                                    </ul>

                                    <form action="{{ route('dashboard.res.order') }}" method="POST">
                                        @csrf
                                        @method("PUT")

                                        <input type="hidden" name="order_id" value="{{ $item->order_id }}">
                                        <div class="mb-3">
                                            <label for="orderSelect-{{ $orderId }}" class="form-label">Where is the process</label>
                                            <select class="form-select" id="orderSelect-{{ $orderId }}" name="status">
                                                <option disabled>Process</option>
                                                <option value="0" {{ $item->status == 0 ? 'selected' : '' }}>PLACED</option>
                                                <option value="1" {{ $item->status == 1 ? 'selected' : '' }}>SHIPPED</option>
                                                <option value="2" {{ $item->status == 2 ? 'selected' : '' }}>DELIVERED</option>
                                            </select>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Edit Order</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </section>
@endsection
