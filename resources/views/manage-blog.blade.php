@extends('master')

@section('title')
     Manage Blog
@endsection

@section('content')

    <div class="container py-4">
        <div class="row">
            <div class="col-md-8">
                <table class="table table-hover table-bordered">
                    <tr>
                      <th>id</th>
                      <th>Title</th>
                      <th>image</th>
                      <th>description</th>
                      <th>Action</th>
                    </tr>
                    @foreach($blogs as $blog)
                        <tr>
                            <td>{{$blog->id}}</td>
                            <td>{{$blog->title}}</td>
                            <td><img src="{{asset("/$blog->image")}}" height="100px" width="100px" alt=""></td>
                            <td>{{$blog->description}}</td>
                            <td><a href="{{route('edit.blog',['id'=>$blog->id])}}" class="btn btn-secondary">Edit</a><a href="{{route('delete.blog',['id'=>$blog->id])}}" class="btn btn-danger">Delete</a></td>
                        </tr>

                    @endforeach
                </table>
            </div>
        </div>
    </div>

@endsection
