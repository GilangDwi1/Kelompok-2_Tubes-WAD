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
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#">Aplikasi Kedai Silvi</a>
                    </div>
                    <div class="collapse navbar-collapse" id="navbar-collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li>
                                <a href="{{ route('admin.dashboard') }}" class="nav-item btn-menu">
                                    <i class="fa fa-bars"></i> Menu
                                </a>
                            </li>
                            <li>
                                <a href="/keranjang" class="nav-item btn-cart">
                                    <i class="fa fa-shopping-cart"></i> Keranjang
                                </a>
                            </li>
                            <li>
                                <a href="/cek-status" class="nav-item btn-status">
                                    <i class="fa fa-list-alt"></i> Cek Status Pemesanan
                                </a>
                            </li>
                            <li>
                                <a href="/feedback" class="nav-item btn-feedback">
                                    <i class="fa fa-comment"></i> Feedback
                                </a>
                            </li>
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

            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>Tanggal Pemesanan</th>
                        <th>Waktu Pemesanan</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($status as $status)
                        <tr>
                            <td>{{ $status->nama }}</td>
                            <td>{{ $status->tanggal_pesanan }}</td>
                            <td>{{ $status->waktu_pemesanan }}</td>
                            <td>{{ $status->status }}</td>
                            <td>
                                <a href="{{ route('status.edit', $status->id) }}" class="btn btn-warning btn-sm">
                                    Update
                                </a>
                                <form action="{{ route('status.destroy', $status->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">
                                        Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    </div>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
</html>
