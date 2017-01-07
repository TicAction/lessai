<?php

namespace App\Http\Controllers;


use App\Classroom;
use App\ClassroomSchool;
use App\Http\Requests\CsRequest;
use App\School;
use App\Schoolboard;
use App\SchoolSchoolboard;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ClassroomSchoolController extends Controller
{
    public function index(){


        $classroomschools = ClassroomSchool::all();



        return view('classroomSchools.index',compact('classroomschools'));
    }


   public function create(){

       $classroomSchools = new ClassroomSchool();

       return view('classroomSchools.create',compact('classroomSchools'));
   }

    public function store(CsRequest $request){

        $classroom = Classroom::create($request->all());
        $school = School::create($request->all());
        $cs = new SchoolSchoolboard();
        $cs->school_id = $school->id;
        $cs->schoolboard_id = $request->get('schoolboard_name');

        $cs->save();
        $classroomSchool = new ClassroomSchool();

        $classroomSchool->school_id = $school->id;
        $classroomSchool->classroom_id = $classroom->id;
        $classroomSchool->group = $request->get('group');
        $classroomSchool->user_id = Auth::user()->id;
        $classroomSchool->save();


        return redirect('classe');
    }
}
