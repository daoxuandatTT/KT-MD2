<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GroupOfEmployees extends Model
{
    protected $table = 'group';
    public function employees(){
        return $this->hasMany('App\Employees');
    }
}
