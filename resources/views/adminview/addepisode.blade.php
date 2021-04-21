@extends('layout.adminlayout')


@section('content')
<div class="col-7 mt-5">
<div class="card">
<div class="card-header bg-info">
<h3 class="text-center" style="color:white">Upload Episode Animasi</h3>
</div>
<div class="card-body">
 <form action="{{ route('storeepisode',$animasi->id) }}" method="post" enctype="multipart/form-data">
   @csrf
 <div class="form-group">
 <label for="Judul"><b>Judul Animasi :</b></label>
 <div class="form-control" id="Judul" name="judul">
 {{ $animasi->title }}
 </div>
 <br>
 <label for="Episode"><b>Episode :</b></label>
 <input type="number" class="form-control" id="Episode" name="episode">
 <br>
 <label for="Server1"><b>Video Server 1(main) :</b></label>
 <input type="file" class="form-control-file" id="Server1" accept="video/*" name="video1">
<br>
<label for="Server2"><b>Video Server 2(optional) :</b></label>
<input type="file" class="form-control-file" id="Server2" accept="video/*" name="video2">
<br>
<label for="Server3"><b>Video Server 3(optional) :</b></label>
<input type="file" class="form-control-file" id="Server3" accept="video/*" name="video3">
<br>
<div class="text-center"><button type="submit" class="btn btn-primary" style="border-radius:28px"><b>ADD</b></button></div>
 </form>
</div>
</div>
</div>

@endsection
