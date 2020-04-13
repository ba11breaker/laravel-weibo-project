@extends('layouts.default')
@section('title', 'Home')

@section('content')
    <div class="jumbotron">
        <h1>Hello Laravel</h1>
        <p class="lead">
            What you see is the home page.
        </p>
        <p>
            Everything will be changed.
        </p>
        <p>
        <a class="btn btn-lg btn-success" href="{{ route('signup') }}" role="button">Login now</a>
        </p>
    </div>
@stop