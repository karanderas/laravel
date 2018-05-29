@extends('layout')

@section('title')
    Wall
@endsection

@section('content')
    <div class="title m-b-md">
        Wall
    </div>
    @if ($search !== false)
        recherche : {{ $search }} <br><br>
    @endif

    {!! Form::open(['url' => 'write']) !!}
        {!! Form::text('post_content') !!}
        {!! Form::submit('write on the Wall') !!}
    {!! Form::close() !!}

    <br><br>
    <ul>
    @foreach($posts as $post)
        <li>
            {{ $post->user->name }} says : <em> {{ $post->content }}</em>
        </li>
    @endforeach
    </ul>
@endsection