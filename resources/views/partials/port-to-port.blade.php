<?php 
    // $access = [];
    // if(Session::get('admin')->userAccess)
    // {
    //     foreach(Session::get('admin')->userAccess as $value)
    //     {
    //         $access[] = $value->access->name;
    //     }
    // }
?>
<div class="tableMain">
    <table class="dashboardMain__body--table">
        <thead>
            <tr>
                <th>Origin Port Name</th>
                <th>Delivery Port Name</th>
                <th>Delivery Country Name</th>
                <th>Price</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $key => $value)
                <tr>
                    <td>
                        <b>{{$value->port->port_name}}</b>
                    </td>
                    <td>
                        <b>{{$value->delivery_port_name}}</b>
                    </td>
                    <td>
                        <b>{{$value->delivery_country}}</b>
                    </td>
                    <td>
                        <b>
                            <span class="bluecolor">
                                ${{$value->price}}
                            </span>
                        </b>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
<br>
<div>
    {{$data->links()}}
</div>