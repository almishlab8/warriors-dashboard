<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student_home_work extends Model
{
    protected $fillable = ['notes' , 'deadline_date' ,'material_ID' ,'student_ID'];

    public function student() {
        return $this->belongsTo('App\Students' , 'student_ID');
    }

    public function material() {
        return $this->belongsTo('App\Material' , 'material_ID');
    }
}

