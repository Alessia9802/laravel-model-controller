@extends('layouts.app')

@section('content')

<div class="container">
    <h1>Movies</h1>

    <div class="movies">
        @forelse($movies as $movie)
        <div class="movie">
            <h4>{{$movie->title}}</h4>
        </div>
        <div class="nation">
            <h5>{{$movie->nationality}}</h4>
        </div>
        <div class="year">
            <p>{{$movie->date}}</p>
        </div>
        <div class="vote">
            <p>{{$movie->vote}}</p>
        </div>
        @empty
        <p>Sorry no movie found</p>
        @endforelse
    </div>
</div>

@endsection

