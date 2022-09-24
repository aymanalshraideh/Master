@extends('dashboard.layout.main')
@section('title','messages')
@section('message','active')
@section('content')



 <!-- Form Start -->
 <div class="container-fluid pt-4 px-4">

    <div class="row g-4">  @foreach ($message as $item)
        <div class="col-sm-12 col-xl-6">



            <div class="bg-secondary rounded h-100 p-4">
                <h6 class="mb-4">{{$item->name}}</h6>

<div class="alert alert-secondary " role="alert">
<h4 class="alert-heading">Subject:{{$item->subject}}</h4>
<p>{{$item->email}}</p>
<hr>

<p class="mb-0">message:{{$item->message}}</p>
</div>


            </div>

        </div> @endforeach </div>
</div>
@endsection
