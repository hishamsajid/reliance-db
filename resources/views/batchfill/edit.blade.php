@extends('layouts.app')


@section('content')

    {!! Form::model($item, [
        'method' => 'PATCH',
        'route' => ['batchfill.update', $item->BF_id]
    ]) !!}


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
            {!! Form::label('BF_drums', 'Batch Item:') !!}
            {!! Form::text('BF_drums', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('B_quantity', 'Batch Quantity:') !!}
            {!! Form::number('B_quantity', null, ['class' => 'form-control']) !!}
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


