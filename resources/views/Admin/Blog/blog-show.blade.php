@extends('Admin.layouts.main')

@section('content')
    <div class="container mt-4">
        <div class="card">
            <div class="card-body">
                    <div class="row">
                        <div class="col-3">
                            <label for="exampleFormControlInput1">Title</label>
                        </div>
                        <div class="col-9">
                            <span>{{$blog['title']}}</span>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-3">
                            <label for="exampleFormControlInput2">Category</label>
                        </div>
                        <div class="col-9">
                            <span>{{$blog['category']}}</span>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row mt-4">
                            <div class="col-3">
                                <span for="exampleFormControlTextarea1">Description</span>
                            </div>
                            <div class="col-9">
                                <span>{{$blog['description']}}</span>
                            </div>
                        </div>
                    </div>
                <div class="row my-4">
                    <div class="col-3">
                        <span>Created At</span>
                    </div>
                    <div class="col-9">
                        <span>{{ date('d-M-Y',strtotime($blog['created_at'])) }}</span>
                    </div>
                </div>
                    <a type="button" href="/admin/blogs" class="btn btn-success float">Back</a>
                    <a  class="btn btn-primary float-right" href="/admin/blogs/{{$blog->id}}/edit">Edit Blog</a>
            </div>
        </div>
    </div>
@endsection
