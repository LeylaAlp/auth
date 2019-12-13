<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Validator;
use App\Course;

class CourseController extends Controller
{
    public function index()
    {

////
//        $course=Course::find(4);
//        $course->Delete();



        Course::withTrashed()->where('id',3)->forceDelete();


//
//    }  foreach ($course as $key) {
//
//            echo $key->course_title."</br>";









    }

}





















