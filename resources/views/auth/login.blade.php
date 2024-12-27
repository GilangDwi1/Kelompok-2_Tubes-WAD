<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome!!!</title>
    <style>
      html, body {
        height: 100%;
        margin: 0;
      }
      body {
        background-image: url('https://christinapotvin.com/wp-content/uploads/2022/10/Nasi-Goreng.jpg');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        display: flex;
        justify-content: center;
        align-items: center;
      }
      .form-signin {
        background-color: white;
        opacity: 0.8;
        padding: 20px;
        border-radius: 10px;
        width: 350px;
      }
      .btn-container {
        display: flex;
        justify-content: space-between;
      }
    </style>
  </head>
  <body class="text-center">
    <main>
      <div class="form-signin">
        <h2>Selamat Datang di Kedai Silvi </h2>
        <form action="{{ route('auth.authenticate') }}" method="POST">
            @csrf
          <label for="username">Username</label>
          <br>
          <input style="width: 85%;" type="text" id="username" placeholder="Silahkan Masukkan Username!!!" required>
          <br>
          <br>
          <label for="password">Password</label>
          <br>
          <input style="width: 85%;" type="password" id="password" placeholder="Silahkan Masukkan Password!!!" required>
          <br>
          <p style="margin-top:2px;">belum punya akun? <a href="{{ route('auth.register') }}">silahkan register disini</a></p>
          <button type="submit" class="btn btn-primary">Masuk</button>
        </form>
      </div>
    </main>
  </body>
</html>
