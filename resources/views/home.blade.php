@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                    <a href="{{ route('users.index') }}" class="btn btn-primary">Show User</a>

                    <a href="{{ url('users.store') }}" class="btn btn-primary">Create User</a>

                    <a href="{{ url('home/inventory') }}" class="btn btn-primary">Access Inventory</a>

                    <a href="{{ url('home/recipe') }}" class="btn btn-primary">Access Recipes</a>

                    <a href="{{url('home/batch')}}" class="btn btn-primary">Access Batches</a>

                    <a href="{{url('home/labtest')}}" class="btn btn-primary">Lab Tests</a>

                    <a href="{{url('home/finishedgood')}}" class="btn btn-primary">Finished Goods</a>

                    <a href="{{url('home/batchfill')}}" class="btn btn-primary">Batch Fill</a>

                <div class="panel-body">
                    Select what you want to do
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
