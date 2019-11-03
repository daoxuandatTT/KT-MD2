<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employees extends Model
{
    public function groupOfEmployees(){
        return $this->belongsTo('App\GroupOfEmployees');
    }
}
