<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Home_work extends Model
{
 //Link the Home_work table and classes
 public function classes()
 {
 return $this->hasMany('App\Classes');
 }
}
