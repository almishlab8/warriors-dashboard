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
  return $this->hasOne('App\Rating');
 }

 //Link the Students table and alerts

 public function alerts()
 {
  return $this->hasMany('App\Alerts');
 }



 //Link the Students table and classes
 public function classes()
  {
  return $this->hasOne('App\Classes');
  }




  public function user() {
    return $this->belongsTo('App\User' , 'USERS_ID');
 }

}
