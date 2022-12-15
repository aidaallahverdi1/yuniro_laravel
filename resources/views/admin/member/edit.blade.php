@extends('layouts.appadmin')
@section('content')
<div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-sm-10 col-xl-10 mx-auto">
                <div class="bg-secondary rounded h-100 p-4">
                    <h4 class="mb-4 text-primary">Edit Member</h4>
                    <form class="row" method="post" action="{{route('member.update',$Member->id)}}" enctype="multipart/form-data">
                    @csrf
                        @method('patch')
                    <div class="mb-3 col-md-6">
                            <label for="name" class="form-label">name</label>
                            <input type="text" name="name" class="form-control" id="name" aria-describedby="name" value="{{old('name',$Member->name)}}">
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="lastname" class="form-label">Author</label>
                            <input type="text" class="form-control" name="lastname" id="lastname" aria-describedby="lastname"  value="{{old('lastname',$Member->lastname)}}">
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="job" class="form-label">Published Date</label>
                            <input type="text" class="form-control" name="job" id="job" aria-describedby="job" value="{{old('job',$Member->job)}}">
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="image" class="form-label"> image</label>

                            <input class="form-control bg-dark" name="image" type="file" id="image" >
                        </div>
                        <div class="col-sm-12 col-md-6 ">
                            <button type="submit" class="btn btn-primary btn-lg">Edit</button>
                        </div>










                    </form>
                </div>
            </div>
        </div>
</div>
@stop
