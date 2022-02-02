<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="{{ asset('images/LogoWebMemofy.png') }}" rel="shortcut icon" type="image/x-icon" />
    <link rel="stylesheet" href="{{ asset('css/style.css')}}">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Overpass&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Staatliches&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Mochiy+Pop+P+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Acme&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css">

    <title>Hello, world!</title>
    <!-- Styles -->
    <style>
        body {
            font-family: 'Nunito Sans', sans-serif;
            background-color: #f8f8f8;
        }

        .btn-block {
            width: 65% !important;
            /* border-radius: 3rem !important; */
            margin-top: 1rem;
        }

        .list-group-item {
            background-color: #f1f1f1 !important;
            border: none !important;
            text-align: left !important;
            margin-right: 2rem !important;
        }

        .card-body {
            background-color: #f1f1f1 !important;
        }

    </style>
</head>

<body>
    {{-- <nav class="navbar navbar-expand-lg navbar-light pt-3" style="background-color: #f8f8f8;">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('images/Header-Web.png') }}" alt="" width="190" height="57">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
        aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
            <a class="nav-link" href="#" style="">Produk</a>
            <a class="nav-link" href="#" style="">Harga</a>
            <a class="nav-link" href="#" style="">Tentang Memofy</a>
        </div>
    </div>
    </div>
    </nav> --}}

    <nav class="navbar navbar-expand-lg navbar-light shadow-sm sticky-top"
        style="background-color: #f8f8f8 !important;">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('images/Header-Web.png') }}" alt="" width="170" height="50">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#">Aplikasi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Harga</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Tentang Memofy</a>
                    </li>
                    <li class="nav-item">
                        <button class="btn btn-outline-primary" type="button" href="#">Registrasi</button>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="main-body" style="background-color: #f5f5f5 !important;">
        <div class="container py-5">
            <p class="text-center mb-2" style="font-size: 32pt; font-family: 'Acme', sans-serif; color: #3f3f3f;">
                Aplikasi e-Modul (MeModul)</p>
            <p class="text-muted text-center mx-5">In publishing and graphic design, Lorem ipsum is a placeholder text
                commonly
                used to demonstrate the visual form of a document or a typeface without relying on meaningful
                content.</p>
        </div>
    </div>

    <div class="container my-5">
        <div class="row">
            <div class="col-md-6">
                <p class="text-left h3" id="judul-kartu">Menu Dashboard Memodul</p>
                <p class="text-right text-muted">In publishing and graphic design, Lorem ipsum is a placeholder text
                    commonly
                    used to demonstrate the visual form of a document or a typeface without relying on meaningful
                    content.</p>
            </div>
            <div class="col-md-6">
                <div class="card shadow rounded">
                    <img src="{{ asset('images/memodul-dashboard.png') }}" alt="">
                </div>
            </div>
        </div>
    </div>

    <div class="container my-5">
        <div class="row">
            <div class="col-md-6">
                <div class="card shadow">
                    <img src="{{ asset('images/memodul-dashboard.png') }}" alt="">
                </div>
            </div>
            <div class="col-md-6">
                <p class="text-right h3" id="judul-kartu">Menu Materi Memodul</p>
                <p class="text-right text-muted">In publishing and graphic design, Lorem ipsum is a placeholder text
                    commonly
                    used to demonstrate the visual form of a document or a typeface without relying on meaningful
                    content.</p>
            </div>
        </div>
    </div>

    <div class="container my-5">
        <div class="row">
            <div class="col-md-6">
                <p class="text-right h3" id="judul-kartu">Menu Unduh Apk Memodul</p>
                <p class="text-right text-muted">In publishing and graphic design, Lorem ipsum is a placeholder text
                    commonly
                    used to demonstrate the visual form of a document or a typeface without relying on meaningful
                    content.</p>
            </div>
            <div class="col-md-6">
                <div class="card shadow">
                    <img src="{{ asset('images/memodul-dashboard.png') }}" alt="">
                </div>
            </div>
        </div>
    </div>



    <div class="text-center py-5" style="background-color: #f5f5f5; color: #3f3f3f;">
        <p class="h2" style="font-family: 'Acme', sans-serif;">Harga Aplikasi MeModul</p>
    </div>

    <div style="background-color: #f5f5f5;">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="card text-center shadow">
                        <div class="card-header h4"
                            style="font-size: 17pt; padding-bottom: 0.5rem; padding-top: 0.5rem; font-family: 'Staatliches'; color: #5e5e5e; border: none;">
                            Bebas Biaya
                        </div>
                        <div class="card-body">
                            <p class="card-title text-success h4 my-1"
                                style="font-size: 17pt; padding-bottom: 1rem; padding-top: 1rem; font-family: 'Mochiy Pop P One', sans-serif;">
                                Rp 0 / Gratis</p>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item text-left"><i class="bi bi-check-circle"></i> Materi modul
                                </li>
                                <li class="list-group-item"><i class="bi bi-check-circle"></i> Ekspor apk</li>
                                <li class="list-group-item"><i class="bi bi-check-circle"></i> Kustomisasi
                                    <em>layout</em></li>
                            </ul>
                            <a href="#" class="btn btn-block btn-success">Pilih paket</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card text-center shadow">
                        <div class="card-header h4"
                            style="font-size: 17pt; padding-bottom: 0.5rem; padding-top: 0.5rem; font-family: 'Staatliches'; color: #5e5e5e; border: none">
                            Akses Penuh
                        </div>
                        <div class="card-body">
                            <p class="card-title text-success h4 my-1"
                                style="font-size: 17pt; padding-bottom: 1rem; padding-top: 1rem; font-family: 'Mochiy Pop P One', sans-serif;">
                                Rp 40.000</p>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><i class="bi bi-check-circle"></i> Semua fitur gratis</li>
                                <li class="list-group-item"><i class="bi bi-check-circle"></i> Kustomisasi lengkap</li>
                                <li class="list-group-item"><i class="bi bi-check-circle"></i> Fitur glosarium dan
                                    lainnya
                                </li>
                            </ul>
                            <a href="#" class="btn btn-block btn-success">Pilih paket</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card text-center shadow">
                        <div class="card-header h4"
                            style="font-size: 17pt; padding-bottom: 0.5rem; padding-top: 0.5rem; font-family: 'Staatliches'; color: #5e5e5e; border: none">
                            Akses Penuh + 5 Akun
                        </div>
                        <div class="card-body">
                            <p class="card-title text-success h4 my-1"
                                style="font-size: 17pt; padding-bottom: 1rem; padding-top: 1rem; font-family: 'Mochiy Pop P One', sans-serif;">
                                Rp 150.000</p>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><i class="bi bi-check-circle"></i> Semua fitur akses penuh
                                </li>
                                <li class="list-group-item"><i class="bi bi-check-circle"></i> Dapat voucher 5 akun</li>
                                <li class="list-group-item"><i class="bi bi-check-circle"></i> Harga
                                    jauh lebih murah</li>
                            </ul>
                            <a href="#" class="btn btn-block btn-success">Pilih paket</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="footer" class="mt-5">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                <path fill="#f8f8f8" fill-opacity="1"
                    d="M0,128L80,138.7C160,149,320,171,480,154.7C640,139,800,85,960,69.3C1120,53,1280,75,1360,85.3L1440,96L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z">
                </path>
            </svg>
            <div class="" id="kopikanan">
                <p class="text-center mb-5">Copyright &copy; 2022 - Memofy</p>
            </div>
        </div>
    </div>




    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
    <script>
        $(function () {
            $('[data-toggle="tooltip"]').tooltip()
        })

    </script>
</body>

</html>
