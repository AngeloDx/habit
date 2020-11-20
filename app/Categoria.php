<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{

    protected $guarded=[];
public function Propriedade()
{
 return $this->hasmany('App\Propriedade');
}
public function Comercial()
{
 return $this->hasmany('App\Comercial');
}
public function Residencial()
{
 return $this->hasmany('App\Residencial');
}

public function Projecto()
{
 return $this->hasmany('App\Projecto');
}
}
