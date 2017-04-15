@extends('layouts.app')

@section('content')


    <p> class="lead">{{ $user->name }}</p>
    <hr>

    <div class="row">
        <div class="col-md-6">
            <a> href="{{ route('users.index') }} 'class' => 'btn btn-info'>Back to all Users </a>
            <a> href="{{ route('users.edit', $user->id) }}" class="btn btn-primary">Edit User</a>
        </div>
        <div class="col-md-6 text-right">
            {!! Form::open([
                'method' => 'DELETE',
                'route' => ['users.destroy', $user->id]
            ]) !!}
            {!! Form::submit('Delete this User', ['class' => 'btn btn-danger']) !!}
            {!! Form::close() !!}
        </div>
    </div>

    @endsection
@stop