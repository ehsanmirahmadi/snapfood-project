@extends("_master.customer")
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
            <div class="row d-flex justify-content-center align-items-center h-100">
                @if(isset($orders))
                    @foreach($orders as $orderId => $order)
                        <div class="col-md-10 col-lg-8 col-xl-6">
                            <div class="card card-stepper" style="border-radius: 16px;">
                                <div class="card-header p-4">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <p class="text-muted mb-2"> Order ID <span class="fw-bold text-body">{{$orderId}}</span></p>
                                            <p class="text-muted mb-0"> Place On <span class="fw-bold text-body">{{$order[0]->menus->created_at}}</span> </p>
                                            @php
                                                $res_name = \App\Domain\User\http\Models\User::where('id' , $order[0]->restaurants_id)->first()->name;
                                            @endphp
                                            <p class="text-muted mb-0"> name restaurants <span class="fw-bold text-body">{{$res_name}}</span> </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body p-4">
                                    @foreach($order as $item)
                                        @if(!is_null($item->menus))
                                            <div class="d-flex flex-row mb-4 pb-2">
                                                <div class="flex-fill">
                                                    <h5 class="bold">{{$item->menus->name_food}}</h5>
                                                    <p class="text-muted"> Qt: {{$item->quantity}} item</p>
                                                    <h4 class="mb-3"> $ {{$item->menus->price * $item->menus->quntity }} <span class="small text-muted"> via (COD) </span></h4>
                                                </div>
                                                <div>
                                                    <img class="align-self-center img-fluid"
                                                         src="{{asset($item->menus->img_url)}}" width="250">
                                                </div>
                                            </div>
                                        @else <h3>محصول ناموجود بود </h3>
                                        @endif
                                    @endforeach

                                    <ul id="progressbar-1" class="mx-0 mt-0 mb-5 px-0 pt-0 pb-4">
                                        <li class="step0 {{$item->status >= 0 ? "active" : ""}}" id="step1"><span
                                                style="margin-left: 22px; margin-top: 12px;">PLACED</span></li>
                                        <li class="step0  {{$item->status >= 1 ? "active" : ""}} text-center" id="step2"><span>SHIPPED</span></li>
                                        <li class="step0 text-muted text-end {{$item->status >= 2 ? "active" : ""}}" id="step3"><span
                                                style="margin-right: 22px;">DELIVERED</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif

            </div>
        </div>
    </section>

@endsection
