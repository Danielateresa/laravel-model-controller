@extends('layouts.app')

@section('content')
<h1 class="text-center text-black-50 bg-white py-3 shadow">Our Movies</h1>
<div class="container py-5">
    <div class="row g-4">
        @forelse($movies as $movie)
        <div class="col-4">
            <div class="card bg-white border-0 shadow">
                <div class="card-body">
                    <h3>Title: <span>{{$movie->title}}</span></h3>
                    <h4>Original Title: <span>{{$movie->title}}</span></h4>
                    <h4>Nationality: <span>{{$movie->nationality}}</span></h4>
                    <h4>Date: <span>{{$movie->date}}</span></h4>
                    <h4>Vote: <span>{{$movie->vote}}</span></h4>
                </div>
            </div>
        </div>
        @empty
        <h3>Sorry, nothing to show now!</h3>
        @endforelse
    </div>
</div>
@endsection