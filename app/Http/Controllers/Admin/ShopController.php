<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Shop;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index(){
        $category = Category::get();
        $shop = Shop::latest()->get();
        return view('pages.admin.product.index',compact('shop','category'));
    }
    
    public function store(Request $request ){
    //    return $request->all();
        $request->validate([
            'title' => 'required',
            'price' => 'required',
            'image' => 'required|mimes:jpg,png,bmp,jpeg,webp|image',
        ]);
        $shop = new Shop();
        $shop->title = $request->title;
        $shop->price = $request->price;
        $shop->category_id = $request->category_id;
        $shop->s_description = $request->s_description;
        $shop->description = $request->description;
        $shop->image = $this->imageUpload($request, 'image', 'uploads/shop') ?? '';
        $shop->save();
        if($shop) {
            return redirect()->route('product.index')->with('success', 'Insert Successfull');
        }
        return redirect()->back()->withInput();
    }
    public function edit($id){
        $category = Category::get();
        $shop = Shop::find($id);
        return view('pages.admin.product.edit',compact('shop','category'));
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
        $shop->category_id = $request->category_id;
        $shop->s_description = $request->s_description;
        $shop->description = $request->description;
        $shop->image = $shopImage;
        $shop->save();
        if($shop)
        {
            return redirect()->back();
        }
        return redirect()->back()->withInput()->with('success', 'Update Success');
    }
    public function delete(Shop $shop){
        if (!empty($shop->image) && file_exists($shop->image)) {
            unlink($shop->image);
        }
        $shop->delete();
        return redirect()->back()->with('success', 'Deleted Successfull');
    }
}
