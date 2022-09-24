@extends('layout.main')
@section('title','Content')

@section('contact','active')

@section('content')



    <!-- Page Header Start -->
    <div class="container-fluid page-header py-6 my-6 mt-0 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center">
            <h1 class="display-4 text-white animated slideInDown mb-4">Contact Us</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">Contact</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


     <!-- Contact Start -->
     <div class="container-xxl py-6">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 450px;">
                    <div class="position-relative h-100">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d108341.99318386515!2d35.9071744!3d31.942246400000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sar!2sjo!4v1664013632771!5m2!1sar!2sjo" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">

                    @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
                    <h6 class="text-primary text-uppercase mb-2">Contact Us</h6>
                    <h1 class="display-6 mb-4"> Contact Us Whether you have a question</h1>
                    <p class="mb-4">  we’re happy to hear from you.
                    <form  action="{{route('mstore')}}" method="post">
                        @csrf
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control border-0 bg-light" name="name" placeholder="Your Name">
                                    <label for="name">Your Name</label>
                                    @error('name')
                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control border-0 bg-light" name="email" placeholder="Your Email">
                                    <label for="email">Your Email</label>
                                    @error('email')
                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control border-0 bg-light" name="subject" placeholder="Subject">
                                    <label for="subject">Subject</label>
                                    @error('subject')
                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control border-0 bg-light" placeholder="Leave a message here" name="message" style="height: 150px"></textarea>
                                    <label for="message">Message</label>
                                    @error('message')
                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary py-3 px-5" type="submit">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->



    @endsection
