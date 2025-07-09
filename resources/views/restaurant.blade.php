@extends("_master.app")
@section("sidebar")
    <div
        class="d-flex flex-column flex-shrink-0 p-3 bg-body-tertiary position-fixed"
        style="width: 250px ; height: 96vh ;"
    >
        <a
            href="/"
            class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none"
        >
            <svg
                class="bi pe-none me-2"
                width="40"
                height="32"
                aria-hidden="true"
            >
                <use xlink:href="#bootstrap"></use>
            </svg>
            <span class="fs-4">Sidebar</span>
        </a>
        <hr />
        <ul class="nav nav-pills flex-column mb-auto">
            <li class="nav-item">
                <a href="{{route("dashboard.user")}}" class="nav-link link-body-emphasis" aria-current="page">
                    Home
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route("dashboard.restaurant-list")}}" class="nav-link active">
                    restaurants
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link link-body-emphasis">
                    cart
                </a>
            </li>

        </ul>
        <hr />
        <div class="dropdown">
            <a
                href="#"
                class="d-flex align-items-center link-body-emphasis text-decoration-none dropdown-toggle"
                data-bs-toggle="dropdown"
                aria-expanded="false"
            >
                <img
                    src="https://github.com/mdo.png"
                    alt=""
                    width="32"
                    height="32"
                    class="rounded-circle me-2"
                />
                <strong>mdo</strong>
            </a>
            <ul class="dropdown-menu text-small shadow">
                <li><a class="dropdown-item" href="#">edit</a></li>
                <li><hr class="dropdown-divider" /></li>
                <li><a class="dropdown-item" href="{{route("logout")}}">Sign out</a></li>
            </ul>
        </div>
    </div>
@endsection
@section("main")
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 mt-5">
        <div class="container">
            <div class="row g-4">
                <!-- Card 1 -->
                <div class="col-md-4">
                    <div class="card shadow-lg border-0 rounded-4 h-100">
                        <!-- Card Header -->
                        <div class="card-header bg-primary text-white rounded-top-4">
                            <h5 class="card-title mb-0 text-center">Restaurant Name</h5>
                        </div>

                        <!-- Card Body -->
                        <div class="card-body text-center">
                            <img src="{{ asset('images/sample-restaurant.jpg') }}" class="img-fluid rounded-3 mb-3" alt="Restaurant Image" style="height: 180px; object-fit: cover;">
                            <p class="text-muted"><i class="bi bi-geo-alt-fill me-1"></i>123 Main St, City Name</p>
                        </div>

                        <!-- Card Footer -->
                        <div class="card-footer bg-light text-center">
                            <a href="#" class="btn btn-outline-primary rounded-pill px-4">
                                <i class="bi bi-list-ul me-2"></i>See Menu
                            </a>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </main>


@endsection
