@extends('Admin.layouts.main')

@section('content')
    <div class="container mt-4">
        @include('Admin.layouts.message')
        <div class="card">
            <div class="card-header">
                Blogs
                <a type="button" style="float: right" class="btn btn-sm btn-success" href="/admin/blogs/create">Create Blog</a>

            </div>
            <div class="card-body">
                <table class="table">
                    <thead class="thead-light">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Title</th>
                        <th scope="col">Category</th>
                        <th scope="col">Created At</th>
                        <th scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($blogs as $blog)
                    <tr>
                        <th scope="row">{{$loop->iteration}}</th>
                        <td>{{ $blog->title }}</td>
                        <td>{{ $blog->category }}</td>
                        <td>{{ date('d-M-Y',strtotime($blog->created_at)) }}</td>
                        <td>
                            <a type="button" class="btn btn-sm btn-primary" href="/admin/blogs/{{$blog->id}}">Show</a>
                            <a type="button" class="btn btn-sm btn-success" href="/admin/blogs/{{$blog->id}}/edit">Edit</a>
{{--                            <button type="button" class="btn btn-sm btn-danger">Delete</button>--}}
                            <form style="display:inline-block" method="POST"
                                  action="/admin/blogs/{{$blog->id}}">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this team?')"> Delete </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach

                    </tbody>
                </table>
                {!! $blogs->links() !!}
            </div>
        </div>


    </div>
@endsection
