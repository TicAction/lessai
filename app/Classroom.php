<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classroom extends Model
{
    public $fillable=['classroom_name'];

    public function schools()
    {
        return $this->belongsToMany('App\School')->withPivot('school_id');
    }

    public function users()
    {
        return $this->belongsToMany('App\User')->withPivot('user_id');
    }
}
