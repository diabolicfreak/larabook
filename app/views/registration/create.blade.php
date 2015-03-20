@extends('layouts.default')

@section('content')
    <div class="row">
        <div class="col-md-6">
            <h1>Register</h1>

            @include('layouts.partials.errors')

            {{ Form::open(['route' => 'register_path']) }}
            <!-- Username Form Input -->
            <div class="form-group">
                {{ Form::label('username', 'Username:') }}
                {{ Form::text('username', null, ['class'=>'form-control', 'placeholder'=>'Username'])  }}
            </div>

            <!-- Email Form Input -->
            <div class="form-group">
                {{ Form::label('email', 'Email:') }}
                {{ Form::text('email', null, ['class'=>'form-control', 'placeholder'=>'Email'])  }}
            </div>

            <!-- Password Form Input -->
            <div class="form-group">
                {{ Form::label('password', 'Password:') }}
                {{ Form::password('password', ['class'=>'form-control', 'placeholder'=>'Password'])  }}
            </div>

            <!-- Password Confirmation Form Input -->
            <div class="form-group">
                {{ Form::label('password_confirmation', 'Password Confirmation:') }}
                {{ Form::password('password_confirmation', ['class'=>'form-control', 'placeholder'=>'Confirm Password'])  }}
            </div>

            <div class="form-group">
                {{ Form::submit('Sign Up', ['class' => 'btn btn-primary']) }}
            </div>

            {{ Form::close() }}
        </div>
    </div>
@stop
