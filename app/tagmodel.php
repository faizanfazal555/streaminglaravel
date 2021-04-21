<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class tagmodel extends Model
{
    protected $table="tag";

    public function animasidetailmodel(){
      return $this->belongsToMany(animasidetailmodel::class);
    }

}
