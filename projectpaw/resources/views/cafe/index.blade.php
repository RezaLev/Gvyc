<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>List Cafe</title>
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
            <h4 style="color: #444444; padding-left: 15px; padding-top: 7px;">Cafe List</h4>
            <a href="{{ route('cafe.create') }}" class=" btn-go-back me-3 text-decoration-none">New</a>
        </div>
        <div class="content-body">
            <div class="container-body">
                @if ($message = Session::get('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <p class="m-0">{{ $message }}</p>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                <table border="1">
                    <tr>
                        <td>No</td>
                        <td>Name</td>
                        <td>Phone</td>
                        <td>Description</td>
                        <td>Address</td>
                        <td>Image</td>
                        <td>Action</td>
                    </tr>

                    @foreach ($cafes as $m)
                        <tr>
                            <td>{{ $loop->index + 1 }}</td>
                            <td>{{ $m->nama_cafe }}</td>
                            <td>{{ $m->no_telepon }}</td>
                            <td>{{ $m->definisi_cafe }}</td>
                            <td>{{ $m->alamat_cafe }}</td>
                            <td>
                                @if ($m->foto_cafe != null)
                                    <img class="table-image rounded-pill" src="{{ asset('storage/' . $m->foto_cafe) }}">
                                @endif
                            </td>
                            <td>
                                <form action="{{ route('cafe.destroy', $m->id_cafe) }}" method="POST">
                                    <a class="btn btn-primary" href="{{ route('cafe.edit', $m->id_cafe) }}">Edit</a>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
</script>

</html>
