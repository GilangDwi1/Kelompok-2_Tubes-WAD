<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kedai Silvi</title>

    {{-- Bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    {{-- Material Icons --}}
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@24,400,1,0" />
</head>

<body>
    <div class="container">
        <div class="col-md-12">
            <!-- Navbar -->
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <!-- Navbar Header -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#">Aplikasi Kedai Silvi</a>
                    </div>

                    <!-- Navbar Links -->
                    <div class="collapse navbar-collapse" id="navbar-collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <!-- Navbar Menu -->
                            <li>
                                <a href="#main-content" class="nav-item btn-menu">
                                    <i class="fa fa-bars"></i> Menu
                                </a>
                            </li>

                            <!-- Keranjang -->
                            <li>
                                <a href="/keranjang" class="nav-item btn-cart">
                                    <i class="fa fa-shopping-cart"></i> Keranjang
                                </a>
                            </li>

                            <!-- Cek Status Pemesanan -->
                            <li>
                                <a href="/cek-status" class="nav-item btn-status">
                                    <i class="fa fa-list-alt"></i> Cek Status Pemesanan
                                </a>
                            </li>

                            <!-- Feedback -->
                            <li>
                                <a href="/feedback" class="nav-item btn-feedback">
                                    <i class="fa fa-comment"></i> Feedback
                                </a>
                            </li>

                            <!-- User Dropdown -->
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle nav-item" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                    <i class="fa fa-user"></i> <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <form action="{{ route('actionlogout') }}" method="POST" style="display: inline;">
                                            @csrf
                                            <button type="submit" class="btn btn-link nav-item">
                                                <i class="fa fa-power-off"></i> Log Out
                                            </button>
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <!-- Page Content -->
            @yield('admin')
            @yield('client')
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>
</body>

</html>
