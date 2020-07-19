@extends('layouts.app')

@section('content')
    <a href="/posts" class="btn btn-info">Go Back</a>

    <h1>{{ $post->title }}</h1>

    <img src="/storage/cover_images/{{$post->cover_image}}" style="width: 100%;" ><hr>

    <p>{!! $post->body !!}</p>

    <hr>
    <small>Written by {{ $post->user->name }} on {{ $post->created_at }}</small>
    <hr>
    @if (!Auth::guest() && Auth::user()->id == $post->user_id)
        <a href="/posts/{{ $post->id }}/edit" class="btn btn-success">Edit Post</a>

        {!! Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'float-right']) !!}
            {{ Form::hidden('_method', 'DELETE') }}
            {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
        {!! Form::close() !!}
    @endif
@endsection