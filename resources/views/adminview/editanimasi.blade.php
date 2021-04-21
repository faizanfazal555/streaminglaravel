@extends('layout.adminlayout')


@section('content')
<div class="col-7 mt-5">
<div class="card">
<div class="card-header bg-info">
<h3 class="text-center" style="color:white">Upload Animasi</h3>
</div>
<div class="card-body">
 <form action="{{ route('changeanimasi',$animasi->id) }}" method="post" enctype="multipart/form-data">
   @csrf
 <div class="form-group">
 <label for="Judul"><b>Judul :</b></label>
 <input type="text" class="form-control" id="Judul" name="title" value="{{ $animasi->title }}">
 <br>
 <label for="JudulLain"><b>Judul Alternatif :</b></label>
 <input type="text" class="form-control" id="JudulLain" name="alternativetitle" value="{{ $animasi->alternativetitle }}">
 <br>
 <label for="Deskripsi"><b>Deskripsi :</b></label>
 <textarea class="form-control" id="Deskripsi" rows="6" name="description"> {{ $animasi->description }} </textarea>
 <br>
 <label for="Gambar"><b>Gambar :</b></label>
 <input type="file" class="form-control-file" id="Gambar" accept="image/*" name="image">
 <br>
<div><img src ="{{asset('storage/'.$animasi->image)}}" height="200px" class="pl-3"></div>
 <br>
 <label for="Genre"><b>Genre :</b></label>
 <select multiple class="form-control" id="Genre" name="tag[]">
  @foreach($tags as $tag)
  <option value="{{ $tag->id }}"
    @if(in_array($tag->id,$animasi->tagmodel->pluck('id')->toArray()))
    selected
    @endif
    >{{ $tag->tagname }}</option>
  @endforeach
</select>
 <br>
 <label for="Rating"><b>Rating :</b></label>
 <input type="text" class="form-control" id="Rating" name="rating" value="{{ $animasi->rating }}">
 <br>
 <label for="JumlahVoter"><b>Jumlah Voter :</b></label>
 <input type="text" class="form-control" id="JumlahVoter" name="voter" value="{{ $animasi->voter }}">
 <br>
 <label for="Tahun"><b>Tahun :</b></label>
 <input type="text" class="form-control" id="Tahun" name="year" value="{{ $animasi->year }}">
 <br>
 <label for="HariTayang"><b>Hari Tayang :</b></label>
 <select class="form-control" id="HariTayang" name="showtime">
   <option value="Senin" @if($animasi->showtime == "Senin") selected @endif>Senin</option>
   <option value="Selasa" @if($animasi->showtime == "Selasa") selected @endif>Selasa</option>
   <option value="Rabu" @if($animasi->showtime == "Rabu") selected @endif>Rabu</option>
   <option value="Kamis" @if($animasi->showtime == "Kamis") selected @endif>Kamis</option>
   <option value="Jumat" @if($animasi->showtime == "Jumat") selected @endif>Jumat</option>
   <option value="Sabtu" @if($animasi->showtime == "Sabtu") selected @endif>Sabtu</option>
   <option value="Minggu" @if($animasi->showtime == "Minggu") selected @endif>Minggu</option>
 </select>
 <br>
 <label for="Status"><b>Status :</b></label>
 <select class="form-control" id="Status" name="status">
  <option>Ongoing</option>
  <option>Ended</option>
</select>
<br>
<div class="text-center"><button type="submit" class="btn btn-primary" style="border-radius:28px"><b>EDIT</b></button></div>
 </form>
</div>
</div>
</div>

@endsection
