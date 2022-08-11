@extends('dashboard.layout.main')
@section('title','Drivers')
@section('drivers','active')
@section('content')







            <!-- Table Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-6">

                    </div>
                    <div class="col-sm-12 col-xl-6">

                    </div>
                    <div class="col-sm-12 col-xl-6">

                    </div>
                    <div class="col-sm-12 col-xl-6">

                    </div>
                    <div class="col-sm-12 col-xl-6">

                    </div>
                    <div class="col-sm-12 col-xl-6">

                    </div>
                    <div class="col-12">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">Responsive Table</h6>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">First Name</th>
                                            <th scope="col">Last Name</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Phone</th>
                                            <th scope="col">Image 2</th>
                                            <th scope="col">Image 3</th>
                                            {{-- <th scope="col">User Profile</th> --}}
                                            <th scope="col">Action</th>
                                            <th scope="col">Activation</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($users as $item)

                                        <tr>
                                            <th scope="row">1</th>
                                            <td>{{$item->fname}}</td>
                                            <td>{{$item->lname}}</td>
                                            <td>{{$item->email}}</td>
                                            <td>{{$item->phone}}</td>
                                            <td> <img src="{{$item->license_car_image}}" alt="" width="100">  </td>
                                            <td> <img src="{{$item->license_person_image}}" alt="" width="100">  </td>
                                            @if ($item->rool==1)
<td>Not Active</td>
@else
<td> Active</td>

                                            @endif


                                            {{-- <td><img src="{{$item->profileImage}}" alt="Admin"  width="200"></td> --}}
                                            <td> <a href="{{route('active',['id'=>$item->id])}}"><button type="button" class="btn btn-success rounded-pill m-2"><i class="bi bi-caret-right-fill">Active</i></button></a>
                                                <a href="{{route('deletedriver',['id'=>$item->id])}}">  <button type="button" class="btn btn-danger rounded-pill m-2"><i class="bi bi-trash"></i></button></a>

                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!-- Table End -->



        </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    @endsection
