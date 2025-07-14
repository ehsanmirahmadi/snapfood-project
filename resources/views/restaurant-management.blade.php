@extends("_master.restaurant")
@section("main")
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 mt-5 ">
        <section class="section about-section gray-bg" id="about">
            <div class="container">
                <div class="row align-items-center flex-row-reverse">
                    <div class="col-lg-6">
                        <div class="about-text go-to">
                            <h6 class="theme-color lead mx-5">welcome my restaurant : <strong>{{$user['name']}}</strong>
                            </h6>
                            <div class="row about-list">
                                <div class="col-md-6">
                                    <div class="media">
                                        <label>Age</label>
                                        <p>{{$user['age']}} Yr</p>
                                    </div>
                                    <div class="media">
                                        <label>Address</label>
                                        <p>{{$user['address']}} </p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="media">
                                        <label>E-mail</label>
                                        <p>{{$user['email']}}</p>
                                    </div>
                                    <div class="media">
                                        <label>Phone</label>
                                        <p>{{$user['mobile']}}</p>
                                    </div>
                                    <div class="media">
                                        <label>city</label>
                                        <p>{{$user['city']}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-avatar">
                            <img src="{{$user['img_url']}}" title="" alt="">
                        </div>
                    </div>
                </div>
                <div class="counter">
                    <div class="row d-flex justify-content-center mt-3 bg-mute">
                        <div class="col-6 col-lg-3">
                            <div class="count-data text-center">
                                <h6 class="count h2" data-to="500" data-speed="500">{{$user['Number_purchases']}}</h6>
                                <p class="m-0px font-w-700 " style="font-size: 20px">Number of Order</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
