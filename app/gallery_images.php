<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class gallery_images extends Model
{
    protected $table = 'gallery_images';
    protected $fillable = [
		'image_url', 'image_title' 
    ];
}
