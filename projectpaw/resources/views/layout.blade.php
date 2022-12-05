<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard</title>
    <script src="https://kit.fontawesome.com/d07e17cfce.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">


</head>

<body>
    <div class="sidebar">
        <header>HOMEPAGE</header>
        <a href="/admin" class="text-decoration-none">
            <div class="btn-side">
                <div class="dashboard">
                    <button class="sidebarBtn">
                        <i class="fas fa-dashboard"></i>
                        Dashboard</button>
                </div>
        </a>
        <div class="accordion" id="accordionExample">
            <div class="accordion-item">
                <button class="sidebarBtn py-3 d-flex justify-content-between w-100" type="button"
                    data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true">
                    <span>
                        <i class="fas fa-gear"></i>
                        Product
                    </span>
                    <i class="fas fa-stream align-self-center"></i>
                </button>
                <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body m-3">
                        <a class="text-dark text-decoration-none" href="/admin/menu">Menu</a> <br>
                        <a class="text-dark text-decoration-none" href="/admin/cafe">Cafe</a> <br>
                        <a class="text-dark text-decoration-none" href="/admin/facilities">Facilities</a><br>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <nav class="navbar navbar-expand-lg">
        <a class="navbar-brand" href="https://imgbb.com/"><img src="https://i.ibb.co/10VsgHS/Logopaw.png"
                alt="Logopaw"></a>
        <div class="navbar-admin">
            <button type="submit" class="btn-admin" href="#">Admin</button>
            <button type="submit" id="user" class="fas fa-user">
                <a href="{{ route('logout') }}">Logout</a>
        </div>
    </nav>
    @yield('content')
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
    integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous">
</script>

</html>
