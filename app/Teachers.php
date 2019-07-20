<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teachers extends Model
{

    protected $fillable = [
        'name',
        'gender' ,
        'qualifications',
        'address',
        'phone_no',
        'birthday',
        'teacher_documents',
        'teacher_certificate',
        'USER_ID',
    ];

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

 public function user() {
    return $this->belongsTo('App\User' , 'USER_ID');
 }
}
