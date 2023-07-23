@extends('master')

@section('title')
    Add Blog
@endsection


@section('content')

    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">

                    <form action="{{route('update.blog', ['id'=>$blog->id])}}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Title</label>
                            <input type="text" class="form-control" name="title" id="title" aria-describedby="emailHelp"value="{{$blog->title}}">
                            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <input type="text" class="form-control" name="description" id="description" value="{{$blog->description}}">
                        </div>
                        <div class="mb-3 ">
                            <img src="{{asset("/$blog->image")}}"  alt="" height="100px" width="100px">
                            <label class="form-label" for="image">Choose your file</label>
                            <input type="file" class="form-control"  name="image" id="image">
                        </div>
                        <button type="submit" name="btn" class="btn btn-primary">Submit</button>

                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
