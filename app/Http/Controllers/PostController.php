<?php

namespace App\Http\Controllers;

use App\Models\CategoryPost;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;



class PostController extends Controller
{
    public function create(){
        $Posts = Post::all();
        $CategoriesPost=CategoryPost::all();
        return view('admin.create', compact('Posts','CategoriesPost'));
        // $CategoryPost=CategoryPost::all();
        // dd($CategoryPost);
    }
    public function show(){

                $Posts = Post::all();
                $CategoriesPost=CategoryPost::all();
                // dd($CategoryPost);
                return view('admin.postList', compact('Posts','CategoriesPost'));
            }

    public function save(Request $request){

        $request->validate([

            "_token"=>"required",
            'title'=>'required',
            'tags'=>'required',
            'description'=>'required',
            'author'=>'required',
            'category_id'=>'required',
            'upload'=>'required|mimes:jpeg,png,bmp|max:3000',
            'published'=>'required'

        ]);



        // dd($request->except("_token"));
        // Post::updateOrCreate($request->except("_token"));
        $file = $request->file('upload');

        $fileName= $request->file('upload')->getClientOriginalName();

        // dd($fileName);
        if ($request->hasFile('upload'))
        {

            $srcUrl = $this->uploadSrcFile($file);


            Post::create(array_merge($request->all(),['upload' =>  $fileName,'url'=>'storage/'.$srcUrl]));

        }

        return redirect('/admin/post/postList')->with("success","has been updated");



        //

    }
    // function for delete
    public function destroy($id){
        $Post=Post::findOrFail($id);

          // i must delete file that is related to this post from storage
        Storage::disk("public")->delete("Admin/".$Post->upload);

        $Post->delete();

        //

         return redirect('/admin/post/postList')->with("success","has been deleted");
    }



    // function for edit
    public function edit($id)
    {
        $CategoriesPost=CategoryPost::all();
        $Post = Post::findOrFail($id);

        // Storage::disk("public")->delete("Admin/".$Post->upload);
        // if ($request->hasFile('upload'))
        // {

        //     $srcUrl = $this->uploadSrcFile($file);


        //     Post::create(array_merge($request->all(),['upload' =>  $fileName,'url'=>'storage/'.$srcUrl]));

        // }

        return view('admin.edit', compact('Post','CategoriesPost'));
    }





    public function update(Request $request,$id){
        $validatedData=$request->validate([
            'title'=>"required",
            "tags"=>"required",
            "author"=>"required",
            "published"=>"required",
            "category_id"=>"required",
            "upload"=>"required|mimes:jpeg,png,bmp|max:3000",
            "description"=>"required"
        ]);
        $Post=Post::where('id',$id)->firstOrFail();
        $file = $request->file('upload');
        $fileName= $request->file('upload')->getClientOriginalName();

        Storage::disk("public")->delete("Admin/".$Post->upload);

          // i must update the file in the storage instead of the file that we create on the save part
          if ($request->hasFile('upload'))
          {

              $srcUrl = $this->uploadSrcFile($file);
              $Post->delete();

              Post::create(array_merge($request->all(),['upload' =>  $fileName,'url'=>'storage/'.$srcUrl]));

          }
        // $dir=Storage::directories('public');
        // $m=Storage::allfiles("public/Admin");

        // dd($m);
        // $Post->update($request->all());
        // dd($Post);
        return redirect('/admin/post/postList')->with("uploaded");
    }
// for storage part
private function uploadSrcFile($file, $options = [])
{

    $srcPath = "Admin";


    $path = Storage::disk('public')->putFileAs($srcPath,$file,$file->getClientOriginalName(), $options);


    return $path;
}




}
