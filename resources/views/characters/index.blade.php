@extends('layouts.master')

@section('title', 'Characters')

@section('content')

    <form method="get">
        <div class="row">
            <div class="input-group input-group-lg col-md-12 mb-3">
                <input type="text" name="nameStartsWith" class="form-control" placeholder="Character name" aria-label="Character name" aria-describedby="basic-addon2">
                <div class="input-group-append">
                    <button class="btn btn-primary" type="button">Search</button>
                </div>
            </div>
        </div>
    </form>

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
        @endforeach
    </div>

    {{ $characters->links() }}

@stop
