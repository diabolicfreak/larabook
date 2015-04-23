@extends('layouts.default')

@section('content')

    <h1>Post a status</h1>

    @include('layouts.partials.errors')

     {{ Form::open(['route' => 'statuses_path']) }}

        <!-- Status Form -->
        <div class="form-group">
            {{Form::label('body', 'Status:')}}
            {{ Form::textarea('body', null, ['class' => 'form-control']) }}
        </div>

        <div class="form-group">
            {{ Form::submit('Post Status', ['class' => 'btn-primary']) }}
        </div>

    {{ Form::close() }}

    @foreach($statuses as $status)
        <article>
            {{ $status->body }}
        </article>
    @endforeach

@stop