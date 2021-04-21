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
    <a href="#unknown" class="btn btn-sm" style="background-color:black; color:white;"><b> # </b></a>
    <a href="#A" id="idhref" class="btn btn-sm" style="background-color:black; color:white;"><b> A </b></a>
    <a href="#B" id="idhref" class="btn btn-sm" style="background-color:black; color:white;"><b> B </b></a>
    <a href="#C" id="idhref" class="btn btn-sm" style="background-color:black; color:white;"><b> C </b></a>
    <a href="#D" id="idhref" class="btn btn-sm" style="background-color:black; color:white;"><b> D </b></a>
    <a href="#E" id="idhref" class="btn btn-sm" style="background-color:black; color:white;"><b> E </b></a>
    <a href="#F" id="idhref" class="btn btn-sm" style="background-color:black; color:white;"><b> F </b></a>
    <a href="#G" id="idhref" class="btn btn-sm" style="background-color:black; color:white;"><b> G </b></a>
    <a href="#H" id="idhref" class="btn btn-sm" style="background-color:black; color:white;"><b> H </b></a>
    <a href="#I" id="idhref" class="btn btn-sm" style="background-color:black; color:white;"><b> I </b></a>
    <a href="#J" id="idhref" class="btn btn-sm" style="background-color:black; color:white;"><b> J </b></a>
    <a href="#K" id="idhref" class="btn btn-sm" style="background-color:black; color:white;"><b> K </b></a>
    <a href="#L" id="idhref" class="btn btn-sm" style="background-color:black; color:white;"><b> L </b></a>
    <a href="#M" id="idhref" class="btn btn-sm" style="background-color:black; color:white;"><b> M </b></a>
    <a href="#N" id="idhref" class="btn btn-sm" style="background-color:black; color:white;"><b> N </b></a>
    <a href="#O" id="idhref" class="btn btn-sm" style="background-color:black; color:white;"><b> O </b></a>
    <a href="#P" id="idhref" class="btn btn-sm" style="background-color:black; color:white;"><b> P </b></a>
    <a href="#Q" id="idhref" class="btn btn-sm" style="background-color:black; color:white;"><b> Q </b></a>
    <a href="#R" id="idhref" class="btn btn-sm" style="background-color:black; color:white;"><b> R </b></a>
    <a href="#S" id="idhref" class="btn btn-sm" style="background-color:black; color:white;"><b> S </b></a>
  </div>
  <div class="text-center mt-2">
    <a href="#T" id="idhref" class="btn btn-sm" style="background-color:black; color:white;"><b> T </b></a>
    <a href="#U" id="idhref" class="btn btn-sm" style="background-color:black; color:white;"><b> U </b></a>
    <a href="#V" id="idhref" class="btn btn-sm" style="background-color:black; color:white;"><b> V </b></a>
    <a href="#W" id="idhref" class="btn btn-sm" style="background-color:black; color:white;"><b> W </b></a>
    <a href="#X" id="idhref" class="btn btn-sm" style="background-color:black; color:white;"><b> X </b></a>
    <a href="#Y" id="idhref" class="btn btn-sm" style="background-color:black; color:white;"><b> Y </b></a>
    <a href="#Z" id="idhref" class="btn btn-sm" style="background-color:black; color:white;"><b> Z </b></a>

  </div>




    <br>
    <br>
    <a href="#unknown" id="unknown" class="fadewhite"><h3 style="opacity:0.8">##</h3></a>
    <div class="container">
    <div class="row">
    @foreach($animasiall as $animasilistobj)
    @if(ctype_alpha($animasilistobj->title[0]))
    @else
    <div class="col-lg-6">
    <a href="{{ route('showanimasi',$animasilistobj->id) }}" class="fadewhite">{{ $animasilistobj->title }}</a>
    </div>
    @endif
    @endforeach
  </div>
   </div>

<br>

    <a href="#A" id="A" class="fadewhite"><h3 style="opacity:0.8">#A</h3></a>
    <div class="container">
    <div class="row">
    @foreach($animasiA as $animasilistobj)
    <div class="col-lg-6">
    <a href="{{ route('showanimasi',$animasilistobj->id) }}" class="fadewhite">{{ $animasilistobj->title }}</a>
    </div>
    @endforeach
  </div>
   </div>


<br>


   <a href="#B" id="B" class="fadewhite"><h3 style="opacity:0.8">#B</h3></a>
   <div class="container">
   <div class="row">
   @foreach($animasiB as $animasilistobj)
   <div class="col-lg-6">
   <a href="{{ route('showanimasi',$animasilistobj->id) }}" class="fadewhite">{{ $animasilistobj->title }}</a>
   </div>
   @endforeach
 </div>
  </div>

  <br>


     <a href="#C" id="C" class="fadewhite"><h3 style="opacity:0.8">#C</h3></a>
     <div class="container">
     <div class="row">
     @foreach($animasiC as $animasilistobj)
     <div class="col-lg-6">
     <a href="{{ route('showanimasi',$animasilistobj->id) }}" class="fadewhite">{{ $animasilistobj->title }}</a>
     </div>
     @endforeach
   </div>
    </div>

    <br>

       <a href="#D" id="D" class="fadewhite"><h3 style="opacity:0.8">#D</h3></a>
       <div class="container">
       <div class="row">
       @foreach($animasiD as $animasilistobj)
       <div class="col-lg-6">
       <a href="{{ route('showanimasi',$animasilistobj->id) }}" class="fadewhite">{{ $animasilistobj->title }}</a>
       </div>
       @endforeach
     </div>
      </div>

      <br>

         <a href="#E" id="E" class="fadewhite"><h3 style="opacity:0.8">#E</h3></a>
         <div class="container">
         <div class="row">
         @foreach($animasiE as $animasilistobj)
         <div class="col-lg-6">
         <a href="{{ route('showanimasi',$animasilistobj->id) }}" class="fadewhite">{{ $animasilistobj->title }}</a>
         </div>
         @endforeach
       </div>
        </div>

        <br>

           <a href="#F" id="F" class="fadewhite"><h3 style="opacity:0.8">#F</h3></a>
           <div class="container">
           <div class="row">
           @foreach($animasiF as $animasilistobj)
           <div class="col-lg-6">
           <a href="{{ route('showanimasi',$animasilistobj->id) }}" class="fadewhite">{{ $animasilistobj->title }}</a>
           </div>
           @endforeach
         </div>
          </div>

          <br>

             <a href="#G" id="G" class="fadewhite"><h3 style="opacity:0.8">#G</h3></a>
             <div class="container">
             <div class="row">
             @foreach($animasiG as $animasilistobj)
             <div class="col-lg-6">
             <a href="{{ route('showanimasi',$animasilistobj->id) }}" class="fadewhite">{{ $animasilistobj->title }}</a>
             </div>
             @endforeach
           </div>
            </div>

            <br>

               <a href="#H" id="H" class="fadewhite"><h3 style="opacity:0.8">#H</h3></a>
               <div class="container">
               <div class="row">
               @foreach($animasiH as $animasilistobj)
               <div class="col-lg-6">
               <a href="{{ route('showanimasi',$animasilistobj->id) }}" class="fadewhite">{{ $animasilistobj->title }}</a>
               </div>
               @endforeach
             </div>
              </div>

              <br>

                 <a href="#I" id="I" class="fadewhite"><h3 style="opacity:0.8">#I</h3></a>
                 <div class="container">
                 <div class="row">
                 @foreach($animasiI as $animasilistobj)
                 <div class="col-lg-6">
                 <a href="{{ route('showanimasi',$animasilistobj->id) }}" class="fadewhite">{{ $animasilistobj->title }}</a>
                 </div>
                 @endforeach
               </div>
                </div>

                <br>

                   <a href="#J" id="J" class="fadewhite"><h3 style="opacity:0.8">#J</h3></a>
                   <div class="container">
                   <div class="row">
                   @foreach($animasiJ as $animasilistobj)
                   <div class="col-lg-6">
                   <a href="{{ route('showanimasi',$animasilistobj->id) }}" class="fadewhite">{{ $animasilistobj->title }}</a>
                   </div>
                   @endforeach
                 </div>
                  </div>

                  <br>

                     <a href="#K" id="K" class="fadewhite"><h3 style="opacity:0.8">#K</h3></a>
                     <div class="container">
                     <div class="row">
                     @foreach($animasiK as $animasilistobj)
                     <div class="col-lg-6">
                     <a href="{{ route('showanimasi',$animasilistobj->id) }}" class="fadewhite">{{ $animasilistobj->title }}</a>
                     </div>
                     @endforeach
                   </div>
                    </div>

                    <br>

                       <a href="#L" id="L" class="fadewhite"><h3 style="opacity:0.8">#L</h3></a>
                       <div class="container">
                       <div class="row">
                       @foreach($animasiL as $animasilistobj)
                       <div class="col-lg-6">
                       <a href="{{ route('showanimasi',$animasilistobj->id) }}" class="fadewhite">{{ $animasilistobj->title }}</a>
                       </div>
                       @endforeach
                     </div>
                      </div>

                      <br>

                         <a href="#M" id="M" class="fadewhite"><h3 style="opacity:0.8">#M</h3></a>
                         <div class="container">
                         <div class="row">
                         @foreach($animasiM as $animasilistobj)
                         <div class="col-lg-6">
                         <a href="{{ route('showanimasi',$animasilistobj->id) }}" class="fadewhite">{{ $animasilistobj->title }}</a>
                         </div>
                         @endforeach
                       </div>
                        </div>

                        <br>

                           <a href="#N" id="N" class="fadewhite"><h3 style="opacity:0.8">#N</h3></a>
                           <div class="container">
                           <div class="row">
                           @foreach($animasiN as $animasilistobj)
                           <div class="col-lg-6">
                           <a href="{{ route('showanimasi',$animasilistobj->id) }}" class="fadewhite">{{ $animasilistobj->title }}</a>
                           </div>
                           @endforeach
                         </div>
                          </div>

                          <br>

                             <a href="#O" id="O" class="fadewhite"><h3 style="opacity:0.8">#O</h3></a>
                             <div class="container">
                             <div class="row">
                             @foreach($animasiO as $animasilistobj)
                             <div class="col-lg-6">
                             <a href="{{ route('showanimasi',$animasilistobj->id) }}" class="fadewhite">{{ $animasilistobj->title }}</a>
                             </div>
                             @endforeach
                           </div>
                            </div>

                            <br>

                               <a href="#P" id="P" class="fadewhite"><h3 style="opacity:0.8">#P</h3></a>
                               <div class="container">
                               <div class="row">
                               @foreach($animasiP as $animasilistobj)
                               <div class="col-lg-6">
                               <a href="{{ route('showanimasi',$animasilistobj->id) }}" class="fadewhite">{{ $animasilistobj->title }}</a>
                               </div>
                               @endforeach
                             </div>
                              </div>

                              <br>

                                 <a href="#Q" id="Q" class="fadewhite"><h3 style="opacity:0.8">#Q</h3></a>
                                 <div class="container">
                                 <div class="row">
                                 @foreach($animasiQ as $animasilistobj)
                                 <div class="col-lg-6">
                                 <a href="{{ route('showanimasi',$animasilistobj->id) }}" class="fadewhite">{{ $animasilistobj->title }}</a>
                                 </div>
                                 @endforeach
                               </div>
                                </div>

                                <br>

                                   <a href="#R" id="R" class="fadewhite"><h3 style="opacity:0.8">#R</h3></a>
                                   <div class="container">
                                   <div class="row">
                                   @foreach($animasiR as $animasilistobj)
                                   <div class="col-lg-6">
                                   <a href="{{ route('showanimasi',$animasilistobj->id) }}" class="fadewhite">{{ $animasilistobj->title }}</a>
                                   </div>
                                   @endforeach
                                 </div>
                                  </div>

                                  <br>

                                     <a href="#S" id="S" class="fadewhite"><h3 style="opacity:0.8">#S</h3></a>
                                     <div class="container">
                                     <div class="row">
                                     @foreach($animasiS as $animasilistobj)
                                     <div class="col-lg-6">
                                     <a href="{{ route('showanimasi',$animasilistobj->id) }}" class="fadewhite">{{ $animasilistobj->title }}</a>
                                     </div>
                                     @endforeach
                                   </div>
                                    </div>

                                    <br>

                                       <a href="#T" id="T" class="fadewhite"><h3 style="opacity:0.8">#T</h3></a>
                                       <div class="container">
                                       <div class="row">
                                       @foreach($animasiT as $animasilistobj)
                                       <div class="col-lg-6">
                                       <a href="{{ route('showanimasi',$animasilistobj->id) }}" class="fadewhite">{{ $animasilistobj->title }}</a>
                                       </div>
                                       @endforeach
                                     </div>
                                      </div>

                                      <br>

                                         <a href="#U" id="U" class="fadewhite"><h3 style="opacity:0.8">#U</h3></a>
                                         <div class="container">
                                         <div class="row">
                                         @foreach($animasiU as $animasilistobj)
                                         <div class="col-lg-6">
                                         <a href="{{ route('showanimasi',$animasilistobj->id) }}" class="fadewhite">{{ $animasilistobj->title }}</a>
                                         </div>
                                         @endforeach
                                       </div>
                                        </div>

                                        <br>

                                           <a href="#V" id="V" class="fadewhite"><h3 style="opacity:0.8">#V</h3></a>
                                           <div class="container">
                                           <div class="row">
                                           @foreach($animasiV as $animasilistobj)
                                           <div class="col-lg-6">
                                           <a href="{{ route('showanimasi',$animasilistobj->id) }}" class="fadewhite">{{ $animasilistobj->title }}</a>
                                           </div>
                                           @endforeach
                                         </div>
                                          </div>

                                          <br>

                                             <a href="#W" id="W" class="fadewhite"><h3 style="opacity:0.8">#W</h3></a>
                                             <div class="container">
                                             <div class="row">
                                             @foreach($animasiW as $animasilistobj)
                                             <div class="col-lg-6">
                                             <a href="{{ route('showanimasi',$animasilistobj->id) }}" class="fadewhite">{{ $animasilistobj->title }}</a>
                                             </div>
                                             @endforeach
                                           </div>
                                            </div>

                                            <br>

                                               <a href="#X" id="X" class="fadewhite"><h3 style="opacity:0.8">#X</h3></a>
                                               <div class="container">
                                               <div class="row">
                                               @foreach($animasiX as $animasilistobj)
                                               <div class="col-lg-6">
                                               <a href="{{ route('showanimasi',$animasilistobj->id) }}" class="fadewhite">{{ $animasilistobj->title }}</a>
                                               </div>
                                               @endforeach
                                             </div>
                                              </div>

                                              <br>

                                                 <a href="#Y" id="Y" class="fadewhite"><h3 style="opacity:0.8">#Y</h3></a>
                                                 <div class="container">
                                                 <div class="row">
                                                 @foreach($animasiY as $animasilistobj)
                                                 <div class="col-lg-6">
                                                 <a href="{{ route('showanimasi',$animasilistobj->id) }}" class="fadewhite">{{ $animasilistobj->title }}</a>
                                                 </div>
                                                 @endforeach
                                               </div>
                                                </div>

                                                <br>

                                                   <a href="#Z" id="Z" class="fadewhite"><h3 style="opacity:0.8">#Z</h3></a>
                                                   <div class="container">
                                                   <div class="row">
                                                   @foreach($animasiZ as $animasilistobj)
                                                   <div class="col-lg-6">
                                                   <a href="{{ route('showanimasi',$animasilistobj->id) }}" class="fadewhite">{{ $animasilistobj->title }}</a>
                                                   </div>
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
