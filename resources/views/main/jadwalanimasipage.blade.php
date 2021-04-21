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
  <div class="card borderlatest shadow-sm" style="min-width:43.4rem; max-height:500rem; margin-bottom:25px">

   <div class="card-body">
    <h5>List Semua Animasi</h5>
    <hr style="width:694px; margin-left:-20px">
  <div class="text-center">
    <a href="#senin" id="idhref" class="fadewhite" style="opacity:0.8; font-size:14.5px"><b> #Senin </b></a>
    <a href="#selasa" id="idref" class="fadewhite" style="opacity:0.8; font-size:14.5px"><b> #Selasa </b></a>
    <a href="#rabu" id="idhref" class="fadewhite" style="opacity:0.8; font-size:14.5px"><b> #Rabu </b></a>
    <a href="#kamis" id="idhref" class="fadewhite" style="opacity:0.8; font-size:14.5px"><b> #Kamis </b></a>
    <a href="#jumat" id="idhref" class="fadewhite" style="opacity:0.8; font-size:14.5px"><b> #Jumat </b></a>
    <a href="#sabtu" id="idhref" class="fadewhite" style="opacity:0.8; font-size:14.5px"><b> #Sabtu </b></a>
    <a href="#minggu" id="idhref" class="fadewhite" style="opacity:0.8; font-size:14.5px"><b> #Minggu </b></a>
    <a href="#random" id="idhref" class="fadewhite" style="opacity:0.8; font-size:14.5px"><b> #Random </b></a>
    
  </div>



<br>

    <a href="#senin" id="senin" class="fadewhite"><h3 style="opacity:0.8">#Senin</h3></a>
    <div class="container">
    <div class="row">
    @foreach($animasisenin as $animasijadwalobj)
    @if($animasijadwalobj->status == "Ongoing")
    <div class="col-lg-6">
    <a href="{{ route('showanimasi',$animasijadwalobj->id) }}" class="fadewhite">{{ $animasijadwalobj->title }}</a>
    </div>
    @endif
    @endforeach
  </div>
   </div>

   <br>

       <a href="#selasa" id="selasa" class="fadewhite"><h3 style="opacity:0.8">#Selasa</h3></a>
       <div class="container">
       <div class="row">
       @foreach($animasiselasa as $animasijadwalobj)
       @if($animasijadwalobj->status == "Ongoing")
       <div class="col-lg-6">
       <a href="{{ route('showanimasi',$animasijadwalobj->id) }}" class="fadewhite">{{ $animasijadwalobj->title }}</a>
       </div>
       @endif
       @endforeach
     </div>
      </div>

      <br>

          <a href="#rabu" id="rabu" class="fadewhite"><h3 style="opacity:0.8">#Rabu</h3></a>
          <div class="container">
          <div class="row">
          @foreach($animasirabu as $animasijadwalobj)
          @if($animasijadwalobj->status == "Ongoing")
          <div class="col-lg-6">
          <a href="{{ route('showanimasi',$animasijadwalobj->id) }}" class="fadewhite">{{ $animasijadwalobj->title }}</a>
          </div>
          @endif
          @endforeach
        </div>
         </div>

         <br>

             <a href="#kamis" id="kamis" class="fadewhite"><h3 style="opacity:0.8">#Kamis</h3></a>
             <div class="container">
             <div class="row">
             @foreach($animasikamis as $animasijadwalobj)
             @if($animasijadwalobj->status == "Ongoing")
             <div class="col-lg-6">
             <a href="{{ route('showanimasi',$animasijadwalobj->id) }}" class="fadewhite">{{ $animasijadwalobj->title }}</a>
             </div>
             @endif
             @endforeach
           </div>
            </div>

            <br>

                <a href="#jumat" id="jumat" class="fadewhite"><h3 style="opacity:0.8">#Jumat</h3></a>
                <div class="container">
                <div class="row">
                @foreach($animasijumat as $animasijadwalobj)
                @if($animasijadwalobj->status == "Ongoing")
                <div class="col-lg-6">
                <a href="{{ route('showanimasi',$animasijadwalobj->id) }}" class="fadewhite">{{ $animasijadwalobj->title }}</a>
                </div>
                @endif
                @endforeach
              </div>
               </div>

               <br>

                   <a href="#sabtu" id="sabtu" class="fadewhite"><h3 style="opacity:0.8">#Sabtu</h3></a>
                   <div class="container">
                   <div class="row">
                   @foreach($animasisabtu as $animasijadwalobj)
                   @if($animasijadwalobj->status == "Ongoing")
                   <div class="col-lg-6">
                   <a href="{{ route('showanimasi',$animasijadwalobj->id) }}" class="fadewhite">{{ $animasijadwalobj->title }}</a>
                   </div>
                   @endif
                   @endforeach
                 </div>
                  </div>

                  <br>

                      <a href="#minggu" id="minggu" class="fadewhite"><h3 style="opacity:0.8">#Minggu</h3></a>
                      <div class="container">
                      <div class="row">
                      @foreach($animasiminggu as $animasijadwalobj)
                      @if($animasijadwalobj->status == "Ongoing")
                      <div class="col-lg-6">
                      <a href="{{ route('showanimasi',$animasijadwalobj->id) }}" class="fadewhite">{{ $animasijadwalobj->title }}</a>
                      </div>
                      @endif
                      @endforeach
                    </div>
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
