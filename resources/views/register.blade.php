@extends("_master.customer")
@section("section")
    <section class="vh-95 gradient-custom">
        <div class="container py-5 h-100">
            <div class="row justify-content-center align-items-center h-100">
                <div class="col-12 col-lg-9 col-xl-7">
                    <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
                        <div class="card-body p-4 p-md-5">
                            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Registration Form</h3>
                            <form method="post" action="{{route("register.exist")}}">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6 mb-4">

                                        <div data-mdb-input-init class="form-outline">
                                            <input type="text" id="firstName" name="firstName"
                                                   class="form-control form-control-lg"/>
                                            <label class="form-label" for="firstName">First Name</label>
                                        </div>

                                    </div>
                                    <div class="col-md-6 mb-4">

                                        <div data-mdb-input-init class="form-outline">
                                            <input type="text" id="lastName" name="lastName"
                                                   class="form-control form-control-lg"/>
                                            <label class="form-label" for="lastName">Last Name</label>
                                        </div>

                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 mb-4 d-flex align-items-center">

                                        <div data-mdb-input-init class="form-outline datepicker w-100">
                                            <input type="text" class="form-control form-control-lg" id="age"
                                                   name="age"/>
                                            <label for="age" class="form-label">age</label>
                                        </div>

                                    </div>

                                    <div class="col-md-6 mb-4 d-flex align-items-center">

                                        <div data-mdb-input-init class="form-outline datepicker w-100">
                                            <input type="password" class="form-control form-control-lg" id="password"
                                                   name="password"/>
                                            <label for="password" class="form-label">password</label>
                                        </div>

                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 mb-4 pb-2">

                                        <div data-mdb-input-init class="form-outline">
                                            <input type="email" id="emailAddress" class="form-control form-control-lg"
                                                   name="email"/>
                                            <label class="form-label" for="emailAddress">Email</label>
                                        </div>

                                    </div>
                                    <div class="col-md-6 mb-4 pb-2">

                                        <div data-mdb-input-init class="form-outline">
                                            <input type="text" id="mobile" class="form-control form-control-lg"
                                                   name="mobile"/>
                                            <label class="form-label" for="mobile">Phone Number</label>
                                        </div>

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-4 pb-2">

                                        <div data-mdb-input-init class="form-outline">
                                            <input type="text" id="Address" class="form-control form-control-lg"
                                                   name="address"/>
                                            <label class="form-label" for="Address">Address</label>
                                        </div>

                                    </div>
                                    <div class="col-md-6 mb-4 pb-2">

                                        <div data-mdb-input-init class="form-outline">
                                            <input type="text" id="city" class="form-control form-control-lg"
                                                   name="city"/>
                                            <label class="form-label" for="city">city</label>
                                        </div>

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 mb-4 pb-2">
                                        <div data-mdb-input-init class="form-outline">
                                            <select id="userType" class="form-control form-control-lg" name="role">
                                                <option value="" disabled selected>Select user type</option>
                                                <option value="0">Customer</option>
                                                <option value="1">Restaurant</option>
                                            </select>
                                            <label class="form-label" for="userType">User Type</label>
                                        </div>

                                    </div>
                                </div>
                                <button type="submit" data-mdb-button-init data-mdb-ripple-init
                                        class="btn btn-primary btn-block mb-4 col-12">Sign in
                                </button>
                                <a href="{{route("login")}}">login</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
