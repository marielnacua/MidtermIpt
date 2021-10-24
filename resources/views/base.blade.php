<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/app.css">
    <title>CheapTalk</title>
</head>
<style>
    .bg{
    background-image: url("/back.jpg");
    background-size: cover;
}
</style>
<body class="bg">
    <nav class="navbar navbar-expand-lg bg-gradient text-uppercase fixed-top" id="mainNav" style="background-color: #5885AF;">
        <div class="container">
        <a class="navbar-brand" href="#" style="font-weight: bold; color: black;">CheapTalk</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ms-auto ">                      
                    @if (!Auth::check())
                    <li class="nav-item mx-0 mx-lg-1"><a class="text-white nav-link py-3 px-0 px-lg-3 rounded" href="/login">Log In</a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="text-white nav-link py-3 px-0 px-lg-3 rounded" href="/register">Register</a></li>
                   @else
                   <li class="nav-item mx-0 mx-lg-1"><a class="text-white nav-link py-3 px-0 px-lg-3 rounded" href="/dashboard">Dashboard</a></li>
                   <li class="nav-item mx-0 mx-lg-1 dropdown">
                        <a class="nav-link dropdown-toggle text-white nav-link py-3 px-0 px-lg-3 rounded" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="far fa-list-alt"></i> Category
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            @foreach(App\Models\Category::get() as $category)
                            <li>
                                <a class="dropdown-item" href="/categories/{{$category->id}}">{{$category->category}}</a>
                            </li>
                            @endforeach
                        </ul>
                    </li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="text-white nav-link py-3 px-0 px-lg-3 rounded" href="/authors"><i class="fas fa-users"></i> Authors</a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="text-white nav-link py-3 px-0 px-lg-3 rounded" href="/logout"><i class="fas fa-sign-out"></i> Log Out</a></li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>
    @if (session('Error'))
    <br><br>
        <div class="alert alert-danger">
            <div class="container">
                {{session('Error')}}
            </div>
        </div>
    @endif
    @if (session('Message'))
    <br><br>
        <div class="alert alert-info">
            <div class="container">
                {{session('Message')}}
            </div>
        </div>
    @endif
    @if(session('errors'))
    <br><br>
        <div class="alert alert-danger">
            <div class="container">
                Please fix the following error.
                <ul>
                    @foreach(session('errors')->all() as $error)
                    <li>{{$error}}</li>
                    @endforeach 
                </ul>
            </div>
        </div>
    @endif
    <div class="container">
        @yield('content')
    </div>

</body>
</html>