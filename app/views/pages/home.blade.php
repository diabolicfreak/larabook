@extends('layouts.default')

@section('content')
    <div class="jumbotron">
            <h1>Welcome to Larabook</h1>
           <p class="lead">Go ahead Sign Up and see what the fuss is all about.</p>
            <p>{{link_to_route('register_path', 'Sign Up', null, ['class'=>'btn btn-lg btn-success'])}}</p>
    </div>
@stop