@extends('layouts.master')


@section('content')
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">{{__('messages.all_problems')}}</h4>
                <p class="card-description">
                    Below is all problems
                </p>
                @foreach($Problems as $problem)
                    <div class="card" style="width: 16rem;">
                        <img  width="200px" height="150px" src="{{ asset('storage/image/'.$problem->image1) }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{$problem->name}}</h5>
                            <p class="card-text">{{$problem->created_at->toDateString()}}</p>
                            <p class="card-text">{{$problem->gov_id}}</p>
                            <a href="#" class="btn btn-primary">More Details</a>
                        </div>
                    </div>
                @endforeach
                {{--                <div class="table-responsive">--}}
                {{--                    <table class="table table-striped">--}}
                {{--                        <thead>--}}
                {{--                        <tr>--}}
                {{--                            <th>Image</th>--}}
                {{--                            <th>Title</th>--}}
                {{--                            <th>Governorate</th>--}}
                {{--                            <th>District</th>--}}
                {{--                            <th>Upload Date</th>--}}
                {{--                            <th>Status</th>--}}
                {{--                        </tr>--}}
                {{--                        </thead>--}}
                {{--                        <tbody>--}}
                {{--                       --}}
                {{--                            <div class="card" style="width: 16rem;">--}}
                {{--                                <img src="{{ asset('storage/image/'.$problem->image1) }}" class="card-img-top" alt="...">--}}
                {{--                                <div class="card-body">--}}
                {{--                                    <h5 class="card-title">{{$problem->name}}</h5>--}}
                {{--                                    <p class="card-text">{{$problem->created_at->toDateString()}}</p>--}}
                {{--                                    <p class="card-text">{{$problem->gov_id}}</p>--}}
                {{--                                    <a href="#" class="btn btn-primary">More Details</a>                                </div>--}}
                {{--                            </div>--}}
                {{--                            <tr>--}}
                {{--                                <td class="py-1 image-style"><img src="{{ asset('storage/image/'.$problem->image1) }}" alt="image"></td>--}}
                {{--                                <td>{{$problem->name}}</td>--}}
                {{--                                <td>{{$problem->gov_id}}</td>--}}
                {{--                                <td>{{$problem->dist_id}}</td>--}}
                {{--                                <td>{{$problem->created_at->toDateString()}}</td>--}}
                {{--                                <td>{{$problem->status}}</td>--}}
                {{--                            </tr>--}}
                {{--                        </tbody>--}}
                {{--                    </table>--}}
                {{--                </div>--}}
            </div>
        </div>
    </div>

@endsection
