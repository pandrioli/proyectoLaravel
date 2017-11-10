<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actor extends Model
{
    //
    public function getNombreCompleto() {
      return $this->first_name . " " . $this->last_name;
    }
}
