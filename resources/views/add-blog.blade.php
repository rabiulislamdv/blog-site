@extends('master')

@section('title')
   Add Blog
@endsection


@section('content')

    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <h3 class="text-bg-danger">{{Session::get('msg')}}</h3>
                    <form action="{{route("new.blog")}}" method="POST" enctype="multipart/form-data">
                        @csrf

                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Title</label>
                                <input type="text" class="form-control" name="title" id="title" aria-describedby="emailHelp">
                                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                            </div>
                            <div class="mb-3">
                                <label for="description" class="form-label">Description</label>
                                <input type="text" class="form-control" name="description" id="description">
                            </div>
                            <div class="mb-3 ">
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
