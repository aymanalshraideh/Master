@extends('layout.main')
@section('title','vehicles')

@section('vehicles','active')

@section('content')



    <!-- Page Header Start -->
    <div class="container-fluid page-header py-6 my-6 mt-0 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center">
            <h1 class="display-4 text-white animated slideInDown mb-4">Vehicles</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                    {{-- <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li> --}}
                    <li class="breadcrumb-item text-primary active" aria-current="page">{{$category->category_name}}</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Courses Start -->
    <div class="container-xxl courses my-6 py-6 pb-0">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <h6 class="text-primary text-uppercase mb-2">Services</h6>
                <h1 class="display-6 mb-4">{{$category->category_name}} that you can Rent with driver</h1>
            </div>
            <div class="row g-4 justify-content-center">
@foreach ($cars as $item)
<div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
    <div class="courses-item d-flex flex-column bg-white overflow-hidden h-100">
        <div class="text-center p-4 pt-0">
            <div class="d-inline-block bg-primary text-white fs-5 py-1 px-4 mb-4"></div>
            <h5 class="mb-3">{{$item->car_model}}</h5>
            {{-- <p>Tempor erat elitr rebum at clita dolor diam ipsum sit diam amet diam et eos</p> --}}
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item small"><i class="fa fa-signal text-primary me-2"></i>Beginner</li>
                <li class="breadcrumb-item small"><i class="fa fa-calendar-alt text-primary me-2"></i>3 Week</li>
            </ol>
        </div>
        <div class="position-relative mt-auto">
            <img class="img-fluid" src="{{asset($item->image1)}}" alt="">
            <div class="courses-overlay">
                <a class="btn btn-outline-primary border-2" href="{{route('singleCar',['id'=>$item->id])}}">See More</a>
            </div>
        </div>
    </div>
</div>
@endforeach
                <div class="col-lg-8 my-6 mb-0 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="bg-primary text-center p-5">


                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Courses End -->
    @endsection
