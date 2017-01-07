<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClassroomSchool extends Model
{
    public $fillable =['group','school_id','classroom_id'];
    public $timestamps = false;

    public function school()
    {
        return $this->belongsTo('App\School');
    }
    public function classroom()
    {
        return $this->belongsTo('App\Classroom');
    }

    public function setGroupAttribute($key)
    {
        return $this->attributes['group'] = strtoupper($key);
    }
}
