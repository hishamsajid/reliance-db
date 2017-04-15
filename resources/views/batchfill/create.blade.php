@extends('layouts.app')


@section('content')


    {!! Form::open(['method'=>'POST', 'action'=>'BatchFillController@store']) !!}

    <div class ="col-sm-6">

        <div class="form-group">
            {!! Form::label('BF_id', 'Batch Fill ID:') !!}
            {!! Form::number('BF_id', null, ['class' =>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('BF_PackingId', 'Packing ID:') !!}
            {!! Form::number('BF_PackingId', null, ['class' =>'form-control']) !!}
        </div>


        <div class="form-group">
            {!! Form::label('BF_litres', 'Litres:') !!}
            {!! Form::number('BF_litres', null, ['class' =>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('BF_drums', 'Drums:') !!}
            {!! Form::text('BF_drums', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('FK_B_id', 'Recipe ID:') !!}
            {!! Form::number('FK_B_id', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('Create Batch Fill', ['class'=>'btn btn-primary']) !!}
            <a href="{{url('home/batchfill')}}" class="btn btn-primary">Back</a>
        </div>

        <div>

        </div>
        {!! Form::close() !!}

    </div>


@endsection