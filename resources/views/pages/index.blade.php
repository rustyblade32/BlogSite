@extends('layouts.app')


@section('content')
    <div class="jumbotron text-center">
        <h1>Welcome to Laravel</h1>
        <p>This is a Laravel Blog Project</p>
        <p class="lead">
        <a class="btn btn-primary btn-md" href="/login" role="button">Login</a>
        <a class="btn btn-success btn-md" href="/register" role="button">Register</a>
        </p>
    </div>
@endsection

