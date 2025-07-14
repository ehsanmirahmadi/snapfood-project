@extends("_master.restaurant")
@section("main")

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 mt-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="d-flex justify-content-end ">
                        <a href="{{route('dashboard.res.menu.create' , ['slug' => auth()->user()['slug'] ])}}" class="btn btn-primary mt-auto align-self-start">create food</a>
                    </div>
                </div>
            </div>
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
                                <a href="{{route('dashboard.res.menu.edit' , ['slug'=> auth()->user()['slug'] , 'menuId' => $menu['id']])}}" class="btn btn-sm btn-info mt-auto align-self-start">edit</a>
                                <a href="{{route('dashboard.res.menu.delete' , ['slug'=> auth()->user()['slug'] , 'menuId' => $menu['id']])}}" class="btn btn-sm btn-danger mt-auto align-self-start"> delete</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </main>
@endsection
