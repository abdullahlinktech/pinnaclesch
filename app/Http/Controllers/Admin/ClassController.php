<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Allclass;
use App\Models\School;
use Illuminate\Http\Request;

class ClassController extends Controller
{
    public function index(){
        $class = Allclass::get();
        $school = School::get();
        return view('pages.admin.class.index',compact('class','school'));
    }
    public function store(Request $request){
        $request->validate([
            'title' => 'required',
            'image' => 'required|mimes:jpg,png,bmp,jpeg,webp|image',
        ]);
        $class = new Allclass();
        $class->title = $request->title;
        $class->school_id = $request->school_id;
        $class->description = $request->description;
        $class->image = $this->imageUpload($request, 'image', 'uploads/class') ?? '';
        $class->save();
        if($class) {
            return redirect()->route('class.index')->with('success', 'Insert Successfull');
        }
        return redirect()->back()->withInput();
    }
    public function edit($id){
        $class = Allclass::find($id);
        $school = School::get();
        return view('pages.admin.class.edit',compact('class','school'));
    }
    public function update(Request $request ,Allclass $class){
        $classImage = '';
        if ($request->hasFile('image')) {
            if (!empty($class->image) && file_exists($class->image)) {
                unlink($class->image);
            }
            $classImage = $this->imageUpload($request, 'image', 'uploads/class');
        }else{
            $classImage = $class->image;
        }
        $class->title = $request->title;
        $class->school_id = $request->school_id;
        $class->description = $request->description;
        $class->image = $classImage;
        $class->save();
        if($class)
        {
            return redirect()->back();
        }
        return redirect()->back()->withInput()->with('success', 'Update Success');
    }
    public function delete(Allclass $class){
        if (!empty($class->image) && file_exists($class->image)) {
            unlink($class->image);
        }
        $class->delete();
        return redirect()->back()->with('success', 'Deleted Successfull');
    }
}
