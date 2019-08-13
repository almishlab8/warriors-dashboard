<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Home_work extends Model
{

    protected $fillable = ['subject' , 'hw_date' ,'classes_ID' ,'studing_subjects_ID'];

 //Link the Home_work table and classes
 public function class()
 {
    return $this->belongsTo('App\Classes' , 'classes_ID');
 }

 public function studing_subject()
 {
  return $this->belongsTo('App\Studing_subjects' , 'studing_subjects_ID');
 }
}
