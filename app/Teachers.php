<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teachers extends Model
{
//Link the Teachers table and alerts
 public function alerts()
 {
  return $this->hasMany('App\Alerts');
 }

 //Link the Teachers table and Studing_subjects
 public function studing_subjects()
 {
  return $this->hasMany('App\Studing_subjects');
 }
}
