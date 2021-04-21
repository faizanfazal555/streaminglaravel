@extends('layout.adminlayout')

@section('content')
<style>
.fadewhite:hover {
  text-decoration: none;
  opacity: 0.6;
}
</style>
<div class="col-7 mt-5">
<div class="card" style="width:700px">
<div class="card-header bg-info">
<h3 class="text-center" style="color:white">Edit Animasi List</h3>
</div>
<div class="card-body">

  @foreach($animasi as $animasiobj)
  <div class="d-flex justify-content-between">
   <img src="{{ asset('storage/'.$animasiobj->image) }}" width=150px height=150px ><span class="mt-5 ml-4"> <a class="fadewhite" href="{{ route('showanimasi',$animasiobj->id) }}"> {{ $animasiobj->title }} </a> </span>
   <span class="mt-5">
  <a href="{{ route('editanimasi',$animasiobj->id) }}" class="btn btn-primary">
  Edit
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
