<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Provincia extends Model
{
  public function Propriedade()
  {
   return $this->hasmany('App\Propriedade');
  }
  public function Cidade()
  {
   return $this->hasmany('App\Cidade');
  }
  public function Projecto()
  {
   return $this->hasmany('App\Projecto');
  }
}
