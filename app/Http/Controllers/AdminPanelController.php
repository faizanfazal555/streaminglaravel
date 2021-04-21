<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\tagrequest;
use App\Http\Requests\animasirequest;
use App\Http\Requests\changestatusrequest;
use App\Http\Requests\changeanimasirequest;
use App\Http\Requests\episodesrequest;
use App\tagmodel;
use App\animasidetailmodel;
use App\episodesmodel;

class AdminPanelController extends Controller
{
  /* AdminMain */
    public function adminpanel(){
    return view('adminview.adminpage');
    }

    public function uploadanimasi(){
      return view('adminview.uploadanimasi')->with('tags',tagmodel::all());
    }

   /* TAG */
    public function createtag(){
      return view('adminview.createtag');
    }


  public function storetag(tagrequest $request){
  $tag = new tagmodel();
  $tag->tagname = $request->name;
  $tag->description = $request->description;
  $tag->save();

  session()->flash('tagcreated','Tag has been created');
  return redirect(route('createtag'));
  }

  public function storeanimasi(animasirequest $request){
  $img = $request->image->store('images');

  $animasi = new animasidetailmodel();
  $animasi->title = $request->title;
  $animasi->alternativetitle = $request->alternativetitle;
  $animasi->description = $request->description;
  $animasi->showtime = $request->showtime;
  $animasi->rating = $request->rating;
  $animasi->voter = $request->voter;
  $animasi->status = $request->status;
  $animasi->year = $request->year;
  $animasi->image = $img;
  $animasi->save();

  if($request->tag){
    $animasi->tagmodel()->attach($request->tag);
  }
  session()->flash('animasiupload','Animasi has been uploaded');

  return redirect(route('uploadanimasi'));

  }

  public function ongoinganimasi(){
    return view('adminview.ongoinganimasi')->with('ongoing',animasidetailmodel::where('status','=','ongoing')->paginate(5));
  }

  public function changestatus(animasidetailmodel $statusobj,changestatusrequest $changerequest){
  $statusobj->status = $changerequest->status;
  $statusobj->save();
  session()->flash('changestatus','Animasi status has been changed');

  return redirect(route('ongoinganimasi'));
  }

  public function animasilistedit(){
    return view('adminview.animasilistedit')->with('animasi',animasidetailmodel::paginate(8));
  }

  public function editanimasi(animasidetailmodel $animasiobj){
    return view('adminview.editanimasi')->with('animasi',$animasiobj)->with('tags',tagmodel::all());
  }

  public function changeanimasi(animasidetailmodel $animasiobj,changeanimasirequest $request){

    $animasiobj->title = $request->title;
    $animasiobj->alternativetitle = $request->alternativetitle;
    $animasiobj->description = $request->description;
    $animasiobj->showtime = $request->showtime;
    $animasiobj->rating = $request->rating;
    $animasiobj->voter = $request->voter;
    $animasiobj->status = $request->status;
    $animasiobj->year = $request->year;
    if($request->hasFile('image')){
    $img = $request->image->store('images');
    $animasiobj->image = $img;
     }
    $animasiobj->save();

    if($request->tag){
      $animasiobj->tagmodel()->sync($request->tag);
    }

    session()->flash('changeanimasi','Animasi detail has been Changed');

    return redirect(route('editanimasi',$animasiobj->id));
  }

  public function testing(){
    return view('adminview.testingpage');
  }

  public function addepisodelist(){
    $searching = request()->query('searching');
    if($searching){
    $animsearch = animasidetailmodel::where('title','LIKE', "%{$searching}%")->paginate(8);
    }else{
    $animsearch = animasidetailmodel::paginate(8);
    }

    return view('adminview.addepisodelist')->with('animasi',$animsearch);
  }

  public function addepisode(animasidetailmodel $animasiobj){
    return view('adminview.addepisode')->with('animasi',$animasiobj);
  }

  public function storeepisode(animasidetailmodel $animasiobj,episodesmodel $episodesobj,episodesrequest $request){

    $episodesobj->episode = $request->episode;
    $episodesobj->animasidetailmodel_id = $animasiobj->id;
    if($request->hasFile('video1')){
    $videosatu = $request->video1->store('videos');
    $episodesobj->video1 = $videosatu;
     }

     if($request->hasFile('video2')){
     $videodua = $request->video2->store('videos');
     $episodesobj->video2 = $videodua;
      }

      if($request->hasFile('video3')){
      $videotiga = $request->video3->store('videos');
      $episodesobj->video3 = $videotiga;
      }

       $episodesobj->save();

       session()->flash('addepisode','New episode has been added');

       return redirect(route('addepisode',$animasiobj->id));
  }


}
