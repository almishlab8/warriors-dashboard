<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Table extends Model
{
    protected $guarded = [];

    public function teacher()
	{
		return $this->belongsTo(User::class, 'teacher_id');
    }
    public function material()
	{
		return $this->belongsTo(Material::class, 'material_id_table');
    }
}
