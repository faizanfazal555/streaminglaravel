@extends('layout.mainlayout')

@section('content')

<div class="container">
<div class="pt-3">Nonton Animasi - Nonton Animasi Sub Indo<a class="float-right withoutfade" href="{{ route('mainpage') }}" style="font-size:11px; color:black;"><i class="fa fa-home" aria-hidden="true"></i> Home</a></div>
<br><br><br>

<div class="row">
<div class="col-lg-2">
 <div class="card shadow-sm" style="margin-left: -13px; width:12.4rem; height:56rem;">

  <div class="card-body borderongoing">
   <h5>Ongoing</h5>
   <hr style="width:198px; margin-left:-20px; margin-bottom: 0.3rem; ">
   @foreach($animasiall as $animasiallobj)
    @if($animasiallobj->status == "Ongoing")
    <a href="{{ route('showanimasi',$animasiallobj->id) }}" class="ongoingfontsize fadewhite">
    {{ $animasiallobj->title }}
    </a>
  <hr style="background-color:black; margin:0; auto; opacity:0.6">
    @endif
   @endforeach
  </div>

</div>
</div>

<div class="col-lg-7">
  <div class="card borderlatest shadow-sm" style="width:43.4rem; height:55.5rem">

   <div class="card-body">
    <h5>Latest Update</h5>
    <hr style="width:694px; margin-left:-20px">
    <div class="row">
    @foreach($animasiongoing as $animasiongoingobj)
    <div class="card pr-2 pb-3">
    <a href="{{ route('showanimasi',$animasiongoingobj->id) }}">
    <img src="{{ asset('storage/'.$animasiongoingobj->image) }}" width="160rem" height="215rem" class="fadeoutimage shadow-sm">
    </a>
    <span class="textlimited" style="font-size:14.2px" maxlength="20">{{ $animasiongoingobj->title }}</span>
    </div>
    @endforeach

  </div>
    </div>
   </div>
  </div>



<div class="col-lg-3 pl-5">
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
