<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Activity;
use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Notifications\Action;

class ActivityController extends Controller
{
    public function index(){
        $activity = Activity::latest()->get();
        return view('pages.admin.activity.index',compact('activity'));
    }
    public function store(Request $request ){
        $request->validate([
            'title' => 'required',
            'image' => 'required|mimes:jpg,png,bmp,jpeg,webp|image',
        ]);
        $activity = new Activity();
        $activity->title = $request->title;
        $activity->description = $request->description;
        $activity->image = $this->imageUpload($request, 'image', 'uploads/activity') ?? '';
        $activity->save();
        if($activity) {
            return redirect()->route('activity.index')->with('success', 'Insert Successfull');
        }
        return redirect()->back()->withInput();
    }
    public function edit($id){
        $activity = Activity::find($id);
        return view('pages.admin.activity.edit',compact('activity'));
    }
    public function update(Request $request ,Activity $activity){
        $activityImage = '';
        if ($request->hasFile('image')) {
            if (!empty($activity->image) && file_exists($activity->image)) {
                unlink($activity->image);
            }
            $activityImage = $this->imageUpload($request, 'image', 'uploads/activity');
        }else{
            $activityImage = $activity->image;
        }
    
        $activity->title = $request->title;
        $activity->description = $request->description;
        $activity->image = $activityImage;
        $activity->save();
        if($activity)
        {
            return redirect()->back();
        }
        return redirect()->back()->withInput()->with('success', 'Update Success');
    }
    public function delete(Activity $activity){
        if (!empty($activity->image) && file_exists($activity->image)) {
            unlink($activity->image);
        }
        $activity->delete();
        return redirect()->back()->with('success', 'Deleted Successfull');

    }
}
