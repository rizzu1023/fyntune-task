@extends('Admin.layouts.main')

@section('content')
    <div class="container mt-4">
        <div class="card">
            <div class="card-body">
                <form method="POST" action="{{ Route('blogs.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-3">
                            <label for="exampleFormControlInput0">Image</label>
                        </div>
                        <div class="col-9">
                            <input type="file" class="form-control" id="exampleFormControlInput0" placeholder="Title"  name="image_path">
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-3">
                            <label for="exampleFormControlInput1">Title</label>
                        </div>
                        <div class="col-9">
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Title" required name="title">
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-3">
                            <label for="exampleFormControlInput2">Category</label>
                        </div>
                        <div class="col-9">
                            <input type="text" class="form-control" id="exampleFormControlInput2" placeholder="Category" required name="category">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row mt-4">
                            <div class="col-3">
                                <label for="exampleFormControlTextarea1">Description</label>

                            </div>
                            <div class="col-9">
                                <textarea class="form-control" id="exampleFormControlTextarea1" name="description" rows="3" required=""></textarea>

                            </div>
                        </div>
                    </div>
                    <a type="button" href="/admin/blogs" class="btn btn-success float">Back</a>
                    <button type="submit" class="btn btn-primary float-right">Add Blog</button>
                </form>
            </div>
        </div>
    </div>
@endsection
