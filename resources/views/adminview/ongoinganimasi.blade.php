@extends('layout.adminlayout')

@section('content')

<div class="col-7 mt-5">
<div class="card" style="width:700px">
<div class="card-header bg-info">
<h3 class="text-center" style="color:white">Ongoing Animasi List</h3>
</div>
<div class="card-body">

@foreach($ongoing as $ongoingobj)
<div class="d-flex justify-content-between">
 <img src="{{ asset('storage/'.$ongoingobj->image) }}" width=150px height=150px ><span class="mt-5 ml-4"> <a href="{{ route('showanimasi',$ongoingobj->id) }}"> {{ $ongoingobj->title }} </a> </span>
 <span class="mt-5">
<form class="text-right" action="{{ route('changestatus',$ongoingobj->id) }}" method="post">
  @csrf
  <select class="btn btn-sm bg-primary" style="color:white" id="Status" name="status" onchange="submit()">
   <option>Ongoing</option>
   <option>Ended</option>
 </select>
</form>
</span>
</div>
<hr>
@endforeach
</div>
<div class="d-flex" style="justify-content:center;">
 {{ $ongoing->links() }}
</div>
</div>
<br>
<br>
</div>

@endsection
