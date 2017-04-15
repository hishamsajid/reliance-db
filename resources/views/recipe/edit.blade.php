@extends('layouts.app')


@section('content')

    {!! Form::model($item, [
       'method' => 'PATCH',
       'route' => ['recipe.update', $item->R_id]
                            ]) !!}

    {{csrf_field()}}

    <div class="form-group">
        {!! Form::label('R_id', 'Recipe ID:') !!}
        {!! Form::text('R_id', null, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('R_remarks', 'Remarks:') !!}
        {!! Form::text('R_remarks', null, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('R_order_no', 'Order no:') !!}
        {!! Form::number('R_order_no', null, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('R_batchSize', 'Batch Size:') !!}
        {!! Form::number('R_batchSize', null, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('R_quantity', 'Quantity:') !!}
        {!! Form::number('R_quantity', null, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('IN_id_FK', 'Inventory ID:') !!}
        {!! Form::text('IN_id_FK', null, ['class'=>'form-control']) !!}
    </div>

    {!! Form::submit('Update Item', ['class' => 'btn btn-primary']) !!}

    {!! Form::close() !!}



    @endsection