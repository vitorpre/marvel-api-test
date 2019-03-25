@extends('layouts.master')

@section('title', $character->name)

@section('content')

    <div class="text-center align-content-center">
        <img src="{{ $character->thumbnail->path . '.' . $character->thumbnail->extension }}"
             style="max-height: 350px;" class="img-thumbnail align-content-center mb-3" />

        <section class="details row mb-3">
            <h2 class="card-title mb-2 col-12 text-white">{{ $character->name }}</h2>
            <p class="card-text col-12 text-white" >{{ $character->description }}</p>
        </section>

        <section class="comics row mb-3">
            <h2 class="mb-2 col-12 text-white">Comics</h2>

            <ul class="list-group list-group-flush col-12">
                @foreach($character->comics->items as $comic)
                    <li class="list-group-item">{{ $comic->name }}</li>
                @endforeach
            </ul>

        </section>

        <section class="series row mb-3">
            <h2 class="mb-2 col-12 text-white">Series</h2>

            <ul class="list-group list-group-flush col-12">
                @foreach($character->series->items as $serie)
                    <li class="list-group-item">{{ $serie->name }}</li>
                @endforeach
            </ul>

        </section>

    </div>




@stop
