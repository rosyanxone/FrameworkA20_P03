<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Login Page</title>
    <link rel="shortcut icon" href="img/background/logo-p.png">
    <meta name="description" content="@yield('page_description', $page_description ?? '')"/>
    <link rel="stylesheet" href="stylesheet/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

</head>

<body>
    <section class="vh-100" style="background-color: #eee;">
        <div class="container h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col col-xl-10">
                    <div class="card" style="border-radius: 1rem;">
                        <div class="row g-0">
                            <div class="col-md-6 col-lg-5 d-none d-md-block">
                                <img src="img/background/consoles-bg.jpg" alt="login form" class="img-fluid h-100" style="border-radius: 1rem 0 0 1rem;" />
                            </div>
                            <div class="col-md-6 col-lg-7 d-flex align-items-center">
                                <div class="card-body p-4 p-lg-5 text-black">

                                    <form action="{{url('/action-login')}}" method="POST">
                                        @csrf
                                        <div class="d-flex flex-column mb-3 pb-1">
                                            @if(session('error'))
                                            <div class="alert alert-danger">
                                                <b>Opps!</b> {{session('error')}}
                                            </div>
                                            @endif
                                            <span class="h1 fw-bold mb-0" style="margin-left: 20px;">Pixel</span>
                                        </div>

                                        <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">
                                            Sign into your account
                                        </h5>

                                        <div class="form-floating mb-4">
                                            <input type="email" name="email" id="form2Example17" class="form-control" placeholder="name@example.com" required/>
                                            <label for="form2Example17">Email address</label>
                                        </div>

                                        <div class="form-floating mb-4">
                                            <input type="password" name="password" id="form2Example27" class="form-control" placeholder="Password" required/>
                                            <label for="form2Example27">Password</label>
                                        </div>

                                        <div class="pt-1 mb-4">
                                            <button class="btn btn-dark btn-lg btn-block" type="submit">Login</button>
                                        </div>

                                        <p class="" style="color: #393f81;">Don't have an account?
                                            <a href="/register" style="color: #393f81;">Register here</a>
                                        </p>
                                        <a href="#terms-of-use" class="small text-muted">Terms of use.</a>
                                        <a href="#privacy-police" class="small text-muted">Privacy policy</a>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
</body>

</html>
