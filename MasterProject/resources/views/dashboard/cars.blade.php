@extends('dashboard.layout.main')
@section('title','Drivers')
@section('Cars','active')
@section('content')



<!-- Table Start -->
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">




        <div class="col-12">
            <div class="bg-light rounded h-100 p-4">
                <h6 class="mb-4">Responsive Table</h6>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Car Model</th>

                                <th scope="col">Owner Name</th>
                                <th scope="col">Image 1</th>
                                <th scope="col">Image 2</th>
                                <th scope="col">Image 3</th>
                                <th scope="col">Car Description</th>
                                <th scope="col">Car Number</th>
                                <th scope="col">Car Color</th>
                                <th scope="col">Car Category</th>

                                <th scope="col">Action</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($cars as $item)


                            <tr>
                                <th scope="row">{{$item->id}}</th>
                                <td>{{$item->car_model}}</td>

                                <td>{{$item->fname.' '.$item->lname}}</td>
                                <td> <img src="{{$item->image1}}" alt="" width="100">  </td>
                                <td> <img src="{{$item->image2}}" alt="" width="100">  </td>
                                <td> <img src="{{$item->image3}}" alt="" width="100">  </td>
                                <td>{{$item->car_description}}</td>
                                <td>{{$item->car_number}}</td>
                                <td>{{$item->car_color}}</td>
                                <td>{{$item->category_name}}</td>



                                <td>
                                {{-- <a href="{{route('singleCategory',['id'=>$item->id])}}"><button type="button" class="btn btn-info rounded-pill m-2"><i class="bi bi-pencil-square"></i></button></a> --}}
                                <a href="{{route('deleteCar',['id'=>$item->id])}}">  <button type="button" class="btn btn-danger rounded-pill m-2"><i class="bi bi-trash"></i></button></a>
                                </td>
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
@endsection
