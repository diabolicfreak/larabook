@extends('layouts.default')

@section('content')
    <div class="jumbotron">
            <h1>Welcome to Larabook</h1>

        @if(!$currentUser)
            <p class="lead">Go ahead Sign Up and see what the fuss is all about.</p>
        @else
            <p class="lead">Hey, welcome to Larabook</p>
        @endif
    </div>
@stop