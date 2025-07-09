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
</head>
<body>
<section class="vh-100 gradient-custom">
    <div class="container py-5 h-100">
        <div class="row justify-content-center align-items-center h-100">
            <div class="col-12 col-lg-9 col-xl-7">
                <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
                    <div class="card-body p-4 p-md-5">
                        <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">login</h3>
                        <form method="post" action="{{route("login.exist")}}">
                            @csrf
                            <!-- Email input -->
                            <div data-mdb-input-init class="form-outline mb-4">
                                <input type="email" id="form2Example1" class="form-control" name="email"/>
                                <label class="form-label" for="form2Example1">Email address</label>
                            </div>

                            <!-- Password input -->
                            <div data-mdb-input-init class="form-outline mb-4">
                                <input type="password" id="form2Example2" class="form-control" name="password" />
                                <label class="form-label" for="form2Example2">Password</label>
                            </div>
                            <!-- Submit button -->
                            <button  type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-block mb-4 col-12" >Sign in</button>
                            <a href="{{route("register")}}">register</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

</body>
</html>
