<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;


class MyController extends Controller
{
    //

    public function selectStudents(){
        $students = ['aqsa','wahaj','asim','hassan'];
        return view('student',compact('students'));
    }
    public function insertData(Request $req){

        $student = new Student();

        $req->validate([
            "name"=>"required",
            "email"=>"required|email|unique:students,email",
            "password"=>"required"
            
        ]);
        $student->name = $req->name;
        $student->email = $req->email;
        $student->password = $req->password;
        $student->save();
        return redirect('/');


        
    }
    public function selectData(){
        $allStudents = new Student();
        $allStudentsRecords = $allStudents::all();
        return view('select', compact('allStudentsRecords'));
    }
}





            // /^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[!@#$%&])[A-Za-z\d!@#$%&]{8,14}$/
