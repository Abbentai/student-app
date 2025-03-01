<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\College;


class Students extends Controller
{
    public function index()
    {
        $students = Student::orderBy('id')->get();
        return view('students.index', compact('students'));
    }

    //Creates a new Student object so that the view can properly load due to the old methods
    //and returns the creation screen for the user to insert Student details
    public function create(){
        $student = new Student();
        $colleges = College::orderBy('name')->get();
        return view('students.create', compact('student', 'colleges'));
    }
    
    //Validates and stores the Student object created by the user in the database
    public function store(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => ['required', 'email'],
            'phone' => ['required', 'digits:8'],
            'dob' => ['required', 'date'],
        ]);

        Student::create($request->all());
        return redirect()->route('students.index')->with('message', 'Student ' . $request->name . ' has been added successfully');
    }
    
    //Fetches the Student that is going to be edited by the user from the database and returns the edit screen
    public function edit($id){
        $student = Student::find($id);
        $colleges = College::orderBy('name')->get();
        return view('students.edit', compact('student', 'colleges'));
    }
    
    //Updates an existing Student in the database
    public function update($id, Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => ['required', 'email'],
            'phone' => ['required', 'digits:8'],
            'dob' => ['required', 'date'],
        ]);

        $existingStudent = Student::find($id);

        $existingStudent->update($request->all());
        return redirect()->route('students.index')->with('message', 'Student ' . $existingStudent->name . ' has been updated successfully');
    }

    //Drops an existing Student based on the id
    public function destroy($id){
        $student = Student::find($id);
        $student->delete();

        return back()->with('message', 'Student ' . $student->name . ' has been deleted successfully'); //returns to previous page
    }

}
