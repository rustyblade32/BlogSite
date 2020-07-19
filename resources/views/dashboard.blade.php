@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    <h3>Your Blog Posts</h3>
                    <a href="/posts/create" class="btn btn-primary mb-2">Create Post</a>
                    @if (count($posts) > 0)
                    <table class="table table-striped mt-4">                      
                        @foreach ($posts as $post)
                        <tr>
                            <th>
                                <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                                <small>written by {{ $post->user->name }} on {{$post->created_at}}</small>
                            </th>
                            <th>
                                <a href="/posts/{{ $post->id }}/edit" class="btn btn-success float-right">Edit Post</a>
                            </th>
                            <th>
                                {!! Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST']) !!}
                                {{ Form::hidden('_method', 'DELETE') }}
                                {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
                                {!! Form::close() !!}
                            </th>
                        </tr>
                        @endforeach
                    </table>
                    @else
                        <h4>There are no posts.</h4>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
