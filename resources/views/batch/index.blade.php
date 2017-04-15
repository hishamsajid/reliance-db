@extends('layouts.app')


@section('content')



    <div class ='container'>
        <table class="table table-condensed">
            <thead>
            <tr>
                <th>ID</th>
                <th>Remarks</th>
                <th>Size</th>
                <th>Item</th>
                <th>Quantity</th>
                <th>Recipe ID</th>
                <th>Order No</th>
            </tr>
            </thead>
            <tbody>
            @if($batch)

                @foreach($batch as $item)

                    <tr>
                        <td>{{$item->B_id}}</td>
                        <td>{{$item->B_remarks}}</td>
                        <td>{{$item->B_size}}</td>
                        <td>{{$item->B_item}}</td>
                        <td>{{$item->B_quantity}}</td>
                        <td>{{$item->R_id_FK}}</td>
                        <td>{{$item->B_orderNo}}</td>


                        <td> <a href="{{ route('batch.destroy', $item->B_id) }}" class="btn btn-danger">Delete Item</a> </td>
                        <td> <a href="{{ url('home/batch/create') }}" class="btn btn-primary">Add new Batch</a> </td>
                        <td> <a href="{{ route('batch.edit', $item->B_id) }}" class="btn btn-warning">Edit Item</a> </td>
                    </tr>




                @endforeach
            @endif
            </tbody>
        </table>
    </div>

    <div>
        <td> <a href="{{ url('home/batch/create') }}" class="btn btn-primary">Add new Batch</a> </td>

    </div>

    @endsection