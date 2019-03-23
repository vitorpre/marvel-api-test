@extends('layouts.master')

@section('title', 'Characters')

@section('content')

    <div class="card-columns">
        @foreach($characters as $character)
            <a href="{{ url('/characters/' . $character->id) }}">
                <div class="card">
                    <img class="card-img-top" src="{{ $character->thumbnail->path . '.' . $character->thumbnail->extension }}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">{{ $character->name }}</h5>
                        <p class="card-text">{{ $character->description }}</p>
                    </div>
                </div>
            </a>

            {{--<div class="col-md-3 text-center">--}}
                {{--<img class="img-thumbnail" style="max-height: 200px;"--}}
                     {{--src="{{ $character->thumbnail->path . '.' . $character->thumbnail->extension }}" />--}}
                {{--<p class="text-center">{{ $character->name }}</p>--}}
            {{--</div>--}}
        @endforeach
    </div>

@stop
