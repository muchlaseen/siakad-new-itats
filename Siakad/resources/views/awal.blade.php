<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
          integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,400;0,700;0,900;1,300;1,400;1,700;1,900&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <style>
        h1,h2,h3,h4,h5,h6{
            font-family: 'Merriweather', serif !important;
        }

        p,a,div,span{
            font-family: 'Montserrat', sans-serif;
            line-height: 1.5em !important;
            word-spacing: .1em !important;
        }
    </style>

    <title>SIAKAD - Sistem Akademik | Institute Teknologi Adhi Tama Surabaya</title>
</head>
<body class="bg-white">
<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            <img src="https://itats.ac.id/wp-content/uploads/2018/11/logo-itats.jpg" class="w-50" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">

            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link p-3" href="#home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link p-3" href="#tentang">Tentang</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link p-3" href="#informasi">Informasi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link p-3" href="#contact">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">
                        <span class="btn btn-warning pl-5 pr-5">MASUK</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div id="home" class="pt-5 pb-4">
    <div class="container">
        <div class="slider-slick">
            <div class="m-4"><img src="https://itats.ac.id/wp-content/uploads/2020/12/Header_Cerating-and-Developing-Enterpreneurs_03.jpg" alt="" class="w-100"></div>
            <div class="m-4"><img src="https://itats.ac.id/wp-content/uploads/2020/12/Header_IT-Campur-Partnership.jpg" alt="" class="w-100"></div>
            <div class="m-4"><img src="https://itats.ac.id/wp-content/uploads/2020/12/Header_Pemberitahuan-Jadwal-PSA_02.jpg" alt="" class="w-100"></div>
            <div class="m-4"><img src="https://itats.ac.id/wp-content/uploads/2020/12/Header_Enjoy-Dirumah.jpg" alt="" class="w-100"></div>
            <div class="m-4"><img src="https://itats.ac.id/wp-content/uploads/2020/12/Header_Pemberitahuan-Wisuda-Sarjana-63-Magister-25.jpg" alt="" class="w-100"></div>
        </div>
    </div>
</div>

<div id="tentang" class="pt-5 pb-5">
    <div class="container">
        <h2 class="text-center">TENTANG ITATS</h2>
        <p class="text-center w-75 m-auto">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda autem consequatur dolorum ducimus nesciunt optio possimus quisquam, quo tenetur ut! A accusantium asperiores dolores eaque eveniet laborum nihil unde voluptatem!</p>
    </div>
</div>

<div id="informasi" class="pt-5 pb-5">
    <div class="container">
        <h2 class="text-center mb-5">INFORMASI</h2>
        <div class="row">
            <div class="col-md-6">
                <div class="card border-0">
                    <img src="https://itats.ac.id/wp-content/uploads/2020/12/Header_Cerating-and-Developing-Enterpreneurs_03.jpg" class="card-img-top" alt="...">
                    <div class="card-body pl-0">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="media mb-4">
                    <img src="https://itats.ac.id/wp-content/uploads/2020/12/Header_Cerating-and-Developing-Enterpreneurs_03.jpg" class="mr-3 w-25" alt="...">
                    <div class="media-body">
                        <h5 class="mt-0">Media heading</h5>
                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin.
                    </div>
                </div>
                <div class="media mb-4">
                    <img src="https://itats.ac.id/wp-content/uploads/2020/12/Header_Cerating-and-Developing-Enterpreneurs_03.jpg" class="mr-3 w-25" alt="...">
                    <div class="media-body">
                        <h5 class="mt-0">Media heading</h5>
                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin.
                    </div>
                </div>
                <div class="media mb-4">
                    <img src="https://itats.ac.id/wp-content/uploads/2020/12/Header_Cerating-and-Developing-Enterpreneurs_03.jpg" class="mr-3 w-25" alt="...">
                    <div class="media-body">
                        <h5 class="mt-0">Media heading</h5>
                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin.
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="contact" class="pt-5 pb-5">
    <div class="container">
        <h2 class="text-center mb-5">CONTACT</h2>
        <div class="row">
            <div class="col-md-6">
                <div class="w-75">
                    <h3>Jika ada yang kurang jelas bisa hubungi kami</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                </div>
            </div>
            <div class="col-md-6">
                <form action="">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Input nama">
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" placeholder="Input email">
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" rows="8" placeholder="Input pesan"></textarea>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-warning btn-block">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<footer class="pt-5 pb-5" style="background-color: #1672bd">
    <div class="container pb-4 pt-4">
        <div class="row">
            <div class="col-md-4">
                <h5 class="text-white font-weight-bold">Fakultas A</h5>
                <nav class="nav flex-column ">
                    <a class="nav-link active text-white" href="#">Active</a>
                    <a class="nav-link text-white" href="#">Link</a>
                    <a class="nav-link text-white" href="#">Link</a>
                </nav>
            </div>
            <div class="col-md-4">
                <h5 class="text-white font-weight-bold">Fakultas B</h5>
                <nav class="nav flex-column">
                    <a class="nav-link active text-white" href="#">Active</a>
                    <a class="nav-link text-white" href="#">Link</a>
                    <a class="nav-link text-white" href="#">Link</a>
                </nav>
            </div>
            <div class="col-md-4">
                <h5 class="text-white font-weight-bold">Fakultas C</h5>
                <nav class="nav flex-column ">
                    <a class="nav-link active text-white" href="#">Active</a>
                    <a class="nav-link text-white" href="#">Link</a>
                    <a class="nav-link text-white" href="#">Link</a>
                </nav>
            </div>
        </div>
    </div>
    <hr>
    <div class="container pt-4 pb-4">
        <div class="text-center text-white">&copy; {{date('Y')}} - Institut Teknologi Adhi Tama Surabaya</div>
    </div>
</footer>

<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
        crossorigin="anonymous"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script>
    $(document).ready(function () {
        $('.slider-slick').slick({
            centerMode: true,
            autoplay:true,
            centerPadding: '100px',
            slidesToShow: 1,
            responsive: [
                {
                    breakpoint: 768,
                    settings: {
                        arrows: false,
                        centerMode: true,
                        centerPadding: '40px',
                        slidesToShow: 3
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        arrows: false,
                        centerMode: true,
                        centerPadding: '40px',
                        slidesToShow: 1
                    }
                }
            ]
        });

    })
</script>

<!-- Option 2: jQuery, Popper.js, and Bootstrap JS
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
-->
</body>
</html>
