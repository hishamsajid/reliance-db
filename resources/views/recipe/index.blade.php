@extends('layouts.app')

            @section('content')


                <div class = 'container'>

                    <table class = 'table table-condensed'>

                        <thead>

                        <tr>

                            <th>Recipe ID</th>
                            <th>Remarks</th>
                            <th>Order no</th>
                            <th>Batch Size</th>
                            <th>Quantity</th>
                            <th>Inventory ID</th>
                            <th>Created at</th>

                        </tr>


                        </thead>

                        <tbody>
                        @if($recipe)

                            @foreach($recipe as $item)
                                <tr>

                                    <td>{{$item->R_id}}</td>
                                    <td>{{$item->R_remakrs}}</td>
                                    <td>{{$item->R_order_no}}</td>
                                    <td>{{$item->R_batchSize}}</td>
                                    <td>{{$item->R_quantity}}</td>
                                    <td>{{$item->IN_id_FK}}</td>
                                    <td>{{$item->created_at}}</td>


                                    <td> <a href="{{ route('recipe.destroy', $item->R_id) }}" class="btn btn-danger">Delete Recipe</a> </td>
                                    <td> <a href="{{ route('recipe.edit', $item->R_id) }}" class="btn btn-primary">Edit Recipe</a> </td>

                                </tr>

                            @endforeach





                        @endif



            </tbody>


        </table>


                    <a href="{{ url('home/recipe/create') }}" class="btn btn-primary">Add Item</a>
                    <div>
                        <a href="{{action('RecipeController@recipe_report')}}">Print report</a>
                    </div>


    </div>



    @endsection