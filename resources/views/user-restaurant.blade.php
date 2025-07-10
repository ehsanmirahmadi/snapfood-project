@extends("_master.customer")
@section("main")

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 mt-5">
        <div class="container">
            <div class="row g-4">
                <!-- Card 1 -->
                @foreach($restaurants as $restaurant)
                    <div class="col-md-4">
                        <div class="card shadow-lg border-0 rounded-4 h-100">
                            <!-- Card Header -->
                            <div class="card-header bg-primary text-white rounded-top-4">
                                <h5 class="card-title mb-0 text-center">{{$restaurant["name"]}}</h5>
                            </div>

                            <!-- Card Body -->
                            <div class="card-body text-center">
                                <img src="{{ asset($restaurant["img_url"]) }}" class="img-fluid rounded-3 mb-3"
                                     alt="Restaurant Image" style="height: 180px; object-fit: cover;">
                                <p class="text-muted"><i class="bi bi-geo-alt-fill me-1"></i>{{$restaurant["address"]}}
                                </p>
                            </div>

                            <!-- Card Footer -->
                            <div class="card-footer bg-light text-center">
                                <a href="{{route("dashboard.menu" , ['slug' => $restaurant['slug']])}}"
                                   class="btn btn-outline-primary rounded-pill px-4">
                                    <i class="bi bi-list-ul me-2"></i>See Menu
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach


            </div>
        </div>
    </main>

@endsection
