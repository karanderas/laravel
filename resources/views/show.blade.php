@extends('layout')

@section('title')
    Wall
@endsection

@section('content')
    <div class="title m-b-md">
        Wall
    </div>
    @if ($search !== false)
        recherche : {{ $search }}
    @endif
@endsection