<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Create Menu</title>
    <script src="https://kit.fontawesome.com/d07e17cfce.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">

</head>

<body>
    <div class="sidebar">
        <header>HOMEPAGE</header>
        <div class="btn-side">
            <div class="dashboard">
                <button>
                    <a class="btn-link" href="#"><i class="fas fa-dashboard"></i></a>Dashboard</button>
            </div>
            <div class="product">
                <button>
                    <a class="btn-link" href="#"><i class="fas fa-gear"></i></a>Product</button>
                <i class="fas fa-stream" id="qr"></i>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg">
        <a class="navbar-brand" href="https://imgbb.com/"><img src="https://i.ibb.co/10VsgHS/Logopaw.png"
                alt="Logopaw"></a>
        <div class="navbar-admin">
            <button type="submit" class="btn-admin" href="#">Admin</button>
            <button type="submit" id="user" class="fas fa-user">
        </div>
    </nav>
    <div class="container-content">
        <div class="content-head d-flex justify-content-between">
            <h4 style="color: #444444; padding-left: 15px; padding-top: 7px;">Create Menu</h4>
            <a href="{{ route('menu.index') }}" class=" btn-go-back me-3 text-decoration-none">Back</a>
        </div>
        <div class="content-body">
            <form action="{{ route('menu.store') }}" method="POST" enctype="multipart/form-data"
                class="container-body">
                @csrf
                <div>
                    <h5 id="teks">Name</h5>
                    <input type="text" class="form-input" name="nama_menu">
                </div>
                <div>
                    <h5 id="teks">Price</h5>
                    <input type="number" class="form-input" name="harga_menu">
                </div>
                <div>
                    <h5 id="teks">Image</h5>
                    <input type="file" class="form-input" placeholder="Drop files here to upload"
                        style="color: #B6BBBF;" name="foto_menu">
                </div>
                <button type="submit" class="btn-save">Save</button>
            </form>
        </div>
    </div>
</body>

</html>
