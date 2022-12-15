@extends('layouts.appadmin')
@section('content')
<div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-sm-10 col-xl-10 mx-auto">
                <div class="bg-secondary rounded h-100 p-4">
                    <h4 class="mb-4 text-primary">Create Category</h4>
                    <form class="row" method="get" action="{{route('category.save')}}" enctype="multipart/form-data">
                        <div class="mb-3 col-md-12">
                            <label for="title" class="form-label">Category Title</label>
                            <input type="text" name="title" class="form-control" id="title" aria-describedby="title">
                        </div>
                        
                        
                            <div class="col-sm-12 col-md-12 mx-auto">
                                <div class="mb-3">
                                    <label for="description" class="form-label">Category Description</label>
                                    <textarea class="form-control" name="description" style="height: 150px;" id="description" ></textarea>
                                </div>
                            </div>
                            
                            <div class="col-sm-12 col-md-6 mx-auto">
                            <button type="submit" class="btn btn-primary btn-lg">Sign in</button>
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
