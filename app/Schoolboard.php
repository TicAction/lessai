<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Schoolboard extends Model
{
    public $fillable = ['schoolboard_name'];
    public $dates =['created_at','updated_at'];

    public function schools()
    {
        return $this->belongsToMany('App\School');
    }
}
