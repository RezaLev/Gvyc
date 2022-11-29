<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gvyc</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="{!! asset('assets/css/style.css') !!}">

    <!--  font  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Chakra+Petch:wght@700&family=Inria+Serif:wght@700&family=Prompt&display=swap" rel="stylesheet">

    <style>
        body{
            line-height: 1;
            padding: 0;
            margin: 0;
            font-family: 'Chakra Petch', sans-serif;
            background-color: #E1E6EF;
        }
        .navbar{
            background-color: white;
            box-shadow: 0px 4px 5px rgba(0, 0, 0, 0.25);
        }
        .container-fluid{
            margin-left: 30px;
            margin-right: 30px;
        }
        .navbar-nav{
            justify-content: center;
            margin: auto;
        }
        .nav-link{
            font-style: normal;
            font-weight: 700;
            font-size: 18px;
            line-height: 23px;
            align-items: center;
            text-align: center;
            margin-right: 20px;
            margin-left: 20px;
            color: #444444;
            text-decoration: none;
        }
        .nav-link:hover{

            color: #B6CCFE;
        }
        .btn-login{
            background: #B6CCFE;
            border-radius: 50px;
            border: none;
            width: 110px;
            height: 35px;
            font-style: normal;
            font-weight: 700;
            font-size: 14px;
            line-height: 23px;
            align-items: center;
            text-align: center;
            color: #444444;
        }
        .btn-login:hover{
            transform: translateY(-3px);
        }
        .hero{
            margin-top: 30px;
            margin-bottom: 30px;
        }
        .text-hero{
            margin: auto;
        }
        .out-special{
            font-style: normal;
            font-weight: 700;
            font-size: 16px;
            line-height: 24px;
            letter-spacing: 0.1em;
            margin-top: 150px;
            color: #94AADC;
        }
        .change{
            font-family: 'Libre Baskerville';
            font-style: normal;
            font-weight: 700;
            font-size: 36px;
            line-height: 45px;
            color: #444444;
        }
        .made{
            font-family: 'Maven Pro';
            font-style: normal;
            font-weight: 400;
            font-size: 18px;
            line-height: 21px;
            color: #444444;
        }
        .image-hero a img{
            width: 100%;
        }
        .judul-menu p{
            font-style: normal;
            font-weight: 600;
            font-size: 24px;
            line-height: 42px;
            align-items: center;
            text-align: center;
            color: #444444;
        }
    </style>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="https://imgbb.com/"><img src="https://i.ibb.co/10VsgHS/Logopaw.png" alt="Logopaw"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="#home">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">MENU</a>
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
                        <a href="https://ibb.co/3dBG8tT"><img src="https://i.ibb.co/3dBG8tT/Gvyc-3-2.png" alt="Gvyc-3-2"></a>
                    </div>
                </div>
            </div>
        </div> 
    </section>
    <section class="menu">
        <div class="container">
            <div class="row">
                <div class="judul-menu">
                    <p>MENU</p>
                </div>
                    <div class="col-sm-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="gelato">
                                    <p>Gelato</p>
                                </div>
                                <div class="gelato-image">
                                    <a href='https://www.linkpicture.com/view.php?img=LPic63856860d58e8735819857'><img src='https://www.linkpicture.com/q/Gvyc-5-3.png' type='image'></a>
                                </div>
                                <div class="keterangan">
                                    <p class="nama-gelato">Raspberry</p>
        
                                </div>
                                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>
