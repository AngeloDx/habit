<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Intencao extends Model
{
      public function venda()
  {
     return $this->hasmany('App\Venda');
  }
      public function aluguer()
  {
     return $this->hasmany('App\Aluguer');

  }
      public function lease()
  {
     return $this->hasmany('App\Lease');
  }
}
