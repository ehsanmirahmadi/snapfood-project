@extends("_master.customer")
@section("main")
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 mt-5">
        <div class="container">
            <div class="row g-3">
                @foreach($menus as $menu)
                    <div class="col-12 col-sm-6 col-md-4 col-lg-4">
                        <div class="card h-100">

                            <img src="{{asset($menu['img_url'])}}" class="card-img-top img-fluid"
                                 alt="Descriptive alt text about image content"
                                 style="height: 200px; object-fit: cover;">

                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title">{{$menu['name_food']}}</h5>
                                <p class="card-text">resapy : {{$menu['recipe']}}</p>
                                <span>{{$menu['price']}}</span>
                            </div>
                            <div class="card-footer">
                                <a href="#" class="btn btn-primary mt-auto align-self-start">add cart</a>

                            </div>
                        </div>
                    </div>
                @endforeach


            </div>
        </div>
    </main>
@endsection
