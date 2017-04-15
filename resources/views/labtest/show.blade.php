@extends('layouts.app')

@section('content')


    <p class="lead"> {{ $item->LT_testName }}</p>
    <p class="lead"> {{$item->LT_id}}</p>
    <hr>

    <div class="row">
        <div class="col-md-6">
            <a href="{{ route('labtest.index') }}" class="btn btn-info">Back to all Tests </a>
                <a href="{{ route('labtest.edit', $item->LT_id) }}" class="btn btn-primary">Edit Test</a>
        </div>
        <div class="col-md-6 text-right">
            {!! Form::open([
                'method' => 'DELETE',
                'route' => ['labtest.destroy', $item->LT_id]
            ]) !!}
            {!! Form::submit('Delete this Test', ['class' => 'btn btn-danger']) !!}
            {!! Form::close() !!}
        </div>
    </div>

@endsection
