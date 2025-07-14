@extends("_master.restaurant")
@section("section")
    <section class="vh-95 gradient-custom">
        <div class="container py-5 h-100">
            <div class="row justify-content-center align-items-center h-100">
                <div class="col-12 col-lg-9 col-xl-7">
                    <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
                        <div class="card-body p-4 p-md-5">
                            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">
                                @if(isset($menus))
                                    edit menu
                                @else
                                    create menu
                                @endif</h3>
                            <form method="post" action="
                             @if(isset($menus))
                                        {{route('dashboard.res.menu.edit' , ['slug' => auth()->user()['slug'] , 'menuId' => $menus['id'] ])}}
                                    @else
                                        {{route("dashboard.res.menu.create" , ['slug' => auth()->user()['slug'] ])}}
                                    @endif">
                                @if(isset($menus))
                                    @method('PUT')
                                @endif
                                @csrf
                                <input type="hidden" name="resId"  value="{{auth()->user()['id']}}">
                                <input type="hidden" name="slug"  value="{{auth()->user()['slug']}}">
                                <div class="row">
                                    <div class="col-md-12 mb-4">
                                        <div data-mdb-input-init class="form-outline">
                                            <input type="text" id="foodName" name="foodName"
                                                   class="form-control form-control-lg" value="{{$menus["name_food"] ?? " "}}"/>
                                            <label class="form-label" for="foodName">food name</label>
                                        </div>

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 mb-4 d-flex align-items-center">
                                        <div data-mdb-input-init class="form-outline datepicker w-100">
                                            <input type="text" class="form-control form-control-lg" id="recipe"
                                                   name="recipe" value="{{$menus["recipe"] ?? " "}}"/>
                                            <label for="recipe" class="form-label">recipe</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 mb-4 pb-2">

                                        <div data-mdb-input-init class="form-outline">
                                            <input type="text" id="quntity" class="form-control form-control-lg"
                                                   name="quntity" value="{{$menus["quntity"] ?? " "}}"/>
                                            <label class="form-label" for="quntity">quntity</label>
                                        </div>

                                    </div>
                                    <div class="col-md-6 mb-4 pb-2">

                                        <div data-mdb-input-init class="form-outline">
                                            <input type="text" id="price" class="form-control form-control-lg"
                                                   name="price" value="{{$menus["price"] ?? " "}}"/>
                                            <label class="form-label" for="price">price</label>
                                        </div>

                                    </div>
                                </div>
                                <button type="submit" data-mdb-button-init data-mdb-ripple-init
                                        class="btn btn-primary btn-block mb-4 col-12">
                                    @if(isset($menus))
                                          edit food
                                    @else
                                        create food
                                    @endif
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
