<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        $category = Category::latest()->get();
        return view('pages.admin.category.index',compact('category'));
    }
    public function store(Request $request){
        $request->validate([
            'name' => 'required|string|min:2',
        
        ]);
        $category = new Category();
        $category->name = $request->name;
        $category->save();
        if ($category) {
            return redirect()->route('category.index')->with('success', 'Insert Successfull');
        }
        return redirect()->back()->withInput();
    }
    public function edit($id){
        $category = Category::find($id);
        return view('pages.admin.category.edit',compact('category'));
    }
    public function update(Request $request , Category $category){
        $category->name = $request->name;;
        $category->save();
        if ($category) {
            return redirect()->back();
        }
        return redirect()->back()->withInput()->with('success', 'Update Success');
    }
    public function delete(Category $category){
        $category -> delete();
        return redirect()->back()->with('success', 'Deleted Successfull');
    }
    
}
