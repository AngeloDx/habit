<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Projecto extends Model
{
  protected $guarded=[];
public function Categoria()
{
   return $this->belongsTo('App\Categoria');
}

public function Provincia()
{
 return $this->belongsTo('App\Provincia');
}
public function Intencao()
{
 return $this->belongsTo('App\Intencao');
}
}
