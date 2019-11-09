<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    public $table="student";
    public function course(){
        return $this->belongsTo('App\Course');
    }
}
