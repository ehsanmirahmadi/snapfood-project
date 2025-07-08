@extends("_master.app")

@section("main")
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 mt-5">
        <div class="container">
            <div class="row g-3">
                <div class="col-12 col-sm-6 col-md-4 col-lg-4">
                    <div class="card h-100">

                        <img src="{{asset("images/pizza-image.png")}}" class="card-img-top img-fluid" alt="Descriptive alt text about image content" style="height: 200px; object-fit: cover;">

                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">food name</h5>
                            <p class="card-text">resapy : Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus architecto, cupiditate dicta dolores ducimus, eius est ipsa iusto minus modi non quis ratione, repellat sequi voluptatibus. Autem eligendi vero voluptatem!</p>
                            <a href="#" class="btn btn-primary mt-auto align-self-start">add cart</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-4">
                    <div class="card h-100">

                        <img src="{{asset("images/pizza-image.png")}}" class="card-img-top img-fluid" alt="Descriptive alt text about image content" style="height: 200px; object-fit: cover;">

                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">food name</h5>
                            <p class="card-text">resapy : Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus architecto, cupiditate dicta dolores ducimus, eius est ipsa iusto minus modi non quis ratione, repellat sequi voluptatibus. Autem eligendi vero voluptatem!</p>
                            <a href="#" class="btn btn-primary mt-auto align-self-start">add cart</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-4">
                    <div class="card h-100">

                        <img src="{{asset("images/pizza-image.png")}}" class="card-img-top img-fluid" alt="Descriptive alt text about image content" style="height: 200px; object-fit: cover;">

                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">food name</h5>
                            <p class="card-text">resapy : Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus architecto, cupiditate dicta dolores ducimus, eius est ipsa iusto minus modi non quis ratione, repellat sequi voluptatibus. Autem eligendi vero voluptatem!</p>
                            <a href="#" class="btn btn-primary mt-auto align-self-start">add cart</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
