<!doctype html>
<html lang="en">
  <head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">


    <nav class="navbar navbar-dark bg-custom" style="background-color: #3C8DBC;">
      <span class="navbar-brand mb-0 h1 pl-5"><b>Admin Panel</b></span>
    </nav>



    @if(session()->has('tagcreated'))
    <div class="text-center alert alert-success">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    {{ session()->get('tagcreated') }}
    </div>
    @endif

    @if(session()->has('animasiupload'))
    <div class='alert alert-success text-center'>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    {{ session()->get('animasiupload') }}
    </div>
    @endif

    @if(session()->has('changestatus'))
    <div class="text-center alert alert-success">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    {{ session()->get('changestatus') }}
    </div>
    @endif

    @if(session()->has('changeanimasi'))
    <div class="text-center alert alert-success" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    {{ session()->get('changeanimasi') }}
    </div>
    @endif

    @if(session()->has('addepisode'))
    <div class="text-center alert alert-success" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    {{ session()->get('addepisode') }}
    </div>
    @endif


  </head>
  <body>
    <div class="container">
    <div class="row">
    <div class="col-3">
    <div class="card mt-5" style="margin-left:-50px;">
      <div class="list-group">
        <a href="#" class="list-group-item list-group-item-action bg-info disabled" style="color:white; font-size:19px"><strong>Admin Menu</strong></a>
        <a href="{{ route('uploadanimasi') }}" class="list-group-item list-group-item-action"><b>Create Animasi Detail</b></a>
        <a href="{{ route('addepisodelist') }}" class="list-group-item list-group-item-action"><b>Upload Animasi Episode</b></a>
        <a href="{{ route('createtag') }}" class="list-group-item list-group-item-action"><b>Create New Genre</b></a>
        <a href="{{ route('ongoinganimasi') }}" class="list-group-item list-group-item-action"><b>Ongoing Animasi</b></a>
        <a href="{{ route('animasilistedit') }}" class="list-group-item list-group-item-action"><b>Animasi List</b></a>

      </div>
    </div>
    </div>
    @yield('content')
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  <script>
  $(document).ready(function() {
      // show the alert
      setTimeout(function() {
          $(".alert").alert('close');
      }, 2000);
  });
  </script>
  </body>


</html>
