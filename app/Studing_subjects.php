<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Studing_subjects extends Model
{

    protected $fillable = ['name' , 'teachers_id' ,'classes_ID'];

     //Link the Teachers table and Studing_subjects
 public function home_work()
 {
  return $this->hasOne('App\Home_work' , 'studing_subjects_ID');
 }


 //Link the Studing_subjects table and classes
 public function class()
 {
 return $this->belongsTo('App\Classes' , 'classes_ID');
 }

  //Link the Studing_subjects table and classes
  public function teachers()
  {
  return $this->belongsTo('App\Teachers' , 'teachers_id');
  }



}
