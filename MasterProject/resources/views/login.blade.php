@extends('layout.main')
@section('title', 'LogIn')





@section('content')

    <section class="h-100 h-custom" style="background-color: #9fa9b8;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-lg-8 col-xl-6">
                    <div class="card rounded-3">

                        <div class="card-body p-4 p-md-5">
                            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 px-md-2">Log In</h3>
                            @if (session('danger'))
                            <div class="alert alert-danger">

                                {{ session('danger') }}<i class="fa fa-check" aria-hidden="true"></i>

                            </div>
                        @endif
                            <form class="px-md-2" method="post" action={{route('login')}}>
@csrf
                                <div class="form-outline mb-4">
                                    @error('email')
                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                                    <label class="form-label" for="form3Example1q">Email</label>
                                    <input type="text" id="form3Example1q" class="form-control" name="email" />

                                </div>
                                        <div class="form-outline datepicker">
                                            @error('password')
                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                                            <label for="exampleDatepicker1" class="form-label">Password</label>
                                            <input type="password" class="form-control"  name="password" />

                                        </div>

                                <button type="submit" class="btn btn-success btn-lg mb-1">Log In</button>

                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
