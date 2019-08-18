<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alert extends Model
{
    protected $table = 'alerts';

    protected $fillable = [
		'title', 'teachers_id' ,'students_id','for_all'
    ];

//Link the Alerts table and Teachers
 public function teachers()
 {
 return $this->belongsTo('App\Teachers','teachers_id');
 }
//Link the Alerts table and Students
 public function students()
 {
 return $this->belongsTo('App\Students','students_id');
 }




}
