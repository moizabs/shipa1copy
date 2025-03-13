@extends('dashboard.admin.layouts.app')
@section('content')
<title>A1 Export - {{$data1->port_name}} To Ports</title>
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
    <div class="dashboardMain__body--heading" style="display: flex;justify-content:space-between;">
        <h2>{{$data1->port_name}} To Ports</h2>
    </div>
    <div class="serachfilter col-8">

        <div class="inputGroup">
            <label for="practice_name"> <b>Search</b></label>
            <div class="flex_">
                <select name="key" id="key" class="col-3">
                    <option value="">Select Option</option>
                    <option value="delivery_port_name">Delivery Port Name</option>
                    <option value="delivery_country">Delivery Country Name</option>
                    <option value="price">Price</option>
                </select>
                <input id="value" name="value" placeholder="Search" type="text">
                <input id="id" name="id" value="{{$data1->id}}" type="hidden">
            </div>
        </div>
    </div>
    <div id="portToPort" class="text-center">
        @include('partials.port-to-port')
    </div>
@endsection

@section('script')
    <script>
        $.ajaxSetup({
            headers:
            { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') }
        });
        function searchPortToPort(key,value,page)
        {
            var id = $("#id").val();
            $.ajax({
                url:"/admin/port/show/search?page="+page,
                type:"POST",
                data:{key:key,value:value,id:id},
                beforeSend:function(){
                    $("#portToPort").html("");
                    $("#portToPort").html(`
                        <div class="spinner-border text-secondary" role="status" style="width:50px;height:50px;position: absolute;top: 400px;">
                          <span class="sr-only">Loading...</span>
                        </div>
                    `);
                },
                success:function(res)
                {
                    $("#portToPort").html("");
                    $("#portToPort").html(res);
                }
            });
        }
        
        $("#value").keyup(function(e){
            var key  = $("#key").val();
            var value  = $(this).val();
            if(e.which ==13)
            {
                searchPortToPort(key,value,1);
            }
        });
        
        $(document).on("click", ".pagination a",function(e){
            e.preventDefault();
            var page = $(this).attr("href").split("page=")[1];
            var key  = $("#key").val();
            var value  = $("#value").val();
            searchPortToPort(key,value,page);
        });
    </script>
@endsection