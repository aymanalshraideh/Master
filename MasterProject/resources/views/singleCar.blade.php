@extends('layout.main')
@section('title', 'Single Car')

@section('content')


@if (session('status'))
<div class="alert alert-success">

    {{ session('status') }}<i class="fa fa-check" aria-hidden="true"></i>

</div>
@endif


    <!-- Page Header Start -->
    {{-- <div class="container-fluid page-header py-6 my-6 mt-0 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center">
            <h1 class="display-4 text-white animated slideInDown mb-4">Features</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">Features</li>
                </ol>
            </nav>
        </div>
    </div> --}}
    <!-- Page Header End -->
    {{-- @foreach ($cars as $item)




                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="courses-item d-flex flex-column bg-white overflow-hidden h-100">
                        <div class="text-center p-4 pt-0">
                            <div class="d-inline-block bg-primary text-white fs-5 py-1 px-4 mb-4"></div>
                            <h5 class="mb-3">{{$item->car_model}}</h5>
                            <p>{{$item->car_description}}</p>
                            <ol class="breadcrumb justify-content-center mb-0">
                                <li class="breadcrumb-item small"><i class="fa fa-signal text-primary me-2"></i>Beginner</li>
                                <li class="breadcrumb-item small"><i class="fa fa-calendar-alt text-primary me-2"></i>3 Week</li>
                            </ol>
                        </div>
                        <div class="position-relative mt-auto">
                             <img class="img-fluid" src="{{$item->image2}}" alt="" width="100">

                            <img  src="{{$item->image1}}" alt="">
                            <div class="courses-overlay">
                                <a class="btn btn-outline-primary border-2" href="">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
@endforeach --}}
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="post" action="{{route('book')}}" enctype="multipart/form-data">
@csrf
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Phone Number</label>
                            <input type="text" name="phonenumber" class="form-control" id="exampleInputPassword1">
                        </div>
                        {{-- driver id --}}
                        <input type="hidden" name="driver_id" value="{{ $user->id }}">
                        <input type="hidden" name="user_id" value="{{ session('user_id') }}">

                        <input type="datetime-local" class="form-control" name="datetime" id="">



                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div> </form>
        </div>
    </div>
    <!-- Features Start -->
    <div class="container-xxl py-6">
        <div class="container">
            {{-- @foreach ($car as $item) --}}
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="text-primary text-uppercase mb-2">{{ $car->car_model }}</h6>
                    <h4 class=" mb-4">{{ $car->car_description }}</h4>
                    <p class="mb-5"></p>
                    <div class="row gy-5 gx-4">

                        {{-- <table class="table table-borderless">
                            <th>
                                <tr>Driver Name:</tr>
                                <tr>{{'   '.$user->fname}}</tr>

                            </th>
                          </table> --}}
                        <ul>
                            <li>
                                <h2><i class="fa fa-user text-primary me-2"></i> {{ $user->fname . '  ' . $user->lname }}</h2>
                            </li>
                            {{-- <li><h2><i class="fa fa-mobile text-primary me-2"></i>  {{$user->phone}}</h2></li>
                            <li><h2><i class="fa fa-envelope text-primary me-2"></i>  {{$user->email}}</h2></li> --}}
                            <li>
                                <h2><i class="fa fa-map-marker text-primary me-2"></i> {{ $user->address }}</h2>
                            </li>
                            @if (session('user_rool')==2)


                            @if (session('user_id'))
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal">
                                    Book Now
                                </button>
                            @else
                            <a href="{{route('login')}}">
                                <button type="button" class="btn btn-primary">
                                    Login
                                </button></a>
                            @endif
@endif
                            {{-- <a class="btn btn-primary btn-sm " href="#"   role="button">Book Now</a> --}}

                        </ul>
                    </div>
                </div>


                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="position-relative overflow-hidden pe-5 pt-5 h-100" style="min-height: 400px;">
                        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                                    class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                                    aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                                    aria-label="Slide 3"></button>
                            </div>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="{{ asset($car->image1) }}" class="d-block w-100" alt="...">

                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset($car->image2) }}" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset($car->image3) }}" class="d-block w-100" alt="...">
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button"
                                data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button"
                                data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                </div>
                {{-- @endforeach --}}
            </div>
        </div>
    </div>
    <!-- Features End -->


@endsection
