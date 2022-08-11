@extends('dashboard.layout.main')
@section('title','Drivers')
@section('category','active')
@section('content')


 <!-- Form Start -->
 <div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-sm-12 col-xl-12">
            <div class="bg-light rounded h-100 p-4">
                @if (session('status'))
                <div class="alert alert-success">

                    {{ session('status') }}<i class="fa fa-check" aria-hidden="true"></i>

                </div>
            @endif
                <h6 class="mb-4">Add Category</h6>
                <form method="post" action="{{route('addcategory')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label  class="form-label">Category Name</label>
                        <input type="text" class="form-control" name="category_name">

                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Category Image</label>
                        <input type="file" class="form-control" name="category_image">
                    </div>

                    <button type="submit" class="btn btn-primary">Add</button>
                </form>
            </div>
        </div>






    </div>
</div>
<!-- Form End -->
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
                                <th scope="col">Category Name</th>

                                <th scope="col">Category Image</th>
                                <th scope="col">Action</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($category as $item)


                            <tr>
                                <th scope="row">{{$item->id}}</th>
                                <td>{{$item->category_name}}</td>
                                <td><img src="{{$item->category_image}}" alt="" width="100"> </td>

                                <td>
                                {{-- <a href="{{route('singleCategory',['id'=>$item->id])}}"><button type="button" class="btn btn-info rounded-pill m-2"><i class="bi bi-pencil-square"></i></button></a> --}}
                                <a href="{{route('deleteCategory',['id'=>$item->id])}}">  <button type="button" class="btn btn-danger rounded-pill m-2"><i class="bi bi-trash"></i></button></a>
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
