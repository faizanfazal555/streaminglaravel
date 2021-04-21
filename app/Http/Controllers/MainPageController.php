<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tagmodel;
use App\animasidetailmodel;
use App\episodesmodel;

class mainpagecontroller extends Controller
{

  public function mainpage(){
    $searching = request()->query('search');
if($searching){
$animyear = animasidetailmodel::where('year','LIKE', "%{$searching}%")->paginate(12);
}else{
  $searching = request()->query('searching');
  if($searching){
  $animyear = animasidetailmodel::where('title','LIKE', "%{$searching}%")->paginate(2);
  }else{
  $animyear = animasidetailmodel::paginate(12);
  }
}



    return view('main.mainpage')->with('tag',tagmodel::all())->with('animasi',$animyear)->with('animasiall',animasidetailmodel::all());

  }

  public function genrepage(tagmodel $genreobj){
    $searching = request()->query('searching');
    if($searching){
      $cuk = $genreobj->animasidetailmodel()->where('title','LIKE',"%{$searching}%")->paginate(2);
    }else{
    $cuk = $genreobj->animasidetailmodel()->paginate(2);
  }

    return view('main.genrepage')->with('genre',$cuk)->with('tag',tagmodel::all())->with('animasi',animasidetailmodel::all());
  }

  public function ongoingpage(){
    return view('main.ongoingpage')->with('animasiongoing',animasidetailmodel::where('status','=','ongoing')->get())->with('tag',tagmodel::all())->with('animasiall',animasidetailmodel::all());
  }

  public function listanimepage(){

    $listA = animasidetailmodel::where('title','LIKE','a%')->get();
    $listB = animasidetailmodel::where('title','LIKE','b%')->get();
    $listC = animasidetailmodel::where('title','LIKE','c%')->get();
    $listD = animasidetailmodel::where('title','LIKE','d%')->get();
    $listE = animasidetailmodel::where('title','LIKE','e%')->get();
    $listF = animasidetailmodel::where('title','LIKE','f%')->get();
    $listG = animasidetailmodel::where('title','LIKE','g%')->get();
    $listH = animasidetailmodel::where('title','LIKE','h%')->get();
    $listI = animasidetailmodel::where('title','LIKE','i%')->get();
    $listJ = animasidetailmodel::where('title','LIKE','j%')->get();
    $listK = animasidetailmodel::where('title','LIKE','k%')->get();
    $listL = animasidetailmodel::where('title','LIKE','l%')->get();
    $listM = animasidetailmodel::where('title','LIKE','m%')->get();
    $listN = animasidetailmodel::where('title','LIKE','n%')->get();
    $listO = animasidetailmodel::where('title','LIKE','o%')->get();
    $listP = animasidetailmodel::where('title','LIKE','p%')->get();
    $listQ = animasidetailmodel::where('title','LIKE','q%')->get();
    $listR = animasidetailmodel::where('title','LIKE','r%')->get();
    $listS = animasidetailmodel::where('title','LIKE','s%')->get();
    $listT = animasidetailmodel::where('title','LIKE','t%')->get();
    $listU = animasidetailmodel::where('title','LIKE','u%')->get();
    $listV = animasidetailmodel::where('title','LIKE','v%')->get();
    $listW = animasidetailmodel::where('title','LIKE','w%')->get();
    $listX = animasidetailmodel::where('title','LIKE','x%')->get();
    $listY = animasidetailmodel::where('title','LIKE','y%')->get();
    $listZ = animasidetailmodel::where('title','LIKE','z%')->get();
    $listUNKNOWN = animasidetailmodel::where('title','LIKE','%[^1-999]%')->get();

    return view('main.listanimepage')->with('tag',tagmodel::all())->with('animasiall',animasidetailmodel::all())
    ->with('animasiA',$listA)
    ->with('animasiB',$listB)
    ->with('animasiC',$listC)
    ->with('animasiD',$listD)
    ->with('animasiE',$listE)
    ->with('animasiF',$listF)
    ->with('animasiG',$listG)
    ->with('animasiH',$listH)
    ->with('animasiI',$listI)
    ->with('animasiJ',$listJ)
    ->with('animasiK',$listK)
    ->with('animasiL',$listL)
    ->with('animasiM',$listM)
    ->with('animasiN',$listN)
    ->with('animasiO',$listO)
    ->with('animasiP',$listP)
    ->with('animasiQ',$listQ)
    ->with('animasiR',$listR)
    ->with('animasiS',$listS)
    ->with('animasiT',$listT)
    ->with('animasiU',$listU)
    ->with('animasiV',$listV)
    ->with('animasiW',$listW)
    ->with('animasiX',$listX)
    ->with('animasiY',$listY)
    ->with('animasiZ',$listZ)
    ->with('animasiUNKNOWN',$listUNKNOWN);
  }

  public function jadwalanimasipage(){
 return view('main.jadwalanimasipage')->with('tag',tagmodel::all())->with('animasiall',animasidetailmodel::all())
 ->with('animasisenin',animasidetailmodel::where('showtime','=','senin')->get())
 ->with('animasiselasa',animasidetailmodel::where('showtime','=','selasa')->get())
 ->with('animasirabu',animasidetailmodel::where('showtime','=','rabu')->get())
 ->with('animasikamis',animasidetailmodel::where('showtime','=','kamis')->get())
 ->with('animasijumat',animasidetailmodel::where('showtime','=','jumat')->get())
 ->with('animasisabtu',animasidetailmodel::where('showtime','=','sabtu')->get())
 ->with('animasiminggu',animasidetailmodel::where('showtime','=','minggu')->get());
  }

  public function showanimasi(animasidetailmodel $animasiobj){

    return view('main.detailpage')->with('animasi',$animasiobj)->with('animasis',animasidetailmodel::all())->with('tag',tagmodel::all())
    ->with('episodes',$animasiobj->episodesmodel()->orderby('episode','ASC')->get());


  }

  public function watchepisode(animasidetailmodel $animasiobj,episodesmodel $episodeobj){

    return view('main.watchanimasi')->with('animasi',$animasiobj)->with('animasis',animasidetailmodel::all())->with('tag',tagmodel::all())
    ->with('episodes',$animasiobj->episodesmodel()->where('episode',$episodeobj->episode)->first())
    ->with('episodesall',$animasiobj->episodesmodel()->get());;


  }

}
