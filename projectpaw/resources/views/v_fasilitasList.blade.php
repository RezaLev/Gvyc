<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Facility List</title>
        <script src="https://kit.fontawesome.com/d07e17cfce.js" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

         <!-- CSS -->
        <link rel="stylesheet" href="{{ asset('css/fasilitasList.css') }}">

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
            <a class="navbar-brand" href="https://imgbb.com/"><img src="https://i.ibb.co/10VsgHS/Logopaw.png" alt="Logopaw"></a>
                <div class="navbar-admin">
                    <button type="submit" class="btn-admin" href="#">Admin</button>
                    <button type="submit" id="user" class="fas fa-user">
                </div>
        </nav>
        <div class="container-content">
            <div class="content-head">
                <h4 style="color: #444444; padding-left: 15px; padding-top: 7px;">Facility List</h4>
                <div class="go-back">
                    <button type="submit" class="btn-go-back" href="#">Create</button>
                </div>
            </div>
            <div class="content-body">
                <div class="container-body">
                    <table border="1">
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>Image</th>
                                <th>Action</th>
                            </tr>

                            <tr>
                                <td>1</td>
                                <td>Wi-Fi</td>
                                <td></td>
                                <td></td>
                            </tr>

                    </table>
                </div>
            </div>
        </div>
    </body>
</html>