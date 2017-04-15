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
        @if($report)

            @foreach($report as $item)
                <tr>

                    <td>{{$item->R_id}}</td>
                    <td>{{$item->R_remakrs}}</td>
                    <td>{{$item->R_order_no}}</td>
                    <td>{{$item->R_batchSize}}</td>
                    <td>{{$item->R_quantity}}</td>
                    <td>{{$item->IN_id_FK}}</td>
                    <td>{{$item->created_at}}</td>


                </tr>

            @endforeach





        @endif



        </tbody>


    </table>
<div>