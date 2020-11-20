<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cidade extends Model
{
  public function Propriedade()
  {
   return $this->hasmany('App\Propriedade');
  }
  public function Projecto()
  {
   return $this->hasmany('App\Projecto');
  }
  public function Provincia()
  {
   return $this->belongsTo('App\Provincia');
  }
}
