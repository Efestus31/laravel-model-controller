@extends('layouts.master')

@section('title', 'Movie List')

@section('content')
<div class="row">
    @foreach ($movies as $movie)
    <div class="col-md-4 mb-4">
        <x-card :movie="$movie" />
    </div>
        
    @endforeach
</div>
@endsection
