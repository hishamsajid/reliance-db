@extends('layouts.app')


@section('content')



    <div class ='container'>
        <table class="table table-condensed">
            <thead>
            <tr>
                <th>ID</th>
                <th>Brand</th>
                <th>Type</th>
                <th>Shade Name</th>
                <th>Shade No</th>
                <th>Specification</th>
                <th>Unit</th>
                <th>Batch Fill ID</th>
            </tr>
            </thead>
            <tbody>
            @if($finishedgood)

                @foreach($finishedgood as $item)

                    <tr>
                        <td>{{$item->FG_id}}</td>
                        <td>{{$item->FG_brand}}</td>
                        <td>{{$item->FG_type}}</td>
                        <td>{{$item->FG_shadeName}}</td>
                        <td>{{$item->FG_shadeNo}}</td>
                        <td>{{$item->FG_specification}}</td>
                        <td>{{$item->FG_unit}}</td>
                        <td>{{$item->FK_BF_id}}</td>


                        <td> <a href="{{ route('finishedgood.destroy', $item->FG_id) }}" class="btn btn-danger">Delete Item</a> </td>

                        <td> <a href="{{ route('finishedgood.edit', $item->FG_id) }}" class="btn btn-warning">Edit Item</a> </td>
                    </tr>




                @endforeach
            @endif
            </tbody>
        </table>

        <a href="{{ url('home/finishedgood/create') }}" class="btn btn-primary">Add Item</a>
        <div>
        <a href="{{action('FinishedGoodController@finished_goods_report')}}">Print report</a>
        </div>
    </div>






@endsection

