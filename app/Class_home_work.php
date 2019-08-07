<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Class_home_work extends Model
{
    protected $fillable = ['notes' , 'deadline_date' ,'classes_ID' ,'material_ID'];

    public function class() {
        return $this->belongsTo('App\Classes' , 'classes_ID');
    }

    public function material() {
        return $this->belongsTo('App\Material' , 'material_ID');
    }
}
