<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Students extends Controller
{
    public function index()
    {
        return view('students.index');
    }

    //Creates a new Student object and returns the creation screen for the user to insert Student details
    public function create(){
        return view('students.index');
    }
    
    //Validates and stores the Student object created by the user in the database
    public function store(Request $request){
        return view('students.index');
    }
    
    //Fetches the Student that is going to be edited by the user from the database and returns the edit screen
    public function edit($id){
        return view('students.index');
    }
    
    //Updates an existing Student in the database
    public function update(Request $request){
        return view('students.index');
    }

    //Drops an existing Student based on the id
    public function destroy($id){
        return view('students.index');
    }

}
