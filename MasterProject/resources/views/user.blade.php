@extends('layout.main')
@section('title', 'User Profile')





@section('content')
<section class="h-100 h-custom" style="background-color: #9fa9b8;">
<div class="container">
    <div class="main-body">

          <!-- Breadcrumb -->
          <nav aria-label="breadcrumb" class="main-breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.html"></a></li>
              <li class="breadcrumb-item"><a href="javascript:void(0)"></a></li>
              <li class="breadcrumb-item active" aria-current="page"></li>
            </ol>
          </nav>
          <!-- /Breadcrumb -->

          <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">

                    @if (isset($user->profileImage))
<img src="{{$user->profileImage}}" alt="Admin" class="rounded-circle" width="150">
                    @else
                    <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle" width="150">
                    @endif

                    <div class="mt-3">
                      <h4>{{$user->name}}</h4>
                      <p class="text-secondary mb-1">Email:{{$user->email}}</p>
                      <p class="text-muted font-size-sm">Address:{{$user->address}}</p>
                      <button class="btn btn-primary">Follow</button>
                      <button class="btn btn-outline-primary">Message</button>
                    </div>
                  </div>
                </div>
              </div>
              <form action="{{route('editprofile')}}" method="post" enctype="multipart/form-data">
                @csrf
                @if ($user->rool == 1)
              <div class="card mt-3">
                <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th>License Person</th>

                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td><div class="col-sm-9 text-secondary">
                            <input type="file" class="form-control" name='license_person_image' value="{{$user->image1}}">

                        </div></td>


                      </tr>
                      <tr>
                        <td>
                            @if (isset($user->license_person_image))
                            <img src="{{$user->license_person_image}}" alt="Admin"  width="300">
                         @endif

                        </td>


                      </tr>

                    </tbody>
                  </table>
                  <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th>License Car</th>

                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td><div class="col-sm-9 text-secondary">
                            <input type="file" class="form-control" name='license_car_image' value="{{$user->image1}}">

                        </div></td>


                      </tr>
                      <tr>
                        <td>

                            @if (isset($user->license_car_image))
                            <img src="{{$user->license_car_image}}" alt="Admin"  width="300" >
                         @endif
                        </td>


                      </tr>

                    </tbody>
                  </table>
              </div>
              @endif
            </div>
            <div class="col-md-8">
              <div class="card mb-3">
                <div class="card-body">
                    <h1>Personal Data</h1>

                  <div class="row">

                    <div class="col-sm-3">
                      <h6 class="mb-0">Full Name</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        <input type="text" class="form-control" name='name' value="{{$user->name}}">

                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Email</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        <input type="text" class="form-control" name='email' value="{{$user->email}}">

                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Phone</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        <input type="text" class="form-control" name='phone' value="{{$user->phone}}">

                    </div>

                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Image</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        <input type="file" class="form-control" name='profileImage' value="{{$user->profileImage}}">

                    </div>

                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Address</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        <input type="text" class="form-control" name='address' value="{{$user->address}}">
                        <input type="hidden" class="form-control" name='password' value="{{$user->password}}">


                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-12">
                        <button type="submit" class="btn btn-primary">Edit</button>
                    </div>

                  </div>

                </div>
              </div>
@if ($user->rool == 1)


              <div class="row gutters-sm">

                <div class="col-sm-12 mb-3">
                  <div class="card h-100">
                    <div class="card-body">
<h1>Car Images</h1>
                        <table class="table table-bordered">
                            <thead>
                              <tr>
                                <th>First Image</th>
                                <th>Secound Image</th>
                                <th>Theard Image</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td><div class="col-sm-9 text-secondary">
                                    <input type="file" class="form-control" name='image1' value="{{$user->image1}}">

                                </div></td>
                                <td><div class="col-sm-9 text-secondary">
                                    <input type="file" class="form-control" name='image2' value="{{$user->image2}}">

                                </div></td>
                                <td><div class="col-sm-9 text-secondary">
                                    <input type="file" class="form-control" name='image3' value="{{$user->image3}}">

                                </div></td>
                              </tr>
                              <tr>
                                <td>
                                    @if (isset($user->image1))
                                    <img src="{{$user->image1}}" alt="Admin"  width="200">
                                 @endif
                                </td>
                                <td>
                                    @if (isset($user->image2))
                                    <img src="{{$user->image2}}" alt="Admin"  width="200">
                                 @endif
                                </td>
                                <td>
                                    @if (isset($user->image3))
                                    <img src="{{$user->image3}}" alt="Admin"  width="200">
                                 @endif
                                </td>
                              </tr>

                            </tbody>
                          </table>
                          <button type="submit" class="btn btn-primary">ِAdd Images</button>


                    </div>
                  </div>
                </div>
              </div>
            </form>
            @endif


            </div>
          </div>

        </div>
    </div>
</section>
@endsection
