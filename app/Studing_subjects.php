<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Studing_subjects extends Model
{

     //Link the Teachers table and Studing_subjects
 public function home_work()
 {
  return $this->hasMany('App\Home_work');
 }


 //Link the Studing_subjects table and classes
 public function classes()
 {
 return $this->hasMany('App\Classes');
 }



}
