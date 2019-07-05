<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alerts extends Model
{
//Link the Alerts table and classes
 public function classes()
 {
 return $this->hasMany('App\Classes');
 }



}
