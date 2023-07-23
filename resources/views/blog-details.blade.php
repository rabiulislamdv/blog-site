@extends('master')

@section('title')
    Blog Details
@endsection

@section('content')

    <div class="container py-4">
        <div class="row">
           <div class="col-md-8">
               <h2>{{$blog->title}}</h2>
               <img src="{{asset("/$blog->image")}}" alt="" width="200px" height="200px">
               <p>{{$blog->description}}</p>
           </div>
        </div>
    </div>

@endsection
