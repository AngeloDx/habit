<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Residencial extends Model
{
      protected $guarded=[];
  public function Propriedade()
  {
   return $this->hasmany('App\Propriedade');
  }
  public function Categoria()
  {
     return $this->belongsTo('App\Categoria');
  }
}
