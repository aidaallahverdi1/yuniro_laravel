@extends('layouts.appadmin')
@section('content')
<div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-sm-10 col-xl-10 mx-auto">
                <div class="bg-secondary rounded h-100 p-4">
                    <h4 class="mb-4 text-primary">Edit Post</h4>
                    <form class="row" method="post" action="{{route('post.update',$Post->id)}}" enctype="multipart/form-data">
                    @csrf
                        @method('patch')
                    <div class="mb-3 col-md-6">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" name="title" class="form-control" id="title" aria-describedby="title" value="{{old('title',$Post->title)}}">
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="author" class="form-label">Author</label>
                            <input type="text" class="form-control" name="author" id="author" aria-describedby="author"  value="{{old('author',$Post->author)}}">
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="publishD" class="form-label">Published Date</label>
                            <input type="date" class="form-control" name="published" id="publishD" aria-describedby="publishD" value="{{old('published',$Post->published)}}">
                        </div>
                        <div class="col-md-6 mb-3">
                        <label class="mb-2" for="category">Category</label>
                            <select class="form-select form-select-md " name="category_id" id="category" aria-label=".form-select-sm example" >
                                @foreach($CategoriesPost as $Categorypost)

                                <option value="{{$Categorypost->id}}" @if($Categorypost->id==($Post->category_id)) selected @endif>{{$Categorypost->title}}</option>

                            @endforeach

                            </select>
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="Tag" class="form-label">Tag</label>
                            <input type="text" class="form-control" name="tags" id="Tag" aria-describedby="Tag" value="{{old('tags',$Post->tags)}}" >
                        </div>
                        <div class="col-sm-12 col-md-6">


                            <div class="mb-3">
                                <label for="uploadImg" class="form-label">Upload image</label>
                                {{-- <img src='storage.{{$file}}' alt="art"> --}}
                                <input class="form-control bg-dark" name="upload" type="file" id="uploadImg" >
                            </div>
                            </div>
                            <div class="col-sm-12 col-md-12 mx-auto">
                                <div class="mb-3">
                                    <label for="description" class="form-label">Description</label>
                                    <textarea class="form-control" name="description" style="height: 150px;" id="description">{{old('Description',$Post->description)}}</textarea>
                                </div>
                            </div>
                            <!-- <div class="col-sm-12 col-md-6">
                                <div class="mb-3">
                                <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="gridCheck1">
                                            <label class="form-check-label" for="gridCheck1">
                                                Allow Description Post
                                            </label>
                                        </div>
                                </div>
                            </div> -->
                            <div class="col-sm-12 col-md-6 mx-auto">
                            <button type="submit" class="btn btn-primary btn-lg">Edit</button>
                            </div>



                        <!-- <div class="form-check form-switch m-3 ">
                                <input class="form-check-input" type="checkbox" role="switch"
                                    id="flexSwitchCheckChecked" checked>
                                <label class="form-check-label" for="flexSwitchCheckChecked">Status</label>
                        </div> -->
                    </form>
                </div>
            </div>
        </div>
</div>
@stop
