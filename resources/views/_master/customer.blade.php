<!DOCTYPE html>
<html lang="en" data-bs-theme="auto">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="" />
    <meta
        name="author"
        content="Mark Otto, Jacob Thornton, and Bootstrap contributors"
    />
    <meta name="generator" content="Astro v5.9.2" />
    <title>Dashboard Template · Bootstrap v5.3</title>
    <link
        rel="canonical"
        href="https://getbootstrap.com/docs/5.3/examples/dashboard/"
    />
    <link
        href="{{asset("./css/bootstrap.min.css")}}"
        rel="stylesheet"
        integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr"
    />
    <meta name="theme-color" content="#712cf9" />
    <link href="{{asset("./css/dashboard.css")}}" rel="stylesheet" />
    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }
        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
        .b-example-divider {
            width: 100%;
            height: 3rem;
            background-color: #0000001a;
            border: solid rgba(0, 0, 0, 0.15);
            border-width: 1px 0;
            box-shadow: inset 0 0.5em 1.5em #0000001a,
            inset 0 0.125em 0.5em #00000026;
        }
        .b-example-vr {
            flex-shrink: 0;
            width: 1.5rem;
            height: 100vh;
        }
        .bi {
            vertical-align: -0.125em;
            fill: currentColor;
        }
        .nav-scroller {
            position: relative;
            z-index: 2;
            height: 2.75rem;
            overflow-y: hidden;
        }
        .nav-scroller .nav {
            display: flex;
            flex-wrap: nowrap;
            padding-bottom: 1rem;
            margin-top: -1px;
            overflow-x: auto;
            text-align: center;
            white-space: nowrap;
            -webkit-overflow-scrolling: touch;
        }
        .btn-bd-primary {
            --bd-violet-bg: #712cf9;
            --bd-violet-rgb: 112.520718, 44.062154, 249.437846;
            --bs-btn-font-weight: 600;
            --bs-btn-color: var(--bs-white);
            --bs-btn-bg: var(--bd-violet-bg);
            --bs-btn-border-color: var(--bd-violet-bg);
            --bs-btn-hover-color: var(--bs-white);
            --bs-btn-hover-bg: #6528e0;
            --bs-btn-hover-border-color: #6528e0;
            --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
            --bs-btn-active-color: var(--bs-btn-hover-color);
            --bs-btn-active-bg: #5a23c8;
            --bs-btn-active-border-color: #5a23c8;
        }
        .bd-mode-toggle {
            z-index: 1500;
        }
        .bd-mode-toggle .bi {
            width: 1em;
            height: 1em;
        }
        .bd-mode-toggle .dropdown-menu .active .bi {
            display: block !important;
        }
        @yield("extra_css")
    </style>
</head>
<body>
<header
    class="navbar sticky-top bg-dark flex-md-nowrap p-0 shadow"
    data-bs-theme="dark"
>
    <a
        class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6 text-white"
        href="#"
    >snap food company</a
    >
    <ul class="navbar-nav flex-row d-md-none">
        <li class="nav-item text-nowrap">
            <button
                class="nav-link px-3 text-white"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarSearch"
                aria-controls="navbarSearch"
                aria-expanded="false"
                aria-label="Toggle search"
            >
                <svg class="bi" aria-hidden="true">
                    <use xlink:href="#search"></use>
                </svg>
            </button>
        </li>
        <li class="nav-item text-nowrap">
            <button
                class="nav-link px-3 text-white"
                type="button"
                data-bs-toggle="offcanvas"
                data-bs-target="#sidebarMenu"
                aria-controls="sidebarMenu"
                aria-expanded="false"
                aria-label="Toggle navigation"
            >
                <svg class="bi" aria-hidden="true">
                    <use xlink:href="#list"></use>
                </svg>
            </button>
        </li>
    </ul>
    <div id="navbarSearch" class="navbar-search w-100 collapse">
        <input
            class="form-control w-100 rounded-0 border-0"
            type="text"
            placeholder="Search"
            aria-label="Search"
        />
    </div>
</header>

@php $path = \Illuminate\Support\Facades\Request::path() @endphp
<div class="container-fluid">
    <div class="row" >
        @auth
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
            <hr/>
            <ul class="nav nav-pills flex-column mb-auto">
                <li class="nav-item">
                    <a href="{{route("dashboard.user")}}" class="nav-link {{$path == 'dashboard-user' ? "active" : "link-body-emphasis"}}">
                        Home
                    </a>
                </li>
                <li>
                    <a href="{{route("dashboard.restaurant-list")}}" class="nav-link  {{$path == 'dashboard-user/restaurants' ? "active" : "link-body-emphasis"}}">
                        restaurants
                    </a>
                </li>
                <li>
                    <a href="{{route('dashboard.cart')}}" class="nav-link  {{$path == 'dashboard-user/cart' ? "active" : "link-body-emphasis"}}">
                        cart
                    </a>
                </li>
                <li>
                    <a href="{{route('dashboard.user.order')}}" class="nav-link {{$path == 'dashboard-user/order' ? "active" : "link-body-emphasis"}}">
                        order
                    </a>
                </li>
            </ul>
            <hr/>
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
                    <li>
                        <hr class="dropdown-divider"/>
                    </li>
                    <li><a class="dropdown-item" href="{{route("logout")}}">Sign out</a></li>
                </ul>
            </div>
        </div>
        @endauth
        @yield("section")
        @yield("main")
    </div>
</div>
<script
    src="{{asset("js/bootstrap.bundle.min.js")}}"
    integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q"
    class="astro-vvvwv3sm"
></script>
<script
    src="https://cdn.jsdelivr.net/npm/chart.js@4.3.2/dist/chart.umd.js"
    integrity="sha384-eI7PSr3L1XLISH8JdDII5YN/njoSsxfbrkCTnJrzXt+ENP5MOVBxD+l6sEG4zoLp"
    crossorigin="anonymous"
    class="astro-vvvwv3sm"
></script>
<script src="{{asset("js/dashboard.js")}}" class="astro-vvvwv3sm"></script>
</body>
</html>
