@extends('Admin.layouts.main')

@section('content')
    <div class="container mt-4">
        <div class="card">
            <div class="card-body">
                <form method="POST" action="{{ Route('blogs.update',$blog->id) }}">
                    @method('PUT')
                    @csrf
                    <div class="row">
                        <div class="col-3">
                            <label for="exampleFormControlInput1">Title</label>
                        </div>
                        <div class="col-9">
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Title" value="{{$blog['title']}}" required name="title">
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-3">
                            <label for="exampleFormControlInput2">Category</label>
                        </div>
                        <div class="col-9">
                            <input type="text" class="form-control" id="exampleFormControlInput2" placeholder="Category" value="{{$blog['category']}}" required name="category">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row mt-4">
                            <div class="col-3">
                                <label for="exampleFormControlTextarea1">Description</label>

                            </div>
                            <div class="col-9">
                                <textarea class="form-control" id="exampleFormControlTextarea1" name="description" rows="3" required="">{{$blog->description}}</textarea>

                            </div>
                        </div>
                    </div>
                    <a type="button" href="/admin/blogs" class="btn btn-success float">Back</a>
                    <button type="submit" class="btn btn-primary float-right">Update Blog</button>
                </form>
            </div>
        </div>
    </div>
@endsection
