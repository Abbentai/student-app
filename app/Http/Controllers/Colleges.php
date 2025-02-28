<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\College;

class Colleges extends Controller
{
    public function index()
    {
        $colleges = College::orderBy('id')->get();
        return view('colleges.index', compact('colleges'));
    }

    //Creates a new College object so that the view can properly load due to the old methods
    //and returns the creation screen for the user to insert College details
    public function create()
    {
        $college = new College();
        return view('colleges.create', compact('college'));
    }

    //Validates and stores the College object created by the user in the database
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'unique:colleges,name'],
            'address' => 'required'
        ]);

        College::create($request->all());
        return redirect()->route('colleges.index')->with('message', 'College ' . $request->name . ' has been added successfully');
    }

    //Fetches the College that is going to be edited by the user from the database and returns the edit screen
    public function edit($id)
    {
        $college = College::find($id);
        return view('colleges.edit', compact('college'));
    }

    //Updates an existing College in the database
    public function update($id, Request $request)
    {
        $request->validate([
            'name' => 'required',
            'address' => 'required'
        ]);

        $existingCollege = College::find($id);

        $existingCollege->update($request->all());
        return redirect()->route('colleges.index')->with('message', 'College ' . $existingCollege->name . ' has been updated successfully');
    }

    //Drops an existing College based on the id
    public function destroy($id)
    {
        $college = College::find($id);
        $college->delete();

        return back()->with('message', 'College ' . $college->name . ' has been deleted successfully'); //returns to previous page

    }
}
