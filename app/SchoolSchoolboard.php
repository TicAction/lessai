<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SchoolSchoolboard extends Model
{
    public $fillable = ['school_id','schoolboard_id'];
    public $timestamps =false;
    public $table = 'school_schoolboard';

    public function school()
    {
        return $this->belongsTo('App\School');
    }

    public function schoolboard()
    {
        return $this->belongsTo('App\Schoolboard');
    }


}
