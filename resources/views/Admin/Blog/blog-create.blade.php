@extends('Admin.layouts.main')

@section('content')
    <div class="container mt-4">
        <div class="card">
            <div class="card-body">
                <form>
                    <div class="row">
                        <div class="col-3">
                            <label for="exampleFormControlInput1">Title</label>
                        </div>
                        <div class="col-9">
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Title">
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-3">
                            <label for="exampleFormControlInput1">Title</label>
                        </div>
                        <div class="col-9">
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Title">
                        </div>
                    </div>
                    <div class="form-group">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput2">Category</label>
                        <input type="text" class="form-control" id="exampleFormControlInput2" placeholder="Category">
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Description</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
