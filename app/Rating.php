<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{

    protected $fillable =
    [
        'students_id' , 'mark' , 'description' ,'material_name'
    ];


    public function student()
    {
        return $this->belongsTo('App\Students');
    }
}
