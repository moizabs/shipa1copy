<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PortDetail;
use App\Models\Port;
use App\Models\PortToPort;
use Illuminate\Support\Facades\Validator;

class PortDetailController extends Controller
{
    public function index()
    {
        $data = PortDetail::with('portToPort')->orderBy('updated_at','DESC')->paginate(10);
        return view('dashboard.admin.port.index',compact('data'));
    }
    
    public function create()
    {
        return view('dashboard.admin.port.create');
    }
    
    public function store(Request $request)
    {
        $data = new PortDetail;
        $data->port_name = $request->port_name;
        $data->country = $request->country;
        $data->terminal_name = $request->terminal_name;
        $data->delivery_address = $request->address;
        $data->latitude = $request->latitude;
        $data->longitude = $request->longitude;
        $data->status = $request->status;
        $data->save();
        
        if($request->delivery_port_name)
        {
            foreach($request->delivery_port_name as $key => $value)
            {
                $data2 = new PortToPort;
                $data2->port_detail_id = $data->id;
                $data2->delivery_port_name = $value;
                $data2->delivery_country = $request->delivery_country[$key];
                $data2->delivery_latitude = $request->delivery_latitude[$key];
                $data2->delivery_longitude = $request->delivery_longitude[$key];
                $data2->price = $request->price[$key];
                $data2->save();
            }
        }
        
        return redirect()->route('admin.port')->with('msg',$request->port_name.' has been added successfully!');
    }
    
    public function show($id)
    {
        $pid = decrypt($id);
        $data1 = PortDetail::select('port_name','id')->where('id',$pid)->first();
        $data = PortToPort::with('port')->where('port_detail_id',$pid)->orderBy('id','DESC')->paginate(10);
        
        return view('dashboard.admin.port.show',compact('data','data1'));
    }
    
    public function search(Request $request)
    {
        if($request->key == 'price')
        {
            $key = $request->key;
            $value = str_replace("$","",$request->value);
        }
        else if($request->key)
        {
            $key = $request->key;
            $value = $request->value;
        }
        else{
            $key = 'delivery_port_name';
            $value = $request->value;
        }
        
        $data = PortToPort::with('port')
        ->where($key,'LIKE','%'.$value.'%')
        ->where('port_detail_id',$request->id)->orderBy('id','DESC')->paginate(10);
        
        return view('partials.port-to-port',compact('data'));
    }
     
    public function find(Request $request)
    {
        if($request->key)
        {
            $key = $request->key;
        }
        else{
            $key = 'port_name';
        }
        
        $data = PortDetail::where(function ($q) use ($request,$key){
            if($request->key == 'status')
            {
                if($request->value == 'OFF' || $request->value == 'Off' || $request->value == 'off' || $request->value == 'f' || $request->value == 'F' || $request->value == 'of' || $request->value == 'OF' || $request->value == 'Of' || $request->value == 'ff' || $request->value == 'Ff' || $request->value == 'FF')
                {
                    $q->where($key,'LIKE','%0%');
                }
                if($request->value == 'ON' || $request->value == 'On' || $request->value == 'on' || $request->value == 'N' || $request->value == 'n')
                {
                    $q->where($key,'LIKE','%1%');
                }
            }
            else{
                $q->where($key,'LIKE','%'.$request->value.'%');
            }
        })->orderBy('updated_at','DESC')->paginate(10);
        return view('partials.port-detail',compact('data'));
    }
    
    public function edit($id)
    {
        $pid = decrypt($id);
        $data = PortDetail::with('portToPort')->where('id',$pid)->first();
        return view('dashboard.admin.port.update',compact('data'));
    }
    
    public function update(Request $request, $id)
    {
        $pid = decrypt($id);
        $data = PortDetail::find($pid);
        $data->port_name = $request->port_name;
        $data->country = $request->country;
        $data->terminal_name = $request->terminal_name;
        $data->delivery_address = $request->address;
        $data->latitude = $request->latitude;
        $data->longitude = $request->longitude;
        $data->status = $request->status;
        $data->save();
        
        if($request->delivery_port_name)
        {
            PortToPort::where('port_detail_id',$pid)->delete();
            foreach($request->delivery_port_name as $key => $value)
            {
                $data2 = new PortToPort;
                $data2->port_detail_id = $data->id;
                $data2->delivery_port_name = $value;
                $data2->delivery_country = $request->delivery_country[$key];
                $data2->delivery_latitude = $request->delivery_latitude[$key];
                $data2->delivery_longitude = $request->delivery_longitude[$key];
                $data2->price = $request->price[$key];
                $data2->save();
            }
        }
        
        return redirect()->route('admin.port')->with('msg',$data->port_name.' has been updated successfully!');
    }
    
    public function destroy(Request $request)
    {
        $pid = decrypt($request->id);
        $data = PortDetail::find($pid);
        $name = $data->port_name;
        $data->delete();
        PortToPort::where('port_detail_id',$pid)->delete();
        return redirect()->route('admin.port')->with('msg',$name.' has been deleted successfully!');
    }
    
    public function get(Request $request)
    {
        $data = Port::where('name','LIKE','%'.$request->port_name.'%')->orderBy('name','ASC')->get();
        
        return response()->json([
            'data'=>$data,
            'status'=>true,
            'status_code'=>200
        ],200);
    }
    
    public function delete(Request $request)
    {
        $data = PortToPort::find($request->id);
        $data->delete();
        
        return "Delete";
    }
}
