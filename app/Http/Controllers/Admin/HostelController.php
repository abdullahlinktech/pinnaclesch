<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Hostel;
use Illuminate\Http\Request;

class HostelController extends Controller
{
    public function index(){
        $hostel = Hostel::latest()->get();
        return view('pages.admin.hostel.index',compact('hostel'));
    }
    public function store(Request $request){
        $request->validate([
            'title' => 'required',
            'image' => 'required|mimes:jpg,png,bmp,jpeg,webp|image',
        ]);
        // return $request;
        $hostel = new Hostel();
        $hostel->title = $request->title;
        $hostel->hotelType = $request->hotelType;
        $hostel->description = $request->description;
        $hostel->image = $this->imageUpload($request, 'image', 'uploads/hostel') ?? '';
        $hostel->save();
        if($hostel) {
            return redirect()->route('hostel.index')->with('success', 'Insert Successfull');
        }
        return redirect()->back()->withInput();
    }
    public function edit($id){
        $hostel = Hostel::find($id);
        return view('pages.admin.hostel.edit',compact('hostel'));
    }
    public function update(Request $request , Hostel $hostel ){
        $hostelImage = '';
        if ($request->hasFile('image')) {
            if (!empty($hostel->image) && file_exists($hostel->image)) {
                unlink($hostel->image);
            }
            $hostelImage = $this->imageUpload($request, 'image', 'uploads/hostel');
        }else{
            $hostelImage = $hostel->image;
        }
        $hostel->title = $request->title;
        $hostel->hotelType = $request->hotelType;
        $hostel->description = $request->description;
        $hostel->image = $hostelImage;
        $hostel->save();
        if($hostel)
        {
            return redirect()->back();
        }
        return redirect()->back()->withInput()->with('success', 'Update Success');
    }
    public function delete(Hostel $hostel){
        if (!empty($hostel->image) && file_exists($hostel->image)) {
            unlink($hostel->image);
        }
        $hostel->delete();
        return redirect()->back()->with('success', 'Deleted Successfull');
    }
}
