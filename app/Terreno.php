<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Terreno extends Model
{
  protected $guarded=[];
public function Provincia()
{
   return $this->belongsTo('App\Provincia');
}

}
