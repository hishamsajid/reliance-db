@extends('layouts.app')

@section('content')


    <p class="lead"> {{ $item->FG_brand }}</p>
    <p class="lead"> {{$item->FG_id}}</p>
    <hr>

    <div class="row">
        <div class="col-md-6">
            <a href="{{ route('finishedgood.index') }}" class="btn btn-info">Back to all Tests </a>
            <a href="{{ route('finishedgood.edit', $item->FG_id) }}" class="btn btn-primary">Edit Test</a>
        </div>
        <div class="col-md-6 text-right">
            {!! Form::open([
                'method' => 'DELETE',
                'route' => ['finishedgood.destroy', $item->FG_id]
            ]) !!}
            {!! Form::submit('Delete this Good', ['class' => 'btn btn-danger']) !!}
            {!! Form::close() !!}
        </div>
    </div>

@endsection
