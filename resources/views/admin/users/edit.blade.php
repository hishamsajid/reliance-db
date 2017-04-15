@extends('layouts.app')


@section('content')

{!! Form::model($user, [
    'method' => 'PATCH',
    'route' => ['users.update', $user->id]
]) !!}

<div class="form-group">
    {!! Form::label('name', 'Name:', ['class' => 'control-label']) !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('email', 'Email:', ['class' => 'control-label']) !!}
    {!! Form::text('email', null, ['class' => 'form-control']) !!}
</div>

{!! Form::submit('Update User', ['class' => 'btn btn-primary']) !!}

{!! Form::close() !!}



    @endsection