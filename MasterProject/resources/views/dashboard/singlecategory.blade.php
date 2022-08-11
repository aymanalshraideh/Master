@extends('dashboard.layout.main')
@section('title','singlecategory')
{{-- @section('singlecategory','active') --}}
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
                <form method="post" action="" enctype="multipart/form-data">
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

@endsection
