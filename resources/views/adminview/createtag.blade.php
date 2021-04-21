@extends('layout.adminlayout')

@section('content')

<div class="col-7 mt-5">
<div class="card">
<div class="card-header bg-info">
<h3 class="text-center" style="color:white">Create Genre</h3>
</div>
<div class="card-body">
 <form action="{{ route('storetag') }}" method="post">
   @csrf
 <div class="form-group">
 <label for="Judul"><b>Nama :</b></label>
 <input type="text" class="form-control" id="Judul" name="name">
 <br>
 <label for="JudulLain"><b>Deskripsi :</b></label>
 <input type="text" class="form-control" id="JudulLain" name="description">
 <br>

<div class="text-center"><button type="submit" class="btn btn-primary" style="border-radius:28px"><b>CREATE</b></button></div>
 </form>
</div>
</div>
</div>

@endsection
