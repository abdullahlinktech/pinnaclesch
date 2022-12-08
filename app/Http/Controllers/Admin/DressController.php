<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Dress;
use Illuminate\Http\Request;

class DressController extends Controller
{
    public function index(){
        $dress = Dress::latest()->get();
        return view('pages.admin.dress.index',compact('dress'));
    }
    public function store(Request $request){
        $request->validate([
            'title' => 'required|string|min:3',
            'image' => 'required|mimes:jpg,png,bmp,jpeg,webp|image',
        ]);
        $dress = new Dress();
        $dress->title = $request->title;
        $dress->image = $this->imageUpload($request, 'image', 'uploads/dress') ?? '';
        $dress->save();
        if($dress) {
            return redirect()->route('dress.index')->with('success', 'Insert Successfull');
        }
        return redirect()->back()->withInput();
    }
    public function edit($id){
        $dress = Dress::find($id);
        return view('pages.admin.dress.edit',compact('dress'));
    }
    public function update(Request $request ,Dress $dress){
        $dressImage = '';
        if ($request->hasFile('image')) {
            if (!empty($dress->image) && file_exists($dress->image)) {
                unlink($dress->image);
            }
            $dressImage = $this->imageUpload($request, 'image', 'uploads/service');
        }else{
            $dressImage = $dress->image;
        }

        $dress->title = $request->title;
        $dress->image = $dressImage;
        $dress->save();
        if($dress)
        {
            return redirect()->back();
        }
        return redirect()->back()->withInput()->with('success', 'Update Success');
    }
    public function delete(Dress $dress){
        if (!empty($dress->image) && file_exists($dress->image)) {
            unlink($dress->image);
        }
        $dress->delete();
        return redirect()->back()->with('success', 'Deleted Successfull');
    }
}
