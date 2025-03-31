<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
public function training_center() {
        return $this->belongsTo('App\Models\Training_Center');
    }

    public function area() {
        return $this->belongsTo('App\Models\Area');
    }

    public function courses() {
        return $this->belongsToMany('App\Models\Course');
    }
}
