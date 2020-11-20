<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Venda extends Model
{
      protected $guarded=[];

      public function propriedade()
{
   return $this->hasmany('App\Propriedade');
}
public function intencao()
{
   return $this->belongsTo('App\Intencao');
}
}
