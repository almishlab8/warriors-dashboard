<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Students extends Model
{
 //Link the user table and attendees

 public function attendees()
 {
  return $this->hasMany('App\Attendees');
 }

 //Link the Students table and rating

      public function rating()
    {
        return $this->belongsTo('App\Rating' , 'students_id');
    }
 //Link the Students table and alerts

 public function alert()
 {
  return $this->hasOne('App\Alert','students_id');
 }



 //Link the Students table and classes
 public function classes()
  {
  return $this->hasOne('App\Classes');
  }



  public function user() {
    return $this->belongsTo('App\User' , 'USERS_ID');
 }




protected $fillable = [
  'name' ,'USERS_ID', 'brithday','gender','status_number','phone_no','address', 'student_documents' , 'classes_ID' ,'student_no'
];
}
