<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gvyc</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  </head>
  <body>
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ url('/') }}"><img src="{{ url('images/Logo.png') }}" alt="Logopaw"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="#home">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#menu">MENU</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">FACILITY</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">CONTACT US</a>
                    </li>
                </ul>
                <div class="navbar-login">
                    <button type="submit" class="btn-login">LOGIN</button>
                </div>
            </div>
        </div>
    </nav>

    <!-- HERO IMAGE -->
    <section class="hero">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="text-hero">
                        <p class="out-special" id="home">OUR SPECIAL GELATO</p>
                        <p class="change">Change Your Day<br>With Gelato</p>
                        <p class="made">Made with premium fresh milk, processed with love, to give you an authentic smooth Italian taste</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="image-hero">
                        <a href="{{ url('/') }}"><img src="{{ url('images/hero-images.png') }}" alt="Gvyc-3-2"></a>
                    </div>
                </div>
            </div>
        </div> 
    </section>

    <!-- MENU -->
    <section class="menu">
        <div class="container">
            <div class="row">
                <div class="judul-menu" id="menu">
                    <p>Menu</p>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="gelato">
                                <p>Gelato</p>
                            </div>
                            <div class="gelato-image">
                                <a href="{{ url('/') }}"><img src="{{ url('images/gelato1.png') }}" type='image'></a>
                            </div>
                            <div class="keterangan">
                                <div class="nama-gelato">Raspberry</div>
                                <div class="keterangan-gelato">2 scoops</div>
                            </div>
                            <div class="harga-gelato">IDR 20.000,00-</div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="gelato">
                                <p>Gelato</p>
                            </div>
                            <div class="gelato-image">
                                <a href="{{ url('/') }}"><img src="{{ url('images/gelato1.png') }}" type='image'></a>
                            </div>
                            <div class="keterangan">
                                <div class="nama-gelato">Raspberry</div>
                                <div class="keterangan-gelato">2 scoops</div>
                            </div>
                            <div class="harga-gelato">IDR 20.000,00-</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="view-more">
                    <button type="submit" class="btn-more">View More</button>
                </div>
            </div>
        </div>
    </section>

    <!-- CAFE -->
    <section class="cafe">
        <div class="container">
            <div class="row">
                <div class="nama-cafe">
                    <p>GVYC'S CAFE</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="text-cafe">
                        <p class="made">Made with premium fresh milk, processed with love, to give you an authentic smooth Italian taste</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="image-cafe">
                        <a href="{{ url('/') }}"><img src="{{ url('images/cafe-image.png') }}" alt="Gvyc-3-2"></a>
                    </div>
                </div>
            </div>
        </div> 
    </section>

    <!-- FASILITAS -->
    <section class="menu">
        <div class="container">
            <div class="row">
                <div class="judul-menu" id="menu">
                    <p>Facilities</p>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="gelato">
                                <p>Gelato</p>
                            </div>
                            <div class="gelato-image">
                                <a href="{{ url('/') }}"><img src="{{ url('images/gelato1.png') }}" type='image'></a>
                            </div>
                            <div class="keterangan">
                                <div class="nama-gelato">Raspberry</div>
                                <div class="keterangan-gelato">2 scoops</div>
                            </div>
                            <div class="harga-gelato">IDR 20.000,00-</div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="gelato">
                                <p>Gelato</p>
                            </div>
                            <div class="gelato-image">
                                <a href="{{ url('/') }}"><img src="{{ url('images/gelato1.png') }}" type='image'></a>
                            </div>
                            <div class="keterangan">
                                <div class="nama-gelato">Raspberry</div>
                                <div class="keterangan-gelato">2 scoops</div>
                            </div>
                            <div class="harga-gelato">IDR 20.000,00-</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <footer>
    <div class="container">
            <div class="footer-content">
                <div class="address">
                    <a href="{{ url('/') }}"><img src="{{ url('images/maps.png') }}" alt=""></a>
                    <p>Address</p>
                </div>

            </div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>