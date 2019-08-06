<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    protected $table = 'materials';
    protected $fillable = [
		'material_name', 'class_name' 
    ];

    public function class()
	{
		return $this->belongsTo('App\Classes');
	}
}
