<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>My Contact</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Varela+Round">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <!-- Style -->
    <link href="assets/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/custom.css" rel="stylesheet">
</head>
<body>
<!-- navbar -->
<nav class="navbar navbar-expand-lg bg-light">
    <div class="container">
        <a class="navbar-brand text-uppercase" href="{{'contact.index'}}">
            <strong><i class="bi bi-person-lines-fill me-1"></i>Contact</strong> App
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="#">Company</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="{{route('contacts.index')}}">Contact</a>
                </li>
            </ul>
            <form class="d-flex" role="search">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item mx-1"><a href="{{route('login')}}" class="btn btn-outline-primary"><i class="bi bi-box-arrow-in-right me-1"></i>Login</a></li>
                    <li class="nav-item mx-1"><a href="{{route('register')}}" class="btn btn-outline-primary"><i class="bi bi-person-plus-fill me-1"></i></i>Register</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            John Doe
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="profile.html">Settings</a></li>
                            <li><a class="dropdown-item" href="#">Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </form>
        </div>
    </div>
</nav>
@yield('content')
<script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
</body>
</html>
