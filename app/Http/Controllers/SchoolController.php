<?php

namespace App\Http\Controllers;

use App\School;
use App\Schoolboard;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SchoolController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $schools = School::all();
        $schools->load('schoolboard');
        
        return view ('schools.index',compact('schools'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $school = new School();
//        $cs = new Schoolboard();


        return view('schools.create',compact('school'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cs = Schoolboard::create($request->all());
        $school = new School();
        $school->school_name = $request->get('school_name');
        $school->schoolboard_id =$cs->id;
        $school->save();


        return redirect('school');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $school = School::findOrFail($id);

        return view("schools.show",compact('school'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $school= School::findOrFail($id);
        $cs = Schoolboard::pluck('schoolboard_name','id');

        return view ('schools.edit',compact('school','cs'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $school= School::findOrFail($id);
        $school->update($request->all());

        return redirect('school');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        School::destroy($id);
        Session::flash('message', 'Cette école à été effacer de la base de donné avec succès');

        return redirect('school');
    }
}
