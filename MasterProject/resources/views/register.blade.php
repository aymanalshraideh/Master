@extends('layout.main')
@section('title', 'register')





@section('content')

    <section class="h-100 h-custom" style="background-color: #9fa9b8;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-lg-8 col-xl-6">
                    <div class="card rounded-3">
                        @if (session('status'))
                        <div class="alert alert-success">

                            {{ session('status') }}<i class="fa fa-check" aria-hidden="true"></i>

                        </div>
                    @endif
                        <div class="card-body p-4 p-md-5">
                            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 px-md-2">Registration</h3>

                            <form method="post" action="{{route('register')}}">
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

                                <div class="form-outline datepicker">
                                    @error('rool')
                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                                    <label for="" class="form-label">Mobile Number</label>
                                    <select class="form-select" aria-label="Default select example" name="rool">
                                        <option selected>Open this select menu</option>
                                        <option value="1">Driver</option>
                                        <option value="2">passenger</option>

                                      </select>


                                </div>


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
            </div>
        </div>
    </section>
@endsection
