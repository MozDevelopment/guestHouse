<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Title as Title;

class Client extends Model
{
    //

    public function __contruct(Title $titles)
    {
      $this->titles = $titles->all();
    }

    public function di()
    {
      dd($titles)
    }
}
