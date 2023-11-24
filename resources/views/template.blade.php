<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield("tittle")</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="{{ url('bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ url('myAssets/assets/css/lightbox.css') }}">
    <link rel="stylesheet" href="{{ url('myAssets/assets/css/owl.css') }}">
    <link rel="stylesheet" href="{{ url('myAssets/assets/css/templatemo-grad-school.css') }}">
    <link rel="stylesheet" href="{{ url('myAssets/assets/css/fontawesome.css') }}">
</head>
<body>
    <style>
        ul.li.a{
            text-decoration: none;
        }
        body{
            background-color:  rgba(22,34,80,0.95) !important;
        }
    </style>
    <header class="main-header clearfix" role="header">
    <div class="logo">
      <a href="{{url('/')}}"><em>NI F</em> Wisata</a>
    </div>
    <a href="#menu" class="menu-link"><i class="fa fa-bars"></i></a>
    <nav id="menu" class="main-nav" role="navigation">
      <ul class="main-menu">
        <li><a href="{{url('/')}}">Home</a></li>
        <li class="has-submenu"><a href="#">Data</a>
          <ul class="sub-menu">
            <li><a href="{{url('tambah-wisata')}}">Tambah Data</a></li>
            <li><a href="{{url('data-wisata')}}">Lihat Data</a></li>
            
          </ul>
        </li>
    </nav>
  </header>
    <div class="container">
        

    

    @yield("content")
    @if(session()->has("pesan"))
    <div class="alert alert-info">
        {{session("pesan")}}
    </div>
    @endif
    </div>
    @yield("content2")
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
    <br>
          <p><i class="fa fa-copyright"></i> Copyright &copy; 2023 by NI F 
          
           | Design: <a href="https://templatemo.com" rel="sponsored" target="_parent">ARZ</a><br>
           Distributed By: <a href="https://themewagon.com" rel="sponsored" target="_blank">IJAYY</a>
          
          </p>
        </div>
      </div>
    </div>
  </footer>
  <link rel="stylesheet" href="{{ url('bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ url('myAssets/assets/css/lightbox.css') }}">
    <link rel="stylesheet" href="{{ url('myAssets/assets/css/owl.css') }}">
    <link rel="stylesheet" href="{{ url('myAssets/assets/css/templatemo-grad-school.css') }}">
    <link rel="stylesheet" href="{{ url('myAssets/assets/css/fontawesome.css') }}">
    <script src="{{ url('/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>