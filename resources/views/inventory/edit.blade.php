@extends('layouts.app')


@section('content')

    {!! Form::model($item, [
        'method' => 'PATCH',
        'route' => ['inventory.update', $item->IN_id]
    ]) !!}

    {{ csrf_field() }}

    <div class="form-group">
        {!! Form::label('IN_name', 'Name:', ['class' => 'control-label']) !!}
        {!! Form::text('IN_name', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('IN_description', 'Email:', ['class' => 'control-label']) !!}
        {!! Form::text('IN_description', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('IN_quantity', 'Quantity:', ['class' => 'control-label']) !!}
        {!! Form::text('IN_quantity', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('IN_type', 'Type:', ['class' => 'control-label']) !!}
        {!! Form::text('IN_type', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('IN_rate', 'Rate:', ['class' => 'control-label']) !!}
        {!! Form::text('IN_rate', null, ['class' => 'form-control']) !!}
    </div>

    {!! Form::submit('Update Item', ['class' => 'btn btn-primary']) !!}

    {!! Form::close() !!}



@endsection