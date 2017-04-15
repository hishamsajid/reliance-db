@extends('layouts.app')


@section('content')

    <div class ='container'>
        <table class="table table-condensed">
            <thead>
            <tr>
                <th>Test ID</th>
                <th>Test Name</th>
                <th>Standard</th>
                <th>Value</th>
                <th>Batch ID</th>

            </tr>
            </thead>
            <tbody>
            @if($labtest)

                @foreach($labtest as $item)

                    <tr>
                        <td>{{$item->LT_id}}</td>
                        <td>{{$item->LT_testName}}</td>
                        <td>{{$item->LT_standard}}</td>
                        <td>{{$item->LT_values}}</td>
                        <td>{{$item->FK_B_id}}</td>



                        <td> <a href="{{ route('labtest.destroy', $item->LT_id) }}" class="btn btn-danger">Delete Test</a> </td>
                        <td> <a href="{{ url('home/labtest/create') }}" class="btn btn-primary">Add new Test</a> </td>
                        <td> <a href="{{ route('labtest.edit', $item->LT_id) }}" class="btn btn-warning">Edit Test</a> </td>
                    </tr>




                @endforeach
            @endif
            </tbody>
        </table>
    </div>

    <div>
        <td> <a href="{{ url('home/labtest/create') }}" class="btn btn-primary">Add new Test</a> </td>

    </div>


    @endsection