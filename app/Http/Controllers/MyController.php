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
    public function editData($id){
        $student = new Student();
        $studentRecord = Student::find($id);
        return view('edit',compact('studentRecord'));
    }
    public function updateData(Request $req ,$id){
     
        $student = new Student();
        $studentRecord = Student::find($id);  //get data from table
        $studentRecord->name = $req->name;
        $studentRecord->email = $req->email;
        $studentRecord->password = $req->password;
        $studentRecord->save();
        return redirect( '/select');


    }
    // public function deleteData($id){
    //     $student = new Student();
    //     $studentRecord = Student::find($id);
    //     $studentRecord->delete();
    //     return redirect('/select');
    // }
    public function deleteData($id)
{
    $student = Student::find($id);
    if ($student) {
        $student->delete();
        return redirect('/select')->with('success', 'Student record deleted successfully.');
    } else {
        return redirect('/select')->with('error', 'Student record not found.');
    }
}
    
}





            // /^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[!@#$%&])[A-Za-z\d!@#$%&]{8,14}$/
