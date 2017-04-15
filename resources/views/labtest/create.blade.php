@extends('layouts.app')


@section('content')
    <div class="col-md-6", style="background-color: yellow;">

    {!! Form::open(['method'=>'POST', 'action'=>'LabTestController@store']) !!}

        <div class="form-group">
            {!! Form::label('LT_id', 'Lab Test ID:') !!}
            {!! Form::number('LT_id', null, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('LT_testName', 'Test Name:') !!}
            {!! Form::text('LT_testName', null, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('LT_standard', 'Standard:') !!}
            {!! Form::text('LT_standard', null, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('LT_values', 'Values:') !!}
            {!! Form::number('LT_values', null, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('FK_B_id', 'Batch ID:') !!}
            {!! Form::text('FK_B_id', null, ['class'=>'form-control']) !!}
        </div>

        {!! Form::submit('Conduct Test' ,['class' => 'btn btn-primary']) !!}

        {!! Form::close() !!}
        

    </div>
    @endsection