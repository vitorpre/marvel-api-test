@extends('layouts.master')

@section('title', $character->name)

@section('content')

    <div class="row text-center align-content-center">
        <img src="{{ $character->thumbnail->path . '.' . $character->thumbnail->extension }}"
             style="max-height: 350px;" class="img-thumbnail align-content-center mb-3" />

        <section class="details row mb-3">
            <h2 class="card-title mb-2">{{ $character->name }}</h2>
            <p class="card-text">{{ $character->description }}</p>
        </section>

        <section class="comics row mb-3">
            <h2 class="mb-2">Comics</h2>

            <ul class="list-group list-group-flush">
                @foreach($character->comics->items as $comic)
                    <a href="{{ $comic->resourceURI }}"><li class="list-group-item">{{ $comic->name }}</li></a>
                @endforeach
            </ul>

        </section>

        <section class="series row mb-3">
            <h2 class="mb-2">Series</h2>

            <ul class="list-group list-group-flush">
                @foreach($character->series->items as $serie)
                    <a href="{{ $serie->resourceURI }}"><li class="list-group-item">{{ $serie->name }}</li></a>
                @endforeach
            </ul>

        </section>

    </div>




@stop
