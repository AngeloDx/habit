<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Distrito extends Model
{
  public function Propriedade()
  {
   return $this->hasmany('App\Propriedade');
  }
  public function Projecto()
  {
   return $this->hasmany('App\Projecto');
  }
  public function Distrito()
  {
   return $this->belongsTo('App\Distrito');
  }
}
