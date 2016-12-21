<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Schoolboard extends Model
{
    protected $fillable = ['schoolboard_name'];


    public function schools()
    {
        return $this->hasMany('App\School');
    }
}
