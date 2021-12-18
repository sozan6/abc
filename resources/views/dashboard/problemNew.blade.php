@extends('layouts.master')


@section('content')
    <div class="card card-full">
        <div class="card-body">
            <h4 class="card-title">{{__('messages.add_new_problem')}}</h4>
            <p class="card-description">
                Please fill the following details
            </p>
            @if($errors->count()>0)
                <div class="alert alert-danger">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <i class="material-icons">close</i>
                    </button>
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </div>
            @endif
            <form class="forms-sample" action="/{{app()->getLocale()}}/problem/add/save" method="POST" enctype="multipart/form-data">

                {{ csrf_field() }}
                <div class="form-group">
                    <label for="name">Problem Title</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="Big tassa in mansour">
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <input type="text" class="form-control" name="description" id="description"
                           placeholder="Description">
                </div>
                <div class="form-group">
                    <label for="gov_id">Governorate</label>
                    <input type="text" class="form-control" name="gov_id" id="gov_id" placeholder="Baghdad">
                </div>
                <div class="form-group">
                    <label for="dist_id">District</label>
                    <input type="text" class="form-control" name="dist_id" id="dist_id" placeholder="Mansour">
                </div>
                <div class="form-group">
                    <label for="image1">Image</label>
                    <input type="file" class="form-control" name="image1" id="image1" >
                </div>


                <button type="submit" class="btn btn-primary mr-2">Submit</button>
                <button class="btn btn-light">Cancel</button>
            </form>
        </div>
    </div>

@endsection
