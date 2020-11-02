<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Belajar Apapun Disini --- GoodChoice</title>
    <!-- FONT -->
    <link href="https://fonts.googleapis.com/css?family=Viga" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/app.css')}}">
    <link rel="stylesheet" href="{{ asset('css/style.css')}}">
</head>
<body>
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand" href="#">GoodChoice</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ml-auto">
                    <a class="nav-item nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
                    <a class="nav-item nav-link" href="#">Kelas</a>
                    <a class="nav-item nav-link" href="#">Mentor</a>
                    <a class="nav-item nav-link" href="#">Fitur</a>
                    <a class="nav-item btn btn-primary btn-login pr-4 pl-4" href="#">Login</a>
                </div>
            </div>
        </div>
    </nav>
    <!-- JUMBOTRON -->
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">Upgrade Your Skill</h1>
            <p class="lead">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Incidunt, consequatur!</p>
            <a href="" class="btn btn-primary btn-login pl-3 pr-3">Daftar Sekarang </a>
        </div>
    </div>

    <!-- container -->
    <div class="container">
        <div class="row">
            <div class="col-lg-7 info-panel shadow-sm">
                <div class="row">
                    <div class="col-lg-4">
                        <img src="{{ asset('img/home.jpg')}}" alt="" class="img-fluid">
                    </div>
                    <div class="col-lg-8">
                        <h2>React Native</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis, fugit.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 info-panel shadow-sm ml-auto">
                <div class="row">
                    <div class="col-lg-4">
                        <img src="{{ asset('img/home.jpg')}}" alt="" class="img-fluid">
                    </div>
                    <div class="col-lg-8">
                        <h2>React Native</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis, fugit.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <img src="{{ asset('img/home.jpg')}}" alt="" class="img-fluid">
                    </div>
                    <div class="col-lg-8">
                        <h2>React Native</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis, fugit.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <img src="{{ asset('img/home.jpg')}}" alt="" class="img-fluid">
                    </div>
                    <div class="col-lg-8">
                        <h2>React Native</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis, fugit.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/app.js')}}""></script>
</body>
</html>