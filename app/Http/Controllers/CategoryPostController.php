<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CategoryPost;
class CategoryPostController extends Controller
{
    public function create(){

        return view('admin.category.create');
    }
//
    public function save(Request $request){
        $request->validate([
            "title"=>"required",
            "description"=>"required"
        ]);

        CategoryPost::updateOrCreate($request->all());

        return redirect()->route("category.show");


    }


    public function show(){

        $CategoryPost = CategoryPost::all();
    //    dd($CategoryPost);

      return view('admin.category.show', compact('CategoryPost'));


    }

    public function destroy($id){
        $CategoryPost=CategoryPost::findOrFail($id);
        $CategoryPost->delete();

        return redirect()->back();
    }


}
