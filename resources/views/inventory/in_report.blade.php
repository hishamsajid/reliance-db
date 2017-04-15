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
    @if($report)

        @foreach($report as $item)

            <tr>
                <td>{{$item->IN_id}}</td>
                <td>{{$item->IN_name}}</td>
                <td>{{$item->IN_description}}</td>
                <td>{{$item->IN_quantity}}</td>
                <td>{{$item->IN_type}}</td>
                <td>{{$item->IN_rate}}</td>


            </tr>




        @endforeach
    @endif
    </tbody>
</table>
</div>


