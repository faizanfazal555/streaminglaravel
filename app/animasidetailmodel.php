<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class animasidetailmodel extends Model
{
    protected $table="animasidetail";

    public function tagmodel(){
      return $this->belongsToMany(tagmodel::class);
    }

    public function episodesmodel(){
      return $this->hasMany(episodesmodel::class);
    }
}
