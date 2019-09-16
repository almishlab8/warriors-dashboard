<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    protected $table = 'materials';
    //protected $casts = ['material_name' => 'array'];
    protected $fillable = ['class_id','material_name'];

    public function class()
	{
		return $this->belongsTo(Classes::class, 'class_id');
    }

  }
