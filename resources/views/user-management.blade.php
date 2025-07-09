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
                <a href="{{route("dashboard.user")}}" class="nav-link active" aria-current="page">
                    Home
                </a>
            </li>
            <li>
                <a href="{{route("dashboard.restaurant-list")}}" class="nav-link link-body-emphasis">
                    restaurants
                </a>
            </li>
            <li>
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
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 mt-5 ">
        <section class="section about-section gray-bg" id="about">
            <div class="container">
                <div class="row align-items-center flex-row-reverse">
                    <div class="col-lg-6">
                        <div class="about-text go-to">
                            <h6 class="theme-color lead mx-5">welcome my friends : <strong>{{$user['name']}}</strong></h6>
                            <div class="row about-list">
                                <div class="col-md-6">
                                    <div class="media">
                                        <label>Age</label>
                                        <p>{{$user["age"]}} Yr</p>
                                    </div>
                                    <div class="media">
                                        <label>Address</label>
                                        <p>{{$user["address"]}}</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="media">
                                        <label>E-mail</label>
                                        <p>{{$user["email"]}}</p>
                                    </div>
                                    <div class="media">
                                        <label>Phone</label>
                                        <p>{{$user["mobile"]}}</p>
                                    </div>
                                    <div class="media">
                                        <label>city</label>
                                        <p>{{$user["city"]}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-avatar">
                            <img src="{{asset($user['img_url'])}}" title="" alt="">
                        </div>
                    </div>
                </div>
                <div class="counter">
                    <div class="row d-flex justify-content-center mt-3 bg-mute" >
                        <div class="col-6 col-lg-3">
                            <div class="count-data text-center">
                                <h6 class="count h2" data-to="500" data-speed="500">{{$user["Number_purchases"]}}</h6>
                                <p class="m-0px font-w-700 " style="font-size: 20px" >Number of purchases</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <h2>orders list</h2>
        <div class="table-responsive small">
            <table class="table table-striped table-sm">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Header</th>
                    <th scope="col">Header</th>
                    <th scope="col">Header</th>
                    <th scope="col">Header</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>1,001</td>
                    <td>random</td>
                    <td>data</td>
                    <td>placeholder</td>
                    <td>text</td>
                </tr>
                <tr>
                    <td>1,002</td>
                    <td>placeholder</td>
                    <td>irrelevant</td>
                    <td>visual</td>
                    <td>layout</td>
                </tr>
                <tr>
                    <td>1,003</td>
                    <td>data</td>
                    <td>rich</td>
                    <td>dashboard</td>
                    <td>tabular</td>
                </tr>
                <tr>
                    <td>1,003</td>
                    <td>information</td>
                    <td>placeholder</td>
                    <td>illustrative</td>
                    <td>data</td>
                </tr>
                <tr>
                    <td>1,004</td>
                    <td>text</td>
                    <td>random</td>
                    <td>layout</td>
                    <td>dashboard</td>
                </tr>
                <tr>
                    <td>1,005</td>
                    <td>dashboard</td>
                    <td>irrelevant</td>
                    <td>text</td>
                    <td>placeholder</td>
                </tr>
                <tr>
                    <td>1,006</td>
                    <td>dashboard</td>
                    <td>illustrative</td>
                    <td>rich</td>
                    <td>data</td>
                </tr>
                <tr>
                    <td>1,007</td>
                    <td>placeholder</td>
                    <td>tabular</td>
                    <td>information</td>
                    <td>irrelevant</td>
                </tr>
                <tr>
                    <td>1,008</td>
                    <td>random</td>
                    <td>data</td>
                    <td>placeholder</td>
                    <td>text</td>
                </tr>
                <tr>
                    <td>1,009</td>
                    <td>placeholder</td>
                    <td>irrelevant</td>
                    <td>visual</td>
                    <td>layout</td>
                </tr>
                <tr>
                    <td>1,010</td>
                    <td>data</td>
                    <td>rich</td>
                    <td>dashboard</td>
                    <td>tabular</td>
                </tr>
                <tr>
                    <td>1,011</td>
                    <td>information</td>
                    <td>placeholder</td>
                    <td>illustrative</td>
                    <td>data</td>
                </tr>
                <tr>
                    <td>1,012</td>
                    <td>text</td>
                    <td>placeholder</td>
                    <td>layout</td>
                    <td>dashboard</td>
                </tr>
                <tr>
                    <td>1,013</td>
                    <td>dashboard</td>
                    <td>irrelevant</td>
                    <td>text</td>
                    <td>visual</td>
                </tr>
                <tr>
                    <td>1,014</td>
                    <td>dashboard</td>
                    <td>illustrative</td>
                    <td>rich</td>
                    <td>data</td>
                </tr>
                <tr>
                    <td>1,015</td>
                    <td>random</td>
                    <td>tabular</td>
                    <td>information</td>
                    <td>text</td>
                </tr>
                </tbody>
            </table>
        </div>
    </main>

@endsection
{{--<div
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
            <a href="#" class="nav-link active" aria-current="page">
                <svg
                    class="bi pe-none me-2"
                    width="16"
                    height="16"
                    aria-hidden="true"
                >
                    <use xlink:href="#home"></use>
                </svg>
                Home
            </a>
        </li>
        <li>
            <a href="#" class="nav-link link-body-emphasis">
                <svg
                    class="bi pe-none me-2"
                    width="16"
                    height="16"
                    aria-hidden="true"
                >
                    <use xlink:href="#grid"></use>
                </svg>
                restaurants
            </a>
        </li>
        <li>
            <a href="#" class="nav-link link-body-emphasis">
                <svg
                    class="bi pe-none me-2"
                    width="16"
                    height="16"
                    aria-hidden="true"
                >
                    <use xlink:href="#table"></use>
                </svg>
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
</div>--}}
