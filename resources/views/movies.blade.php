@extends('layouts.app')

@section('content')
<h1>prova main</h1>
<div class="container">
    <div class="row row-cols-md-4 p-2 g-2 text-center">
        @forelse($movies as $movie)
        <div class="col">
            <div class="card">
            <h4>{{$movie->title}}</h4>
            <h6>{{$movie->original_title}}</h6>
            <h6>{{$movie->nationality}}</h6>
            <p>{{$movie->date}}</p>
            <p>{{$movie->vote}}</p>
            </div>
        </div>
        @empty
        <div class="col"></div>
        @endforelse
    </div>
</div>
@endsection


