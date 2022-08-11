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
                      <h4>{{$user->fname.' '.$user->lname}}</h4>
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
                      <h6 class="mb-0">First Name</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        <input type="text" class="form-control" name='fname' value="{{$user->fname}}">

                    </div>
                  </div>
                  <hr>
                  <div class="row">

                    <div class="col-sm-3">
                      <h6 class="mb-0">Last Name</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        <input type="text" class="form-control" name='lname' value="{{$user->lname}}">

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


            </form>

            <div class="row gutters-sm">

                <div class="col-sm-12 mb-3">
                  <div class="card h-100">
                    <div class="card-body">
<h1>Add Car</h1>
@if (session('status'))
<div class="alert alert-success">

    {{ session('status') }}<i class="fa fa-check" aria-hidden="true"></i>

</div>
@endif
@if ($user->rool == 1 ||$user->rool == 2)


<form method="post" action='{{route('addcar')}}' enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="user_id" value='{{$user->id}}'>
    <div class="form-group">
      <label for="exampleFormControlInput1">Car Model</label>
      <input type="text" class="form-control" name='car_model' id="exampleFormControlInput1" >
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput1">Car Number</label>
        <input type="text" class="form-control" name='car_number' id="exampleFormControlInput1" >
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">Car Color</label>
        <input type="text" class="form-control" name='car_color' id="exampleFormControlInput1" >
      </div>
    <div class="form-group">
        <label for="exampleFormControlInput1">Car image 1</label>
        <input type="file" class="form-control" name='image1' id="exampleFormControlInput1" >
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">Car image 2</label>
        <input type="file" class="form-control" name='image2' id="exampleFormControlInput1" >
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">Car image 3</label>
        <input type="file" class="form-control " name='image3' id="exampleFormControlInput1" >
      </div>
    <div class="form-group">
      <label for="exampleFormControlSelect1">Category</label>
      <select class="form-control" id="exampleFormControlSelect1" name='category_id'>
       @foreach ($category as $item)
<option value='{{$item->id}}'>{{$item->category_name}}</option>
       @endforeach


      </select>
    </div>

    <div class="form-group">
      <label for="exampleFormControlTextarea1">Car Description</label>
      <textarea class="form-control" id="exampleFormControlTextarea1" name='car_description' rows="3"></textarea>
    </div>

                          <button type="submit" class="btn btn-primary">ِAdd Car</button>

</form> @endif
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>

        </div>
    </div>
</section>
@endsection
