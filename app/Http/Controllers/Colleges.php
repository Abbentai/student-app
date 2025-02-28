<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\College;

class Colleges extends Controller
{
    public function index()
    {
        $colleges = College::orderBy('id')->get();
        return view('colleges', compact('colleges'));
    }

    //Creates a new College object and returns the creation screen for the user to insert College details
    public function create(){
        return view('colleges');
    }
    
    //Validates and stores the College object created by the user in the database
    public function store(Request $request){
        return view('colleges');
    }
    
    //Fetches the College that is going to be edited by the user from the database and returns the edit screen
    public function edit($id){
        return view('colleges');
    }
    
    //Updates an existing College in the database
    public function update(Request $request){
        return view('colleges');
    }

}
