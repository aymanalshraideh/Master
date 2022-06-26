@extends('layout.main')
@section('title', 'register')





@section('content')

    <section class="h-100 h-custom" style="background-color: #9fa9b8;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-lg-8 col-xl-6">
                    <div class="card rounded-3">

                        <div class="card-body p-4 p-md-5">
                            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 px-md-2">Registration</h3>

                            <form class="px-md-2">

                                <div class="form-outline mb-4">
                                    <label class="form-label" for="form3Example1q">Name</label>
                                    <input type="text" class="form-control" placeholder="ex:Ayman AlShraideh">

                                </div>
                                <div class="form-outline datepicker">
                                      <label for="" class="form-label">Email</label>
                                    <input type="email" class="form-control" placeholder="examble@sa.sa">

                                </div>
                                <div class="form-outline datepicker">
                                    <label for="" class="form-label">Mobile Number</label>
                                    <input type="number" class="form-control" placeholder="07*******">

                                </div>
                                <div class="form-outline datepicker">
                                    <label for="" class="form-label">Password</label>
                                    <input type="password" class="form-control" placeholder="**********">

                                </div>

                                <div class="form-outline datepicker">
                                    <label for="" class="form-label">Confirm the password</label>
                                    <input type="password" class="form-control" placeholder="**********">

                                </div>







                                <button type="submit" class="btn btn-success btn-lg mb-1">Submit</button>

                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
