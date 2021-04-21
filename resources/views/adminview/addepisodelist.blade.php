@extends('layout.adminlayout')

@section('content')

<style>
form .form-control::-webkit-input-placeholder {
  color: white;
}

.fadewhite:hover {
  text-decoration: none;
  opacity: 0.6;
}

</style>
<div class="col-7 mt-5">
<div class="card" style="width:700px">
<div class="card-header bg-info">
<h3 class="text-center" style="color:white">Upload Animasi List</h3>
</div>
<div class="card-body">
  <div class="d-flex justify-content-center">
  <form class="form-inline pl-3" action="{{ route('addepisodelist') }}" method="get">
    <input class="form-control" id="searching" type="search" name="searching" style="background-color: #63A4C9; color:white;" placeholder="Search" aria-label="Search">
    <button class="btn btn-transparent whitecolorsearch"><i class="fa fa-search" aria-hidden="true"></i></button>
  </form>
</div>
  <br>
  @foreach($animasi as $animasiobj)
  <div class="d-flex justify-content-between">
   <img src="{{ asset('storage/'.$animasiobj->image) }}" width=150px height=150px ><span class="mt-5 ml-4"> <a class="fadewhite" href="{{ route('showanimasi',$animasiobj->id) }}" style="padding-right:-10px"> {{ $animasiobj->title }} </a> </span>
   <span class="mt-5 pl-3">
  <a href="{{ route('addepisode',$animasiobj->id) }}" class="btn btn-primary" style="width:120px">
  Add Episode
  </a>
  </span>
  </div>
  <hr>
  @endforeach
  </div>
  <div class="d-flex" style="justify-content:center;">
 {{ $animasi->links() }}
  </div>

</div>
<br>
<br>
</div>
<br>
<br>
</div>

@endsection
