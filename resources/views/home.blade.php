@extends('master')

@section('title')
    Home
@endsection

@section('content')

    <div class="container py-4">
        <div class="row">
           @foreach($blogs as $blog)
            <div class="col-md-4 py-2">
                <div class="card" style="width: 18rem;">
                    <img src="{{asset("/$blog->image")}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{$blog->title}}</h5>
                        <p class="card-text">{{$blog->description}}</p>
                        <a href="{{route('blog.details', ['id'=> $blog->id])}}" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>

            @endforeach
        </div>
    </div>

@endsection
