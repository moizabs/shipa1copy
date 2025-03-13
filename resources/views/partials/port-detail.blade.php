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
                <th>Address</th>
                <th>Port Name</th>
                <th>Terminal Name</th>
                <th>Country</th>
                <th>Total Delivery Ports</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $key => $value)
                <tr>
                    <td>
                        <b>{{$value->delivery_address}}</b>
                    </td>
                    <td>
                        <b>{{$value->port_name}}</b>
                    </td>
                    <td>
                        <b>{{$value->terminal_name}}</b>
                    </td>
                    <td>
                        <b>{{$value->country}}</b>
                    </td>
                    <td>
                        <b>{{count($value->portToPort)}}</b>
                    </td>
                    <td>
                        <span class="badge badge-{{$value->status == 1 ? 'success' : 'danger'}} p-2">{{$value->status == 1 ? 'ON' : 'OFF'}}</span>
                    </td>
                    <td>
                        <div class="btn-group">
                            <a href="{{ route('admin.port.edit',[encrypt($value->id)]) }}" class="btn btn-success my-auto">Edit</a>
                            <a href="{{ route('admin.port.show',[encrypt($value->id)]) }}" class="btn btn-info my-auto">Show</a>
                            <button type="button" class="btn btn-danger my-auto" onclick="deletePort('{{encrypt($value->id)}}')" data-toggle="modal" data-target="#destroyPort">Delete</a>
                        </div>
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