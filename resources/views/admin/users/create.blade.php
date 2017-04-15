@extends('layouts.app')

@section('content')

    {!! Form::open(['method' => 'POST', 'action' => 'AdminUsersController@store']) !!}

    <div class="form-group">
        {!! Form::label('name', 'Name:') !!}
        {!! Form::text('name',['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('email', 'Email:') !!}
        {!! Form::text('email', null,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('password', 'Password:') !!}
        {!! Form::text('password', null,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('is_active', 'Status:') !!}
        {!! Form::select('is_active', array(1=>'Active', 0=>'Not Active') ,0,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('role_id', 'Role:') !!}
        {!! Form::text('role_id', null,['class'=>'form-control']) !!}
        1 for admin, 2 for worker
    </div>

    <div class="form-group">
        {!! Form::submit('Create User') !!}
    </div>

    {!! Form::close() !!}


@endsection



