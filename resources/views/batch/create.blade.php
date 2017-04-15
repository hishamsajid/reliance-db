@extends('layouts.app')


@section('content')


    {!! Form::open(['method'=>'POST', 'action'=>'BatchController@store']) !!}

    <div class ="col-sm-6">

    <div class="form-group">
        {!! Form::label('B_id', 'Batch ID:') !!}
        {!! Form::number('B_id', null, ['class' =>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('B_remarks', 'Remarks:') !!}
        {!! Form::text('B_remarks', null, ['class' =>'form-control']) !!}
    </div>


    <div class="form-group">
        {!! Form::label('B_size', 'Batch Size:') !!}
        {!! Form::number('B_size', null, ['class' =>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('B_item', 'Batch Item:') !!}
        {!! Form::text('B_item', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('B_quantity', 'Batch Quantity:') !!}
        {!! Form::number('B_quantity', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('R_id_FK', 'Recipe ID:') !!}
        {!! Form::number('R_id_FK', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('B_orderNo', 'Order no:') !!}
        {!! Form::number('B_orderNo', null, ['class' => 'form-control']) !!}
    </div>


    <div class="form-group">
        {!! Form::submit('Create Batch', ['class'=>'btn btn-primary']) !!}
        <a href="{{url('home/batch')}}" class="btn btn-primary">Back</a>
    </div>

    <div>

    </div>
    {!! Form::close() !!}

    </div>


    @endsection