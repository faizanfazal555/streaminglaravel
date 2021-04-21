<!doctype html>
<html lang="en">
  <head>



    <style type="text/css">
    	[aria-expanded="false"] > .expanded, [aria-expanded="true"] > .collapsed {
    		display: none;
    	}
    </style>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/mainstyle.css') }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'>

    <title>Hello, world!</title>
    <nav class="navbar navbar-expand-lg navbar-dark bg-custom">
  <a class="navbar-brand" href="{{ route('mainpage') }}">Nonton Animasi</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#Genre" id="GenreNav">Genre <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown active">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Animasi
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item active">
        <a class="nav-link pr-3" href="#">Movie <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link pr-3" href="{{ route('listanimepage') }}">List Semua Animasi <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link pr-3" href="{{ Route('jadwalanimasipage') }}">Jadwal Rilis <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link pr-3" href="#">Request Animasi <span class="sr-only">(current)</span></a>
      </li>
      <form class="form-inline pl-3" action=
      "@if(\Request::is('mainpage'))
      {{ route('mainpage') }}
      @elseif(\Request::is('genrepage'))
      {{ route('genrepage') }}
      @endif"
           method="get">
        <input class="form-control" id="searching" type="search" name="searching" style="background-color: #63A4C9; color:white; border: none" placeholder="Search" aria-label="Search">
        <button class="btn btn-transparent whitecolorsearch"><i class="fa fa-search" aria-hidden="true"></i></button>
      </form>

      <form class="form-inline loginpadding ">
        <button class="btn btn-light">Login</button>
      </form>
    </ul>


  </div>
</nav>
  </head>
  <body style="background-color: #ECF0F5">
@yield('content')

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script>
    $(document).ready(function(){
      $('video').attr('src',$("#test").val());
      $("#test").change(function(){
        $('video').attr('src',$(this).val());
      });
    });
    </script>
    <script>
    function refreshvideo() {
      var video = document.getElementById("videoplayer");
      video.load();
    }
    </script>
  </body>
  <footer>
    <nav class="navbar navbar-light bg-custom" style="background-color:white">
    <span class="navbar-brand" style="font-size:14.5px"><b style="opacity:0.8;">Copyright © 2016-2020</b> <b style="opacity:0.6"><a class="nounderlinenav" href="#">Nonton Anime</a></b></span> <span style="padding-right:85px; font-size:14.5px"><b style="opacity:0.9">Version</b> 1.0</span>
  </nav>
  </footer>
</html>
