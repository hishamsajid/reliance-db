@extends('layouts.app')

@section('content')

    {!! Form::model($item, [
      'method' => 'PATCH',
      'route' => ['recipe.update', $item->LT_id]
                           ]) !!}

    {{csrf_field()}}




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
        {!! Form::label('LT_values', 'Test Name:') !!}
        {!! Form::number('LT_values', null, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('FK_B_id', 'Batch ID:') !!}
        {!! Form::text('FK_B_id', null, ['class'=>'form-control']) !!}
    </div>

    {!! Form::submit('Conduct Test' ,['class' => 'btn btn-primary']) !!}

    {!! Form::close() !!}


    @endsection