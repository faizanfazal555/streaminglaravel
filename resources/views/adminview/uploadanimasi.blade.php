@extends('layout.adminlayout')


@section('content')
<div class="col-7 mt-5">
<div class="card">
<div class="card-header bg-info">
<h3 class="text-center" style="color:white">Upload Animasi</h3>
</div>
<div class="card-body">
 <form action="{{ route('storeanimasi') }}" method="post" enctype="multipart/form-data">
   @csrf
 <div class="form-group">
 <label for="Judul"><b>Judul :</b></label>
 <input type="text" class="form-control" id="Judul" name="title">
 <br>
 <label for="JudulLain"><b>Judul Alternatif :</b></label>
 <input type="text" class="form-control" id="JudulLain" name="alternativetitle">
 <br>
 <label for="Deskripsi"><b>Deskripsi :</b></label>
 <textarea class="form-control" id="Deskripsi" rows="6" name="description"> </textarea>
 <br>
 <label for="Gambar"><b>Gambar :</b></label>
 <input type="file" class="form-control-file" id="Gambar" accept="image/*" name="image">
 <br>
 <label for="Genre"><b>Genre :</b></label>
 <select multiple class="form-control" id="Genre" name="tag[]">
  @foreach($tags as $tag)
  <option value="{{ $tag->id }}">{{ $tag->tagname }}</option>
  @endforeach
</select>
 <br>
 <label for="Rating"><b>Rating :</b></label>
 <input type="text" class="form-control" id="Rating" name="rating">
 <br>
 <label for="JumlahVoter"><b>Jumlah Voter :</b></label>
 <input type="text" class="form-control" id="JumlahVoter" name="voter">
 <br>
 <label for="Tahun"><b>Tahun :</b></label>
 <input type="text" class="form-control" id="Tahun" name="year">
 <br>
 <label for="HariTayang"><b>Hari Tayang :</b></label>
 <select class="form-control" id="HariTayang" name="showtime">
   <option value="Senin">Senin</option>
   <option value="Selasa">Selasa</option>
   <option value="Rabu">Rabu</option>
   <option value="Kamis">Kamis</option>
   <option value="Jumat">Jumat</option>
   <option value="Sabtu">Sabtu</option>
   <option value="Minggu">Minggu</option>
 </select>
 <br>
 <label for="Status"><b>Status :</b></label>
 <select class="form-control" id="Status" name="status">
  <option>Ongoing</option>
  <option>Ended</option>
</select>
<br>
<div class="text-center"><button type="submit" class="btn btn-primary" style="border-radius:28px"><b>CREATE</b></button></div>
 </form>
</div>
</div>
</div>

@endsection
