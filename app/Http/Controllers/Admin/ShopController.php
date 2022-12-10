<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Shop;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index(){
        $shop = Shop::latest()->get();
        return view('pages.admin.shop.index',compact('shop'));
    }
    
    public function store(Request $request ){
        $request->validate([
            'title' => 'required',
            'price' => 'required',
            'image' => 'required|mimes:jpg,png,bmp,jpeg,webp|image',
        ]);
        $shop = new Shop();
        $shop->title = $request->title;
        $shop->price = $request->price;
        $shop->description = $request->description;
        $shop->image = $this->imageUpload($request, 'image', 'uploads/shop') ?? '';
        $shop->save();
        if($shop) {
            return redirect()->route('shop.index')->with('success', 'Insert Successfull');
        }
        return redirect()->back()->withInput();
    }
    public function edit($id){
        $shop = Shop::find($id);
        return view('pages.admin.shop.edit',compact('shop'));
    }
    public function update(Request $request , Shop $shop){
        $shopImage = '';
        if ($request->hasFile('image')) {
            if (!empty($shop->image) && file_exists($shop->image)) {
                unlink($shop->image);
            }
            $shopImage = $this->imageUpload($request, 'image', 'uploads/shop');
        }else{
            $shopImage = $shop->image;
        }
        $shop->title = $request->title;
        $shop->price = $request->price;
        $shop->description = $request->description;
        $shop->image = $shopImage;
        $shop->save();
        if($shop)
        {
            return redirect()->back();
        }
        return redirect()->back()->withInput()->with('success', 'Update Success');
    }
}
