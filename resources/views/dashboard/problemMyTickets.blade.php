@extends('layouts.master')


@section('content')
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">{{__('messages.my_tickets')}}</h4>
                <p class="card-description">
                    Below is all problems
                </p>
                @foreach($Problems as $problem)
                    <div class="card" style="width: 16rem;">
                        <img src="{{ asset('storage/image/'.$problem->image1) }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{$problem->name}}</h5>
                            <p class="card-text">{{$problem->created_at->toDateString()}}</p>
                            <p class="card-text">{{$problem->gov_id}}</p>
                            <a href="#" class="btn btn-primary">More Details</a>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>

@endsection
