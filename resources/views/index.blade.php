<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Web Sekolah 2020</title>
    <link rel="icon" type="image/png" href="{{ asset('assets/images/logo.png') }}">

    <link rel="stylesheet" href="{{ asset('/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/css/smknj.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700&display=swap" rel="stylesheet">

    <style>
        body{
            font-family: 'Muli', sans-serif;
        }
    </style>
</head>
<body>
    
    <div id="nav-pertama">
        <div class="container">
            <div class="text-right">
                <ul class="ul-1">
                    <li class="item-1">
                        <a href=""> Berita </a>
                    </li>
                    <li class="item-1">
                        <a href=""> Arsip Berita </a>
                    </li>
                    <li class="item-1">
                        <a href=""> Webmail </a>
                    </li>
                    <li class="item-1">
                        <a href=""> Direktory </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div id="logo-header">
        <div class="container">
            <img src="{{ asset('assets/images/smk-header.png') }}" width="130" alt="Logo SMK Nurul Jadid">
        </div>
    </div>

    <nav id="nav-kedua">
        <div class="text-right">
            <ul class="ul-2">
                <li class="item-1">
                    <a href="">TENTANG SMKNJ</a>
                </li>
                <li class="item-1">
                    <a href="">PENDIDIKAN</a>
                </li>
                <li class="item-1">
                    <a href="">PENGABDIAN</a>
                </li>
                <li class="item-1">
                    <a href="">PELAJAR</a>
                </li>
                <li class="item-1">
                    <a href="">KARYA</a>
                </li>
                <li class="item-1">
                    <a href="">PENDAFTARAN</a>
                </li>
                <li class="item-1">
                    <form action="" method="post" class="d-inline text-right" style="position: relative">
                        <input type="text" name="" class="item-3" placeholder="Search ..." class="form-control">
                        <button type="submit" class="item-4"> <i class="fa fa-search" aria-hidden="true"></i> </button>
                    </form>
                </li>
            </ul>
        </div>
    </nav>


    <script src="{{ url('/assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('/assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('/assets/js/bootstrap.min.js') }}"></script>
</body>
</html>