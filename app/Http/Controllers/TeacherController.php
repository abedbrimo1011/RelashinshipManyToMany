<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function showAssignSubjectsForm(Teacher $teacher){

        $sub = Subject::all();
        return view("teacher.assign-subject",compact("teacher","sub"));
    }
    public function assignSubjects(Request $request, Teacher $teacher){
        // return $request;
        $val = $request->validate([
            "subjects"=> "array|required",
            "teachers.*"=> "exists:subjects,id",
        ]);
    //   return $val['subjects'] ;
        $teacher->subjects()->sync($val['subjects']) ;

    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $teachers = Teacher::all();
        // return view("teacher.index", compact("teachers"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("teacher.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       
        $teacher = Teacher::create($request->all());
        return redirect()->route("teacher.index")->with("success","........");
    }

    /**
     * Display the specified resource.
     */
    public function show(Teacher $teacher)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Teacher $teacher)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Teacher $teacher)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Teacher $teacher)
    {
        //
    }
}
