<!DOCTYPE html>
<html lang="en">

<head>
    <title>Kellan Matthew Gulardi S. : 5026231028</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap & FontAwesome -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
        integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

    <!-- Script -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Custom Style -->
    <style>
        .jumbotron {
            background-color: #0056b3; /* biru pekat */
            color: white;
            border-bottom: 2px solid #dee2e6;
            padding: 2rem 1rem;
        }

        .navbar-nav {
            margin: auto;
        }

        .nav-link {
            font-weight: 500;
            font-size: 15px;
            padding-left: 20px;
            padding-right: 20px;
            transition: all 0.2s ease-in-out;
        }

        .nav-link i {
            margin-right: 5px;
        }

        .nav-link:hover {
            transform: translateY(-3px) scale(1.05);
            color: #004080 !important;
        }
    </style>
</head>

<body>

    <!-- Header biru pekat -->
    <div class="jumbotron text-center mb-0">
        <h1 class="font-weight-bold mb-0">
            Kellan Matthew Gulardi S. : 5026231028
        </h1>
    </div>

    <!-- Navbar tengah dengan ikon dan efek hover -->
    <nav class="navbar navbar-expand-sm bg-light justify-content-center">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="/frontend"><i class="fas fa-code"></i> All Front End</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/pegawai"><i class="fas fa-users"></i> Pegawai</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/penghapus"><i class="fas fa-trash-alt"></i> Tugas CRUD</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"><i class="fas fa-book-open"></i> EAS</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/karyawan"><i class="fas fa-male"></i> Laki NRP Genap</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/latihan2"><i class="fas fa-male"></i> Laki NRP Ganjil</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/keranjang"><i class="fas fa-female"></i> Perempuan</a>
            </li>
        </ul>
    </nav>

    <br>

    <!-- Konten halaman -->
    <div class="container">
        @yield('content')
    </div>

</body>

</html>