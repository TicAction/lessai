<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    protected $fillable = ['school_name', 'schoolboard_id'];
    protected $dates = ['created_at', 'updated_at'];

    public function schoolboard()
    {
        return $this->belongsToMany('App\Schoolboard');
    }

    public function classrooms()
    {
        return $this->belongsToMany('App\Classroom');
    }
}
