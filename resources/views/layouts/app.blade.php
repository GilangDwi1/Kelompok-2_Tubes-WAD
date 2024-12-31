<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Aplikasi Kedai Silvi</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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
                                <a href="{{ route('status.index') }}" class="nav-item btn-status">
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

    <!-- Bootstrap JS -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
</html>
