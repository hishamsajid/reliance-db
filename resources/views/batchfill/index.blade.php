@extends('layouts.app')

@section('content')


    <div class = 'container'>

        <table class = 'table table-condensed'>

            <thead>

            <tr>

                <th>Batch Fill ID</th>
                <th>Packing ID</th>
                <th>Litres</th>
                <th>Drums</th>
                <th>Batch ID</th>


            </tr>


            </thead>

            <tbody>
            @if($batchfill)

                @foreach($batchfill as $item)
                    <tr>

                        <td>{{$item->BF_id}}</td>
                        <td>{{$item->BF_PackingId}}</td>
                        <td>{{$item->BF_litres}}</td>
                        <td>{{$item->BF_drums}}</td>
                        <td>{{$item->R_quantity}}</td>
                        <td>{{$item->FK_B_id}}</td>
                        <td>{{$item->created_at}}</td>


                        <td> <a href="{{ route('batchfill.destroy', $item->BF_id) }}" class="btn btn-danger">Delete BatchFill</a> </td>
                        <td> <a href="{{ route('batchfill.edit', $item->BF_id) }}" class="btn btn-primary">Edit BatchFill</a> </td>

                    </tr>


                @endforeach





            @endif



            </tbody>


        </table>


        <a href="{{ url('home/batchfill/create') }}" class="btn btn-primary"> new Batch Fill</a>


    </div>



@endsection