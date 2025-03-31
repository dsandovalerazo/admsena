<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
public function training_center(){
    return $this->belongsTo('App\Models\Training_Center');
}

public function apprentices(){
    return $this->hasMany('App\Models\Apprentice');
}

public function teachers(){
    return $this->belongsToMany('App\Models\Teacher');
}

public function areas(){
    return $this->belongsToMany('App\Models\Area');
}
}
