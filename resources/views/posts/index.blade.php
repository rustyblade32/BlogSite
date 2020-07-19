@extends('layouts.app')

@section('content')
    <h1>Posts</h1>
        @if (count($posts) > 0)
            @foreach ($posts as $post)
                <div class="card p-2 mb-2 p-3">
                    <div class="row">
                        <div class="col-md-4 col-sm-4">
                            <img src="/storage/cover_images/{{$post->cover_image}}" style="width: 100%;" >
                        </div>
                        <div class="com-md-8 com-sm-8">
                            <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                            <small>written by {{ $post->user->name }} on {{$post->created_at}}</small>
                        </div>
                    </div>
                </div>
            @endforeach
        @else
        <p>There are no posts.</p>
        @endif
@endsection