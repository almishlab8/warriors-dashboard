<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Table extends Model
{
    protected $fillable = [
        'class_name', 'days', 'lesson', 'material_name', 'name', 'time_from', 'time_to'
    ];
}
