@extends('layouts.appadmin')
@section('content')
<div class="container-fluid pt-4 px-4">
<div class="row g-4">
<div class="col-sm-12 col-xl-6">
<div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                <!-- <i class="fa fa-chart-line fa-3x text-primary"></i> -->
    <div class="ms-3">
        <h6 class="mb-2"><i class="fa fa-layer-group fa-2x  mx-3 text-primary"></i>Blog Category<span class="mx-2 text-primary">4</span></h6>


    </div>
    <a href="">Show All</a>
</div>
</div>
<div class="col-sm-12 col-xl-6">
<div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
    <div class="ms-3">
        <h6 class="mb-2"><i class="fa fa-check fa-2x  mx-3 text-primary"></i>Blog Post<span class="mx-2 text-primary ">4</span></h6>


    </div>
    <a href="">Show All</a>

</div>
</div>
<div class="col-sm-12 col-xl-12">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">Post List</h6>
                            <table class="table table-dark">
                                <thead>
                                    <tr  class="text-center">
                                        <th scope="col">id</th>
                                        <th scope="col">Title</th>
                                        <th scope="col">Category</th>
                                        <th scope="col">Tags</th>
                                        <th scope="col">Author</th>
                                        <th scope="col">upload</th>
                                        <th scope="col">Published</th>
                                        <th scope="col">Description</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($Posts as $Post)
                                    <tr class="text-center">
                                        <th scope="row">{{$Post->id}}</th>
                                        <td>{{$Post->title}}</td>
                                        {{-- <td>{{$Post->category_id}}</td> --}}
                                        <td>
                                        @foreach($CategoriesPost as $Categorypost)
                                        @if ($Post->category_id==($Categorypost->id))
                                        {{$Categorypost->title}}
                                        @endif
                                        @endforeach
                                    </td>
                                        <td>{{$Post->tags}}</td>
                                        <td>{{$Post->author}}</td>
                                        <td>{{$Post->upload}}</td>

                                        <td>{{$Post->published}}</td>
                                        <td>{{$Post->description}}</td>
                                        <td >
                                        <!-- <form method="post" action="{{route('post.edit',$Post->id)}}" style="display:inline;">
                                        <button type="button" class="btn btn-primary m-2"><i class="fa fa-pen me-2"></i>Edit</button> -->
                                        <a href="{{ route('post.edit',$Post->id)}}"><button class="btn btn-primary m-2"><i class="fas fa-edit fa-lg"></i> Edit</button></a>
                                        <!-- </form> -->

                                        <!-- <button type="submit" class="btn btn-primary m-2"><i class="fa fa-trash me-2"></i>Delete</button> -->
                                        <form method="get" action="{{route('post.destroy',$Post->id)}}" style="display:inline;">
                                        @method('DELETE')

                                        @csrf
                                        <input type="hidden" name="_method" value="DELETE">
                                        <button type="submit" class="btn btn-primary m-2">Delete</button>
                                        </form>
                                        </td>

                                    </tr>


                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
</div>
</div>
@stop
