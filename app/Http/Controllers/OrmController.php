<?php

namespace App\Http\Controllers;
use App\Models\Apprentice;
use App\Models\Area;
use App\Models\Computer;
use App\Models\Course;
use App\Models\Teacher;
use App\Models\Training_Center;
use App\Models\User;

use Illuminate\Http\Request;

class OrmController extends Controller
{
   public function consultas()
   {

      //$apprentice=Apprentice::find(2);
      //return $apprentice->course;
      
      //$apprentice=Apprentice::find(3);
      //return $apprentice->computer;

      //$teacher=Teacher::find(1);
      //return $teacher->area;

      $computer=Computer::find(2);
      return $computer->apprentice;

      //$course=Course::find(3);
      //return $course->training_center;

      //$area=Area::find(1);
      //return $area->teacher;

      //$training_center=Training_Center::find(1);
      //return $training_center->course;







      
   }
}
