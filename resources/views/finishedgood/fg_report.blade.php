



    <div class ='container'>
        <table>
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
            @if($report)

                @foreach($report as $item)

                    <tr>
                        <td>{{$item->FG_id}}</td>
                        <td>{{$item->FG_brand}}</td>
                        <td>{{$item->FG_type}}</td>
                        <td>{{$item->FG_shadeName}}</td>
                        <td>{{$item->FG_shadeNo}}</td>
                        <td>{{$item->FG_specification}}</td>
                        <td>{{$item->FG_unit}}</td>
                        <td>{{$item->FK_BF_id}}</td>



                    </tr>




                @endforeach
            @endif
            </tbody>
        </table>




    </div>



