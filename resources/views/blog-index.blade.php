<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Blog Application</title>
</head>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="/">Blog Application</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText"
            aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">

        <div class="mr-auto"></div>
        <a href="/login" class="mr-3">Login</a>
        <a href="/register ">Register</a>

    </div>
</nav>

<body>

<div class="container my-5">
    <form>

        <div class="form-group">
            <div class="row">
                <div class="col-2">
                    <label for="exampleFormControlSelect1">Filter By Category</label>

                </div>
                <div class="col-3">
                    <select class="form-control" id="exampleFormControlSelect1" onchange="category_selected(this)" name="category">
                        <option selected disabled>{{$selected_category}}</option>
                        <option value="All">All</option>
                        @foreach($categories as $category)
                        <option value="{{$category->category}}">{{$category->category}}</option>
                        @endforeach
                    </select>
                </div>
            </div>

        </div>


    </form>
    @foreach($blogs as $blog)
    <div class="card mb-3" style="border-radius: 0">
        <div class="row no-gutters">
            <div class="col-md-4">
                <img class="img-fluid w-100" height="auto" src="{{ asset('blog/images/'.$blog['image_path']) }}" alt="blog-image">

            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h4 class="card-title">{{$blog->title}}</h4>
                    <span class="text-muted">Category : {{ $blog->category}}</span>
                    <p class="card-text mt-2">{{ \Illuminate\Support\Str::limit($blog->description, 200, $end='...') }}</p>
                    <a href="/blog/{{$blog->id}}">Read more</a>
                    <span class="text-muted float-right"> {{date('d-M-Y h:i A',strtotime($blog->created_at))}}</span>
                </div>
            </div>
        </div>
    </div>
@endforeach
        {!! $blogs->links() !!}
</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<script>
    function category_selected(category){
        var href = '/?category=' +category.value;
        location.href = href;
    }
</script>
</body>
</html>
