<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Register Page</title>
    <link rel="shortcut icon" href="img/background/logo-p.png">
    <meta name="description" content="@yield('page_description', $page_description ?? '')" />
    <link rel="stylesheet" href="stylesheet/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
    <section class="h-100 h-custom" style="background-color: rgb(219, 217, 217);">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-lg-8 col-xl-6">
                    <div class="card rounded-3">
                        <img src="img/background/consoles-bg-2.jpg" class="w-100"
                            style="border-top-left-radius: .3rem; border-top-right-radius: .3rem;" alt="Sample photo">
                        <div class="card-body p-4 p-md-3">
                            <h3 class="mb-4 pb-2 pb-md-0 px-md-2" style="margin-left: 20px;">Registration</h3>
                            @if(session('success'))
                                <div class="alert alert-success">
                                    <b>Yeah!</b> {{session('success')}}
                                </div>
                            @endif
                            @if(session('error'))
                                <div class="alert alert-danger">
                                    <b>Opps!</b> {{session('error')}}
                                </div>
                            @endif
                            <form action="{{url('/action-register')}}" method="POST">
                                @csrf
                                <div class="form-floating">
                                    <input type="text" class="form-control mb-3" placeholder="masukkan nama" name="name" required>
                                    <label><strong>Name</strong></label>
                                </div>
                                <div class="form-floating">
                                    <input type="email" class="form-control mb-3" placeholder="masukkan email" name="email" required>
                                    <label><strong>Email</strong></label>
                                </div>
                                <div class="form-floating">
                                    <input type="password" class="form-control mb-3" placeholder="masukkan password" name="password" required>
                                    <label><strong>Password</strong></label>
                                </div>
                                <div class="form-floating">
                                    <input type="password" class="form-control mb-3" placeholder="masukkan password" name="confirm_password" required>
                                    <label><strong>Confirmation Password</strong></label>
                                </div>
                                <div class="text-center d-flex justify-content-between">
                                    <button type="submit" class="btn btn-dark btn-block" style="padding: 10px 90px">Register</button>
                                    <a href="/login" class="btn btn-danger btn-block" style="padding: 10px 105px">Cancel</a>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>
