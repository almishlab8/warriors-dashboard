<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classes extends Model
{
    public function classes()
    {
       return $this->hasOne('App\Home_work' , 'classes_ID');
    }

    public function material()
    {
        return $this->hasMany('App\Material','classes_ID');
    }
}
