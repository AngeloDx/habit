<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Propriedade extends Model
{
  protected $guarded=[];
public function Categoria()
{
   return $this->belongsTo('App\Categoria');
}
public function Venda()
{
   return $this->belongsTo('App\Venda');
}
public function Aluguer()
{
   return $this->belongsTo('App\Aluguer');
}


public function Provincia()
{
 return $this->belongsTo('App\Provincia');
}

public function User()
{
 return $this->belongsTo('App\User');
}
public function Intencao()
{
 return $this->belongsTo('App\Intencao');
}
public function Comercial()
{
 return $this->belongsTo('App\Comercial');
}
public function Residencial()
{
 return $this->belongsTo('App\Residencial');
}
protected $casts = [
      'consinha' => 'boolean',
  ];
}
