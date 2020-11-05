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
    <link href="{{ asset('backend/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
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
                    <span class="topbar-divider"></span>
                    <a class="nav-item nav-link daftar" href="#">Daftar</a>
                    <a class="nav-item btn btn-primary btn-login pr-4 pl-4 pt-2 pb-2" href="#">Login</a>
                </div>
            </div>
        </div>
    </nav>
    <!-- JUMBOTRON -->
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <p class="display-4">
                Get the latest <span>knowledge</span><br>and <span>improve</span> your skills
            </p>
            <p class="lead">Membangun keterampilan dengan kursus, sertifikat<br>
                dan gelar online dari universitas dan perusahaan kelas dunia</p>
            <a href="" class="btn btn-primary btn-login pr-4 pl-4 pt-2 pb-2">Daftar Sekarang </a>
        </div>
    </div>

    <!-- container -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-3 info-panel shadow-sm">
                <i class="fas fa-desktop fa-3x float-left mr-3 mb-3"></i>
                <h4>Learn Online</h4>
                <p>Belajar keterampilan apapun secara online</p>
            </div>
            <div class="col-lg-3 info-panel shadow-sm">
                <i class="fas fa-chalkboard-teacher fa-3x float-left mr-3 mb-3"></i>
                <h4>Expert Mentors</h4>
                <p>Dilatih oleh mentor yang berpengalaman</p>
            </div>
            <div class="col-lg-3 info-panel shadow-sm">
                <i class="fas fa-clock fa-3x float-left mr-3 mb-3"></i>
                <h4>Life time access</h4>
                <p>Mendapatkan fitur hak akses kelas selamanya</p>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/app.js')}}""></script>
</body>
</html>