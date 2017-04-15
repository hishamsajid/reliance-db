@extends('layouts.app')

@section('content')

    {!! Form::open(['method'=>'POST','action' => 'InventoryController@store']) !!}

    <div class="form-group">
        {!! Form::label('IN_id', 'ID:') !!}
        {!! Form::number('IN_id', null,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('IN_name', 'Name:') !!}
        {!! Form::text('IN_name', null,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('IN_description', 'Description:') !!}
        {!! Form::text('IN_description', null,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('IN_quantity', 'Quantity:') !!}
        {!! Form::text('IN_quantity', null,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('IN_type', 'Type:') !!}
        {!! Form::select('IN_type', array(1=>'typeA', 0=>'typeB') ,0,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('IN_rate', 'Rate:') !!}
        {!! Form::number('IN_rate', null,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Create Item') !!}
    </div>

    {!! Form::close() !!}


@endsection



