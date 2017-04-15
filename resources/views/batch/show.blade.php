@extends('layouts.app')

@section('content')


    <p class="lead">{{ $item->B_id }}</p>
    <hr>

    <div class="row">
        <div class="col-md-6">
            <a href="{{ route('batch.index') }}" class="btn btn-info">Back to all Recipes/a>
                <a href="{{ route('batch.edit', $item->B_id) }}" class="btn btn-primary">Edit Batch</a>
        </div>
        <div class="col-md-6 text-right">
            {!! Form::open([
                'method' => 'DELETE',
                'route' => ['batch.destroy', $item->B_id]
            ]) !!}
            {!! Form::submit('Delete this Batch', ['class' => 'btn btn-danger']) !!}
            {!! Form::close() !!}
        </div>
    </div>

@endsection