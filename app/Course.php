<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    public $table="course";
    public function student(){
        return $this->hasMany('App\Student');
    }
}
