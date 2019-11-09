<?php

namespace App\Http\Controllers;

use App\Course;
use App\Student;
use Illuminate\Http\Request;

class ManageController extends Controller
{
    public function ShowCourse()
    {
        $course=Course::all();
        $courses=array('courses' => $course);
        return view('home',$courses);
    }

    public function ShowStudent(Request $request,$id)
    {

        if($request->isMethod("post")){
            $i=0;
            // $count=count($request->input('id'));
            while($i<2){
                $std=Student::where('id',$request->input("id$i"))->first();
                $std->grade=$request->input("grade$i");
                $std->save();
                ++$i;
            }
            // return redirect()->action('ManageController@ShowStudent');
            // return redirect()->route('show');
        }
        $courses=Course::all();
        $course=Course::find($id);
        $student=Student::all();
        return view('content',['courses'=> $courses,'course'=>$course,'student'=>$student]);
    }

    public function grade(Request $request,$id)
    {
    
        $p = Person::find($id);
        if($request->isMethod('post')){
            if($request->input('name')){      $p->name = $request->input('name');      }
            $p->save();
        return $p;
        

        }
   
}
}