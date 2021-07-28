<?php

namespace App\Http\Controllers\Backend;

use App\Category;
use App\Helper\Helper;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class CategoryController extends Controller
{
    public function index(){
        $categories = Category::all();
        return view('backend.category.index',compact('categories'));
    }
    public function create(){
        return view('backend.category.create');
    }
    public function store(Request $request){
        $request->validate([
            'name'=>'required'
        ],
        [
            'name.required'=>'Category အမည်ထည့်ရန်လိုအပ်ပါသည်။'
        ]);
        $category = new Category();
        $category->name = Helper::escape($request->name);
        $category->save();

        return redirect()->route('admin.category')->with('success','Category Created!');
    }
    public function edit($id){
        $category = Category::findOrFail($id);
        return view('backend.category.edit',compact('category'));
    }
    public function update(Request $request,$id){

        $request->validate([
            'name'=>'required'
        ],
        [
            'name.required'=>'Category အမည်ထည့်ရန်လိုအပ်ပါသည်။'
        ]);
        $category = Category::findOrFail($id);
        $category->name = Helper::escape($request->name);
        $category->update();

        return redirect()->route('admin.category')->with('success','Category Updated!');
    }
}
