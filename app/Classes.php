<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classes extends Model
{
    public function material()
    {
        return $this->hasMany('App\Material','classes_ID');
    }
}
