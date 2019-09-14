<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attendees extends Model
{
    protected $table = 'attendees';
    protected $fillable = [
        'students_id', 'status'
    ];
}
