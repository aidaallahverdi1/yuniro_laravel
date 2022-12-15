<?php

namespace App\Http\Controllers;


use App\Models\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;


class MemberController extends Controller
{
   public function create(){
    $Members=Member::all();

    return view('admin.member.create',compact('Members'));


   }
//    save
   public function save(Request $request){
    $request->validate([

        // "id"=>"required",
        "name"=>"required",
        "lastname"=>"required",
        "job"=>"required",
        "image"=>"required|mimes:png,jpg,bmp|max:3000"
    ]);
        Member::create($request->all());
        return redirect()->route("member.show");
   }

// show
public function show(){
    $Members=Member::all();
    return view('admin.member.show',compact('Members'));

}


// delete
public function destroy($id){
    $Member=Member::findOrFail($id);
    $Member->delete();
    return redirect()->back();
}
// edit
public function edit($id){
    $Member=Member::findOrFail($id);
    return view("admin.member.edit",compact('Member'));
}


// update
public function update(Request $request,$id){
    $request->validate([

        "id"=>"required",
        "name"=>"required",
        "lastname"=>"required",
        "job"=>"required",
        "image"=>"required|mimes:png,jpg,bmp|max:3000"
    ]);
    $Member=Member::findOrFail($id);
    $Member->update($request->all());
    return redirect()->route('member.show');
}

}
