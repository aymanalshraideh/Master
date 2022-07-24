@extends('dashboard.layout.main')
@section('title','Admin Home')
@section('adminhome','active')
@section('content')



        <!-- Sign Up Start -->
        {{-- <div class="container-fluid"> --}}
            <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
                <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
                    <div class="bg-light rounded p-4 p-sm-5 my-4 mx-3">
                        @if (session('status'))
                        <div class="alert alert-success">

                            {{ session('status') }}<i class="fa fa-check" aria-hidden="true"></i>

                        </div>
                    @endif
                        <form method="post" action="{{route('registerAdmin')}}">
                            @csrf
                                <div class="form-outline mb-4">
                                    @error('name')
                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                                    <label class="form-label" for="form3Example1q">Name</label>
                                    <input type="text" class="form-control" name="name" placeholder="ex:Ayman AlShraideh">

                                </div>
                                <div class="form-outline datepicker">
                                    @error('email')
                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                                      <label for="" class="form-label">Email</label>
                                    <input type="email" class="form-control" name="email"  placeholder="examble@sa.sa">

                                </div>
                                <div class="form-outline datepicker">
                                    @error('phone')
                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                                    <label for="" class="form-label">Mobile Number</label>
                                    <input type="number" class="form-control" name="phone" placeholder="07*******">

                                </div>

                              <input type="hidden" name="rool" value="10">


                                <div class="form-outline datepicker">
                                    @error('password')
                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                                    <label for="" class="form-label">Password</label>
                                    <input type="password" class="form-control" name="password" placeholder="**********">

                                </div>

                                <div class="form-outline datepicker">
                                    @error('cpassword')
                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                                    <label for="" class="form-label">Confirm the password</label>
                                    <input type="password" class="form-control" name="cpassword" placeholder="**********">

                                </div>







                                <button type="submit" class="btn btn-success btn-lg mb-1"><i class="fa fa-user-plus" aria-hidden="true">Submit </i></button>
                                <a href="login">Already have account!</a>
                            </form>

                    </div>
                </div>
            </div>
        {{-- </div> --}}
        <!-- Sign Up End -->

    @endsection
