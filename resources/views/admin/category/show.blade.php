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
                                        <th scope="col">Category Title</th>
                                        <th scope="col">Category Description</th>
                                        
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($CategoryPost as $category)
                                    <tr class="text-center">
                                        <th scope="row">{{$category->id}}</th>
                                        <td>{{$category->title}}</td>
                                        <td> {{$category->description}}</td>
                                        
                                        <td>
                                            
                                        <form method="get" action="{{route('categoryPost.destroy',$category->id)}}" style="display:inline;">
                                        <!-- @method('DELETE')

                                        @csrf
                                        <input type="hidden" name="_method" value="DELETE"> -->
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
