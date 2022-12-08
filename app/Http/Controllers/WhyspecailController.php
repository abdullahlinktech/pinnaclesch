<?php

namespace App\Http\Controllers;

use App\Models\Whyspecail;
use Illuminate\Http\Request;

class WhyspecailController extends Controller
{
    public function index(){
        $specail =  Whyspecail::latest()->get();
        return view('pages.admin.specail.index',compact('specail'));
    }
    public function store(Request $request ){
        $request->validate([
            'title' => 'required',
            'image' => 'required|mimes:jpg,png,bmp,jpeg,webp|image',
        ]);
        $specail = new Whyspecail();
        $specail->title = $request->title;
        $specail->description = $request->description;
        $specail->image = $this->imageUpload($request, 'image', 'uploads/specail') ?? '';
        $specail->save();
        if($specail) {
            return redirect()->route('specail.index')->with('success', 'Insert Successfull');
        }
        return redirect()->back()->withInput();
    }
    public function edit($id){
        $specail = Whyspecail::find($id);
        return view('pages.admin.specail.edit',compact('specail'));
    }

    public function update(Request $request ,Whyspecail $specail){
        $specailImage = '';
        if ($request->hasFile('image')) {
            if (!empty($specail->image) && file_exists($specail->image)) {
                unlink($specail->image);
            }
            $specailImage = $this->imageUpload($request, 'image', 'uploads/specail');
        }else{
            $specailImage = $specail->image;
        }
        $specail->title = $request->title;
        $specail->description = $request->description;
        $specail->image = $specailImage;
        $specail->save();
        if($specail)
        {
            return redirect()->back();
        }
        return redirect()->back()->withInput()->with('success', 'Update Success');

    }
    public function delete(Whyspecail $specail){
        if (!empty($specail->image) && file_exists($specail->image)) {
            unlink($specail->image);
        }
        $specail->delete();
        return redirect()->back()->with('success', 'Deleted Successfull');

    }
}
