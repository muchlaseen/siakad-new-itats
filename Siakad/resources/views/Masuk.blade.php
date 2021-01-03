<!DOCTYPE html>
<html lang="en">
<head>

    <!-- Kharisma Ilham Nusantara    06.2018.1.07010
         M. Khoirul Huda             06.2018.1.06990
         Achmad Muchlasin            06.2018.1.06941 -->

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIAKAD ITATS</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
    <link rel="stylesheet" href="{{asset('css/login-style.css')}}">
    <!-- <link rel="stylesheet" href="../css/login-style.css" /> -->
</head>
<body>
    <div class="container">
        <img src="../storage/itats-logo-lama.png" alt="">
        <h1>SIAKAD ITATS</h1>
        <h4>Izinkan sistem mengidentifikasi anda</h4>
        <form action="{{route("akun.login")}}" enctype="multipart/form-data" method="POST">
            @csrf
            @method('post')
            <div class="input-field">
                <input type="text" name="identitas" required>
                <label>NPM/NIP, contoh: 06.2018.1.06941</label>
            </div>
            <div class="input-field">
                <input type="password" name="password" required>
                <span class="show-pass">SHOW</span>
                <label>Password</label>
            </div>
            @if (!session('login_berhasil'))
                <div class="alert alert-danger" role="alert">
                    NIM/NPM atau Password salah!!
                </div>
            @endif
            <div class="button">
                <div class="inner"></div>
                <button type="submit">Login</button>
            </div>

        </form>
        <div class="footer">
            <p>INSTITUT TEKNOLOGI ADHI TAMA SURABAYA</p>
            <p>Copyright&copy;SIAKAD ITATS (Beta Ver) 2020.</p>
        </div>
    </div>
</body>
</html>
