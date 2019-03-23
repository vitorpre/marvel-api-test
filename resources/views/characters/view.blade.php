@extends('layouts.master')

@section('title', $character->name)

@section('content')

    <div class="row text-center">
        <img src="{{ $character->thumbnail->path . '.' . $character->thumbnail->extension }}" class="mb-3" />

        <section class="details mb-3">
            <h2 class="card-title mb-1">{{ $character->name }}</h2>
            <p class="card-text">{{ $character->description }}</p>
        </section>

        <section class="comics mb-3">
            <h2 class="mb-1">Comics</h2>

            <ul class="list-group list-group-flush">
                @foreach($character->comics->items as $comic)
                    <a href="{{ $comic->resourceURI }}"><li class="list-group-item">{{ $comic->name }}</li></a>
                @endforeach
            </ul>

        </section>

        <section class="series mb-3">
            <h2 class="mb-1">Series</h2>

            <ul class="list-group list-group-flush">
                @foreach($character->series->items as $serie)
                    <a href="{{ $serie->resourceURI }}"><li class="list-group-item">{{ $serie->name }}</li></a>
                @endforeach
            </ul>

        </section>

    </div>




@stop
