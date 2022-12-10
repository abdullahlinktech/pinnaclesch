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
}
