<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function index()
    {
        $teacher = Teacher::get();
        return view('pages.admin.teacher.index', compact('teacher'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|min:3',
            'phone' => 'required|max:18',
            'designation' => 'required',
            'specality' => 'required',
            'image' => 'required|mimes:jpg,png,bmp,jpeg,webp|image',
        ]);
        $teacher = new Teacher();
        $teacher->name = $request->name;
        $teacher->phone = $request->phone;
        $teacher->designation = $request->designation;
        $teacher->specality = $request->specality;
        $teacher->image = $this->imageUpload($request, 'image', 'uploads/teacher') ?? '';
        $teacher->save();
        if ($teacher) {
            return redirect()->route('teacher.index')->with('success', 'Insert Successfull');
        }
        return redirect()->back()->withInput();
    }

    public function edit($id)
    {
        $teacher = Teacher::find($id);
        return view('pages.admin.teacher.edit', compact('teacher'));
    }
    public function update(Request $request, Teacher $teacher)
    {
        $teacherImage = '';
        if ($request->hasFile('image')) {
            if (!empty($teacher->image) && file_exists($teacher->image)) {
                unlink($teacher->image);
            }
            $teacherImage = $this->imageUpload($request, 'image', 'uploads/teacher');
        } else {
            $teacherImage = $teacher->image;
        }

        $teacher->name = $request->name;
        $teacher->phone = $request->phone;
        $teacher->designation = $request->designation;
        $teacher->specality = $request->specality;
        $teacher->image = $teacherImage;
        $teacher->save();
        if ($teacher) {
            return redirect()->back();
        }
        return redirect()->back()->withInput()->with('success', 'Update Success');
    }
    public function delete(Teacher $teacher)
    {
        if (!empty($teacher->image) && file_exists($teacher->image)) {
            unlink($teacher->image);
        }
        $teacher->delete();
        return redirect()->back()->with('success', 'Deleted Successfull');
    }
}
