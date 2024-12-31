<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Aplikasi Nilai Santri</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
    <div class="container">
        <div class="col-md-12">
        <nav class="navbar navbar-default">
          <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              {{-- <a class="navbar-brand" href="{{route('home')}}">Kedai Silvi</a> --}}
              {{-- <a class="navbar-brand" href="{{route('home')}}">Home </a> --}}
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                  <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user"></i><span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a></a></li>
                    <li role="separator" class="divider"></li>
                    <li>
                        <form action="{{ route('login') }}" method="POST" style="display: inline;">
                            @csrf
                            <button type="submit" class="btn btn-link" style="text-decoration: none; color: inherit;">
                                <i class="fa fa-power-off"></i> Login
                            </button>
                        </form>
                        <form action="{{ route('auth.logout') }}" method="POST" style="display: inline;">
                            @csrf
                            <button type="submit" class="btn btn-link" style="text-decoration: none; color: inherit;">
                                <i class="fa fa-power-off"></i> Log Out
                            </button>
                        </form>
                    </li>
                  </ul>
                </li>
              </ul>
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>
          @yield('konten')
        </div>
        </div>
    </div>
</body>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</html>
