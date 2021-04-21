<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class episodesmodel extends Model
{

    protected $table="episodes";

    public function animasidetailmodel(){
      return $this->belongsTo(animasidetailmodel::class, 'animasidetailmodel_id');
    }
}
