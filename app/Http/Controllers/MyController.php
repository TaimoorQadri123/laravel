<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    //

    public function selectStudents(){
        $students = ['aqsa','wahaj','asim','hassan'];
        return view('student',compact('students'));
    }
    public function insertData(){

        
    }
}
