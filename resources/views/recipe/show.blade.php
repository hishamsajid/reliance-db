@extends('layouts.app')

@section('content')


    <p class="lead">{{ $item->R_id }}</p>
    <hr>

    <div class="row">
        <div class="col-md-6">
            <a href="{{ route('recipe.index') }}" class="btn btn-info">Back to all Recipes/a>
            <a href="{{ route('recipe.edit', $item->R_id) }}" class="btn btn-primary">Edit Recipe</a>
        </div>
        <div class="col-md-6 text-right">
            {!! Form::open([
                'method' => 'DELETE',
                'route' => ['recipe.destroy', $item->R_id]
            ]) !!}
            {!! Form::submit('Delete this Recipe', ['class' => 'btn btn-danger']) !!}
            {!! Form::close() !!}
        </div>
    </div>

    @endsection

