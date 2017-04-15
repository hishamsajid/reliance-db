@extends('layouts.app')


@section('content')



    <div class ='container'>
        <table class="table table-condensed">
            <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Description</th>
                <th>Quantity</th>
                <th>Type</th>
                <th>Rate</th>
            </tr>
            </thead>
            <tbody>
            @if($inventory)

                @foreach($inventory as $item)

                    <tr>
                        <td>{{$item->IN_id}}</td>
                        <td>{{$item->IN_name}}</td>
                        <td>{{$item->IN_description}}</td>
                        <td>{{$item->IN_quantity}}</td>
                        <td>{{$item->IN_type}}</td>
                        <td>{{$item->IN_rate}}</td>


                        <td> <a href="{{ route('inventory.destroy', $item->IN_id) }}" class="btn btn-danger">Delete Item</a> </td>

                        <td> <a href="{{ route('inventory.edit', $item->IN_id) }}" class="btn btn-warning">Edit Item</a> </td>
                    </tr>




                @endforeach
            @endif
            </tbody>
        </table>
         <a href="{{ url('home/inventory/create') }}" class="btn btn-primary">Add Item</a>
        <a href="{{action('InventoryController@inventory_report')}}">Print report</a>
    </div>




@endsection

