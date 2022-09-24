<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <link rel = "icon" href =
    "img/headlogo.png"
            type = "image/x-icon">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href={{url("lib/animate/animate.min.css")}} rel="stylesheet">
    <link href={{url("lib/owlcarousel/assets/owl.carousel.min.css" )}}rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href={{url("css/bootstrap.min.css")}} rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href={{url("css/style.css")}} rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <div class="container-fluid bg-dark text-light p-0">
        <div class="row gx-0 d-none d-lg-flex">
            <div class="col-lg-7 px-5 text-start">
                <div class="h-100 d-inline-flex align-items-center me-4">
                    <small class="fa fa-map-marker-alt text-primary me-2"></small>
                    <small>Irbid, Jordan</small>
                </div>
                {{-- <div class="h-100 d-inline-flex align-items-center">
                    <small class="far fa-clock text-primary me-2"></small>
                    <small>Mon - Fri : 09.00 AM - 09.00 PM</small>
                </div> --}}
            </div>
            <div class="col-lg-5 px-5 text-end">
                <div class="h-100 d-inline-flex align-items-center me-4">
                    <small class="fa fa-phone-alt text-primary me-2"></small>
                    <small>+962778091870</small>
                </div>
                <div class="h-100 d-inline-flex align-items-center mx-n2">
                    <a class="btn btn-square btn-link rounded-0 border-0 border-end border-secondary" href="https://web.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-square btn-link rounded-0 border-0 border-end border-secondary" href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-square btn-link rounded-0 border-0 border-end border-secondary" href="https://www.linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-square btn-link rounded-0" href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0">
        <a href="/" class="navbar-brand d-flex align-items-center border-end px-4 px-lg-5">
            <h2 class="m-0"> <img src="{{url('img/logo.png')}}" alt="MOHKTARKOM" width="200px"> </h2>

        </a>
        {{-- @if (session('status'))
        <a href="/" class="navbar-brand d-flex align-items-center border-end px-4 px-lg-5 alert-success">
            <h2 class="m-0 ">{{ session('status') }}</h2>

        </a>
        @endif --}}
        {{-- <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button> --}}

        {{-- @if (session('status'))
        {{-- <div class="alert alert-success navbar-brand d-flex align-items-center border-end px-4 px-lg-5"> --}}
            {{-- <div class="alert alert-success" role="alert">
                {{ session('status') }}<i class="fa fa-check" aria-hidden="true"></i>
              </div> --}}


        {{-- </div> --}}
        {{-- @endif --}}
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">

                <a href="/" class="nav-item nav-link @yield('home')">Home</a>
                <a href="about" class="nav-item nav-link @yield('about')">About</a>
                <a href="allcars" class="nav-item nav-link @yield('courses')">Vehicles</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                    <div class="dropdown-menu bg-light m-0">
                        {{-- <a href="feature" class="dropdown-item">Features</a> --}}
                        {{-- <a href="appointment" class="dropdown-item">Appointment</a> --}}
                        <a href="team" class="dropdown-item">Our Team</a>
                        <a href="testimonial" class="dropdown-item">Testimonial</a>


                        @if (!session('user_id'))
                        <a href="register" class="dropdown-item">register</a>


                        @if (session('user_id'))
<a href="{{route('logOut')}}" class="dropdown-item">LogOut</a>
                        @endif
                        @if (!session('user_id'))
<a href="login" class="dropdown-item">LogIn</a>
                        @endif
@endif
                    </div>
                </div>
                @if (session('user_id'))
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"> <i class="fa fa-user" aria-hidden="true"></i>{{session('user_name')}}</a>
                    <div class="dropdown-menu bg-light m-0">


                        <a href="user" class="dropdown-item"><i class="fa fa-user" aria-hidden="true"></i> {{session('user_name')}} Profile</a>


                        @if (session('user_id'))
<a href="{{route('logOut')}}" class="dropdown-item">LogOut</a>
                        @endif
                        @if (!session('user_id'))
<a href="login" class="dropdown-item">LogIn</a>
                        @endif

                    </div>
                </div>
                @endif
                <a href="contact" class="nav-item nav-link @yield('contact')">Contact</a>
            </div>
            {{-- <a href="" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">Get Started<i class="fa fa-arrow-right ms-3"></i></a> --}}
        </div>
    </nav>
    <!-- Navbar End -->
