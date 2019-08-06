<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classes extends Model
{
    public function classes()
    {
       return $this->hasOne('App\Home_work' , 'classes_ID');
    }
}
