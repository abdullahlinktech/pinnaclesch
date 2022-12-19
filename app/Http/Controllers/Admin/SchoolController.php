<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\School;
use Illuminate\Http\Request;

class SchoolController extends Controller
{
    public function index(){
        $school = School::latest()->get();
        return view('pages.admin.school.index',compact('school'));
    }
    public function store(Request $request ){
        $request->validate([
            'name' => 'required|string|min:2',
        
        ]);
        $school = new School();
        $school->name = $request->name;
        $school->save();
        if ($school) {
            return redirect()->route('school.index')->with('success', 'Insert Successfull');
        }
        return redirect()->back()->withInput();
    }
    public function edit($id){
        $school = School::find($id);
        return view('pages.admin.school.edit',compact('school'));
    } 
    public function update(Request $request , School $school){
        $school->name = $request->name;;
        $school->save();
        if ($school) {
            return redirect()->back();
        }
        return redirect()->back()->withInput()->with('success', 'Update Success');
    }
    public function delete(School $school){
        $school -> delete();
        return redirect()->back()->with('success', 'Deleted Successfull');
    }
    
}
