@extends('layouts.appadmin')
@section('content')
<div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-sm-10 col-xl-10 mx-auto">
                <div class="bg-secondary rounded h-100 p-4">
                    <h4 class="mb-4 text-primary text-center">Create Member
                    </h4>
                    <form class="row" method="post" action="{{route('member.save')}}" enctype="multipart/form-data">

                        @csrf
                        <div class="mb-3 col-md-6">
                            <label for="name" class="form-label">name</label>
                            <input type="text" name="name" class="form-control" id="name" aria-describedby="name">
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="lastname" class="form-label">lastname</label>
                            <input type="text" class="form-control" name="lastname" id="author" aria-describedby="lastname" >
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="job" class="form-label">job</label>
                            <input type="text" class="form-control" name="job" id="job" aria-describedby="job" >
                        </div>

                        <div class="col-sm-12 col-md-6">


                            <div class="mb-3">
                                <label for="image" class="form-label">images</label>
                                <input class="form-control bg-dark" name="image" type="file" id="image">
                            </div>
                            </div>


                            <div class="col-sm-12 col-md-6 ">
                            <button type="submit" class="btn btn-primary btn-lg">send</button>
                            </div>




                    </form>
                </div>
            </div>
        </div>
</div>
@stop
