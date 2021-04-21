@extends('layout.mainlayout')

@section('content')

<div class="container" style="max-width:1200px">
<div class="mt-3">Nonton Animasi {{ $animasi->title }} Sub Indo - Nonton Anime <a class="float-right withoutfade textlimited" href="{{ route('showanimasi',$animasi->id) }}" style="font-size:12px; color:black; margin-top:1.5px; opacity:0.7; margin-right: -20px ">{{ $animasi->title }}</a><span class="float-right pr-2"><i class="fa fa-chevron-right" aria-hidden="true" style="font-size:12px;"></i></span>
<a class="float-right withoutfade pr-2" href="{{ route('mainpage') }}" style="font-size:12px; color:black; margin-top:1.5px">Animasi</a> <span class="float-right pr-2"><i class="fa fa-chevron-right" aria-hidden="true" style="font-size:12px;"></i></span>
<a class="float-right withoutfade pr-2" href="{{ route('mainpage') }}" style="font-size:12px; color:black; margin-top:1.5px"><i class="fa fa-home" aria-hidden="true"></i> Home</a>

  </div>
<br><br><br>

<div class="row">
<div class="col-lg-2">
 <div class="card shadow-sm " style="margin-left:-2px; width:12.4rem; height:56rem;">

  <div class="card-body borderongoing">
   <h5>Ongoing</h5>
   <hr style="width:198px; margin-left:-20px; margin-bottom: 0.3rem; ">
   @foreach($animasis as $animasiobj)
    @if($animasiobj->status == "Ongoing")
    <a href="{{ route('showanimasi',$animasiobj->id) }}" class="ongoingfontsize fadewhite">
    {{ $animasiobj->title }}
    </a>
  <hr style="background-color:black; margin:0; auto; opacity:0.6">
    @endif

   @endforeach
  </div>

</div>
</div>

<div class="col-lg-7 ">
  <div class="card borderlatest shadow-sm" style="width:43.4rem; min-height:60rem; max-height:200rem">

   <div class="card-body">
    <h5>{{ $animasi->title }}</h5>
    <hr style="width:694px; margin-left:-20px">
    <div class="row">
   <div class="card bg-custom" style="min-height:17rem; max-height:500rem; width:42rem; background-color:#F7F7F7;">
   <div class="card-body">
     <div class="media">
       <img class="mr-3" src="{{ asset('storage/'.$animasi->image)}}" alt="Generic placeholder image" height="231px" width="154px">
       <div class="media-body">

         {{ $animasi->description }}
         <br>
         <div class="text-right" style="font-size:14.5px;"><b> Nonton juga anime ini: </b>
<ul class="list-group">


<li class="list-group-item text-right" style="border:0; background-color: transparent; font-size:13.3px; margin-bottom:-2px; padding:0"><a style="border-bottom: 0.5px solid black" href="#" class="fadewhite"> uhu </a></li>
<li class="list-group-item text-right" style="border:0; background-color: transparent; font-size:13.3px; margin-bottom:-2px; padding:0"><a style="border-bottom: 0.5px solid black" href="#" class="fadewhite"> uhu </a></li>
<li class="list-group-item text-right" style="border:0; background-color: transparent; font-size:13.3px; margin-bottom:-2px; padding:0"><a style="border-bottom: 0.5px solid black" href="#" class="fadewhite"> uhu </a></li>
<li class="list-group-item text-right" style="border:0; background-color: transparent; font-size:13.3px; margin-bottom:-2px; padding:0"><a style="border-bottom: 0.5px solid black" href="#" class="fadewhite"> uhu </a></li>
<li class="list-group-item text-right" style="border:0; background-color: transparent; font-size:13.3px; margin-bottom:-2px; padding:0"><a style="border-bottom: 0.5px solid black" href="#" class="fadewhite"> uhu </a></li>

</ul>
</div>
       </div>
     </div>
   </div>
   </div>

   <div class="card mt-3 borderongoing" style="width:670px">
    <div class="card-body" style="font-family: 'Source Sans Pro', sans-serif;">
   <span style="font-size:14.4px">Nonton anime {{ $animasi->title}}</span>
   <ul class="list-group" style="font-size:15.5px; margin-left:-10px; width:655px">
  <li class="list-group-item" style="border-left:none; border-right:none">Judul : <a href="#" class="fadewhite">{{ $animasi->title }} </a> <button class="btn btn-primary btn-xs" onclick="location.href='/mainpage?search={{ $animasi->year}}'" type="button" style="padding:8px"><b>{{ $animasi->year }}</b></button></li>
  <li class="list-group-item" style="border-left:none; border-right:none">Judul Alternatif : {{ $animasi->alternativetitle }}</li>
  <li class="list-group-item" style="border-left:none; border-right:none">Rating : {{ $animasi->rating }}</li>
  <li class="list-group-item" style="border-left:none; border-right:none">Jumlah Voter : {{ $animasi->voter }}</li>
  <li class="list-group-item" style="border-left:none; border-right:none">Status : <button class="btn btn-primary btn-xs" onclick="location.href='/mainpage/{{ strtolower($animasi->status) }}'" type="button" style="padding:8px"> <b>{{ $animasi->status }}</b> </button></li>
  <li class="list-group-item" style="border-left:none; border-right:none">Total Episode :</li>
  <li class="list-group-item" style="border-left:none; border-right:none">Uploader :</li>
  <li class="list-group-item" style="border-left:none; border-right:none">Hari Tayang : {{$animasi->showtime }}</li>
  <li class="list-group-item" style="border-left:none; border-right:none">Genre :
  @foreach($animasi->tagmodel as $animasiobj)
  <button class="btn btn-primary btn-xs" onclick="location.href='{{ route('genrepage',$animasiobj->id) }}'" type="button" style="padding:8px"><b>{{ $animasiobj->tagname }} </b></button>
  @endforeach
  </li>

   </ul>
    </div>
   </div>

   <div id="accordion">
     <div class="card shadow-sm" style="width:655px; margin-left:15px" >
       <div class="card-header" style="background-color:white; border-top:3px solid #6495ED;">
         <strong style="font-size:19px;">List Episode {{ $animasi->title }}</strong>
         <a class="card-link" data-toggle="collapse" href="#menutwo" aria-expanded="false" aria-controls="menutwo">


           <span class="collapsed float-right"><i class="fa fa-plus" style="font-size:12px; color:black; opacity:0.5"></i></span>
           <span class="expanded float-right"><i class="fa fa-minus" style="font-size:12px;"></i></span>

         </a>
       </div>

       <div id="menutwo" class="collapse show">
         <div class="card-body errorchat scrolltext" style="height:5rem;">

            @foreach($episodes as $episodelist)
             <p style="margin-top:-15px; font-size:16px" >
            <a href="/watchepisode/{{ $animasi->id }}/{{$episodelist->episode}}"> {{ $animasi->title }} Episode {{ $episodelist->episode }} Sub Indo </a>
             </p>
            @endforeach

             <br>
             <br>
             <br>
             <br>
             asdas

         </div>
       </div>
     </div>
   </div>


  </div>
    </div>
   </div>
  </div>



<div class="col-lg-3 pl-3">
  <div id="accordion">
  	<div class="card shadow-sm" style="width:15rem;" >
  		<div class="card-header" style="background-color:white; border-top:3px solid #6495ED">
        <strong style="font-size:19px;">Chat Room</strong>
  			<a class="card-link" data-toggle="collapse" href="#menuone" aria-expanded="false" aria-controls="menuone">


          <span class="collapsed float-right"><i class="fa fa-plus" style="font-size:12px; color:black; opacity:0.5"></i></span>
          <span class="expanded float-right"><i class="fa fa-minus" style="font-size:12px;"></i></span>

  			</a>
  		</div>
  		<div id="menuone" class="collapse">
  		  <div class="card-body errorchat" style="height:26rem">
  			400 Bad Request. The user is not registered with the HTML service. To enable the service please contact https://twitter.com/staticallyio
  		  </div>
  		</div>
  	</div>

    <div class="card mt-3 shadow-sm" style="width:15rem;" >
      <div class="card-header" id="Genre" style="background-color:white; border-top:3px solid #6495ED">
        <strong style="font-size:19px;">Genre</strong>

      </div>
      <div>
        <div class="card-body" style="height:42rem">
        @foreach($tag as $tagobj)
        <button class="btn btn-xs btn-info" onclick="location.href='{{ route('genrepage',$tagobj->id) }}'" type="button" style="margin-left:-0.7rem; margin-right:0.7rem; margin-bottom:0.4rem"><b>{{ $tagobj->tagname }}</b></button>
        @endforeach

        </div>
      </div>
    </div>


    <div class="card mt-4 shadow-sm" style="width:15rem;" >
      <div class="card-header" style="background-color:white; border-top:3px solid #6495ED">
        <strong style="font-size:19px;">Year</strong>

      </div>
      <div>
        <div class="card-body " style="height:13rem">
          <span class="row" style="margin-left:-10px; margin-top:-1px">
          <form action="{{ route('mainpage') }}" method="get">

            <input type="hidden" name="search" value="1992" id="search">
          <button class="btn btn-xs btn-info" type="submit" style="margin-right:5px; margin-bottom:4px"><b>1992</b></button>
        </form>

        <form action="{{ route('mainpage') }}" method="get">

          <input type="hidden" name="search" value="1990" id="search">
        <button class="btn btn-xs btn-info" type="submit" style="margin-right:5px; margin-bottom:4px"><b>1992</b></button>
      </form>

      <form action="{{ route('mainpage') }}" method="get">

        <input type="hidden" name="search" value="1945" id="search">
      <button class="btn btn-xs btn-info" type="submit" style="margin-right:5px; margin-bottom:4px"><b>1945</b></button>
    </form>

    <form action="{{ route('mainpage') }}" method="get">

      <input type="hidden" name="search" value="2000" id="search">
    <button class="btn btn-xs btn-info" type="submit" style="margin-right:5px; margin-bottom:4px"><b>2000</b></button>
  </form>

  <form action="{{ route('mainpage') }}" method="get">

    <input type="hidden" name="search" value="2001" id="search">
  <button class="btn btn-xs btn-info" type="submit" style="margin-right:5px; margin-bottom:4px"><b>2001</b></button>
</form>

<form action="{{ route('mainpage') }}" method="get">

  <input type="hidden" name="search" value="2002" id="search">
<button class="btn btn-xs btn-info" type="submit" style="margin-right:5px; margin-bottom:4px"><b>2002</b></button>
</form>


</span>

        </div>
      </div>
    </div>
    <br>
    <br>
    <br>


  </div>

</div>


</div>
</div>


@endsection
