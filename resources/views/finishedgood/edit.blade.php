@extends('layouts.app');

@section('content')

    {!! Form::model($item, [
       'method' => 'PATCH',
       'route' => ['finishedgood.update', $item->FG_id]
    ]) !!}

    <div class="col-md-6">

        <div class="form-group">
            {!! Form::label('FG_id', 'Finished Good ID:') !!}
            {!! Form::number('FG_id', null, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('FB_brand', 'Brand:') !!}
            {!! Form::text('FG_brand', null, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('FG_type', 'Type:') !!}
            {!! Form::text('FG_type', null, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('FG_shadeName', 'Shade Name:') !!}
            {!! Form::text('FG_shadeName', null, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('FG_shadeNo', 'Shade No:') !!}
            {!! Form::number('FG_shadeNo', null, ['class'=>'form-control']) !!}
        </div>


        <div class="form-group">
            {!! Form::label('FG_specification', 'Specification:') !!}
            {!! Form::text('FG_specification', null, ['class'=>'form-control']) !!}
        </div>


        <div class="form-group">
            {!! Form::label('FG_unit', 'Unit:') !!}
            {!! Form::text('FG_unit', null, ['class'=>'form-control']) !!}
        </div>


        <div class="form-group">
            {!! Form::label('FK_BF_id', 'Batch Fill ID') !!}
            {!! Form::text('FK_BF_id', null, ['class'=>'form-control']) !!}
        </div>

        {!! Form::submit('Create Finished Good' ,['class' => 'btn btn-primary']) !!}

        {!! Form::close() !!}



    </div>




    @endsection
