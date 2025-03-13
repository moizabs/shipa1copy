@extends('dashboard.admin.layouts.app')
@section('content')
<title>A1 Export - Port Detail</title>
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
        <h2>Port Detail</h2>
        <a href="{{route('admin.port.create')}}" class="btn btn-secondary rounded" style="margin:auto 0;">Add New Port Detail</a>
    </div>
    <div class="serachfilter col-8">

        <div class="inputGroup">
            <label for="practice_name"> <b>Search</b></label>
            <div class="flex_">
                <select name="key" id="key" class="col-3">
                    <option value="">Select Option</option>
                    <option value="delivery_address">Address</option>
                    <option value="port_name">Port Name</option>
                    <option value="terminal_name">Terminal Name</option>
                    <option value="country">Country</option>
                    <option value="status">Status</option>
                </select>
                <input id="value" name="value" placeholder="Search" type="text">
            </div>
        </div>
    </div>
    <div id="portDetail" class="text-center">
        @include('partials.port-detail')
    </div>
@endsection

@section('modal')
    <div class="modal fade" id="destroyPort" tabindex="-1" role="dialog" aria-labelledby="destroyPortTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="destroyPortLongTitle">Are you sure, You want to delete the port?</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <form action="{{ route('admin.port.destroy') }}" method="POST">
                  @csrf
                  <input value="" type="hidden" id="id" name="id" />
                  <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
                    <button type="submit" class="btn btn-success">Yes</button>
                  </div>
              </form>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        $.ajaxSetup({
            headers:
            { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') }
        });
        function searchPortDetail(key,value,page)
        {
            $.ajax({
                url:"/admin/port/search?page="+page,
                type:"POST",
                data:{key:key,value:value},
                beforeSend:function(){
                    $("#portDetail").html("");
                    $("#portDetail").html(`
                        <div class="spinner-border text-secondary" role="status" style="width:50px;height:50px;position: absolute;top: 400px;">
                          <span class="sr-only">Loading...</span>
                        </div>
                    `);
                },
                success:function(res)
                {
                    $("#portDetail").html("");
                    $("#portDetail").html(res);
                }
            });
        }
        
        $("#value").keyup(function(e){
            var key  = $("#key").val();
            var value  = $(this).val();
            if(e.which ==13)
            {
                searchPortDetail(key,value,1);
            }
        });
        
        $(document).on("click", ".pagination a",function(e){
            e.preventDefault();
            var page = $(this).attr("href").split("page=")[1];
            var key  = $("#key").val();
            var value  = $("#value").val();
            searchPortDetail(key,value,page);
        });
        
        function deletePort(id)
        {
            $("#id").val(id);
        }
    </script>
@endsection