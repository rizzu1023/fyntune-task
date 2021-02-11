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
        {{--        <ul class="navbar-nav mr-auto">--}}
        {{--            <li class="nav-item active">--}}
        {{--                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>--}}
        {{--            </li>--}}
        {{--            <li class="nav-item">--}}
        {{--                <a class="nav-link" href="#">Features</a>--}}
        {{--            </li>--}}
        {{--            <li class="nav-item">--}}
        {{--                <a class="nav-link" href="#">Pricing</a>--}}
        {{--            </li>--}}
        {{--        </ul>--}}
        <div class="mr-auto"></div>
        <a href="/login" class="mr-3">Login</a>
        <a href="/register ">Register</a>

    </div>
</nav>

<body>

<div class="container my-5" >
    <div class="card" style="border-radius: 0">
        <img class="img-fluid w-100" height="auto" src="{{ asset('blog/images/'.$blog['image_path']) }}" alt="blog-image">

        <div class="card-body">
            <h4>{{$blog->title}}</h4>
            <h6 class="mt-5">Category : <b>{{$blog->category}}</b></h6>
            <p class="mt-5">{{$blog->description}}</p>
            <span class="text-muted">Published At :  {{date('d-M-Y h:i A',strtotime($blog->created_at))}}</span>
        </div>
    </div>

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
