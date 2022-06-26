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

                            <form class="px-md-2">

                                <div class="form-outline mb-4">
                                    <input type="text" id="form3Example1q" class="form-control" />
                                    <label class="form-label" for="form3Example1q">Name</label>
                                </div>
                                        <div class="form-outline datepicker">
                                            <input type="password" class="form-control"  />
                                            <label for="exampleDatepicker1" class="form-label">Password</label>
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
