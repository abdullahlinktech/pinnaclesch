<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Allclass;
use App\Models\School;
use App\Models\Section;
use Illuminate\Http\Request;

class SectionController extends Controller
{
    public function index(){
        $school = School::latest()->get();
        $class = Allclass::get();
        $section = Section::get();
        return view('pages.admin.section.index',compact('school','class','section'));
    }
    public function getAllclass($id)
    {
        $class = Allclass::where('school_id', $id)->get();
        return response()->json($class);
    }
    public function store(Request $request){
        $request->validate([
            'title' => 'required',
            'image' => 'required|mimes:jpg,png,bmp,jpeg,webp|image',
        ]);
        $section = new Section();
        $section->title = $request->title;
        $section->school_id = $request->school_id;
        $section->class_id = $request->class_id;
        $section->description = $request->description;
        $section->image = $this->imageUpload($request, 'image', 'uploads/section') ?? '';
        $section->save();
        if($section) {
            return redirect()->route('section.index')->with('success', 'Insert Successfull');
        }
        return redirect()->back()->withInput();
    }
    public function edit($id){
        $section = Section::Find($id);
        $school = School::get();
        $class = Allclass::get();
        return view('pages.admin.section.edit',compact('school','class','section'));
    }
    public function update(Request $request ,Section $section){
        $sectionImage = '';
        if ($request->hasFile('image')) {
            if (!empty($section->image) && file_exists($section->image)) {
                unlink($section->image);
            }
            $sectionImage = $this->imageUpload($request, 'image', 'uploads/section');
        }else{
            $sectionImage = $section->image;
        }
        $section->title = $request->title;
        $section->school_id = $request->school_id;
        $section->class_id = $request->class_id;
        $section->description = $request->description;
        $section->image = $sectionImage;
        $section->save();
        if($section)
        {
            return redirect()->back();
        }
        return redirect()->back()->withInput()->with('success', 'Update Success');
    }
    public function delete(Section $section){
        if (!empty($section->image) && file_exists($section->image)) {
            unlink($section->image);
        }
        $section->delete();
        return redirect()->back()->with('success', 'Deleted Successfull');
    }
}
