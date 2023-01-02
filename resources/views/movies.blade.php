@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row row-cols-md-3 p-2 g-2 text-center">
        @forelse($movies as $movie)
        <div class="col">
            <div class="card">
            <h4>{{$movie->title}}</h4>
            <span>Titolo Originale:{{$movie->original_title}}</span>
            <span>Nazionalità:{{$movie->nationality}}</span>
            <span>Data Uscita:{{$movie->date}}</span>
            <span>Valutazione:{{$movie->vote}}</span>
            </div>
        </div>
        @empty
        <div class="col"></div>
        @endforelse
    </div>
</div>
@endsection


