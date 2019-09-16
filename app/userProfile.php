<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class userProfile extends Model
{
    public function user(){
        return $this->belongsTo('App\User');
    }

    protected $table = 'user_profile';
    protected $fillable = [
       'user_id', 'brithday','gender','status_number','phone','address','Academic_achievement','documents','cv','graduationـcertificate'
    ];
}
