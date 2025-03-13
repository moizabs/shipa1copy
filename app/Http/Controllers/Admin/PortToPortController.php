<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PortToPort;
use App\Models\ZipCode;

class PortToPortController extends Controller
{
    public function index()
    {
        $portToPorts = PortToPort::all();
        return view('dashboard.admin.port_to_ports.index', compact('portToPorts'));
    }

    public function create()
    {
        return view('dashboard.admin.port_to_ports.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'pickup_country' => 'nullable|string|max:255',
            'pickup_zipcode' => 'required|string|max:255',
            'pickup_latitude' => 'nullable|numeric',
            'pickup_longitude' => 'nullable|numeric',
            'delivery_country' => 'nullable|string|max:255',
            'delivery_zipcode' => 'required|string|max:255',
            'delivery_latitude' => 'nullable|numeric',
            'delivery_longitude' => 'nullable|numeric',
            'price' => 'required|numeric',
        ]);

        PortToPort::create($request->all());

        return redirect()->route('port-to-ports.index')
            ->with('success', 'Port to Port created successfully.');
    }

    public function show(PortToPort $portToPort)
    {
        return view('dashboard.admin.port_to_ports.show', compact('portToPort'));
    }

    public function edit(PortToPort $portToPort)
    {
        return view('dashboard.admin.port_to_ports.edit', compact('portToPort'));
    }

    public function update(Request $request, PortToPort $portToPort)
    {
        $request->validate([
            'pickup_country' => 'nullable|string|max:255',
            'pickup_zipcode' => 'required|string|max:255',
            'pickup_latitude' => 'nullable|numeric',
            'pickup_longitude' => 'nullable|numeric',
            'delivery_country' => 'nullable|string|max:255',
            'delivery_zipcode' => 'required|string|max:255',
            'delivery_latitude' => 'nullable|numeric',
            'delivery_longitude' => 'nullable|numeric',
            'price' => 'required|numeric',
        ]);

        $portToPort->update($request->all());

        return redirect()->route('port-to-ports.index')
            ->with('success', 'Port to Port updated successfully.');
    }

    public function destroy(PortToPort $portToPort)
    {
        $portToPort->delete();

        return redirect()->route('port-to-ports.index')
            ->with('success', 'Port to Port deleted successfully.');
    }

    public function zipcode(Request $request)
    {
        $data = $request->input;

        $selectOri = ZipCode::select('zipcode')
            ->where('zipcode', 'LIKE', $data . '%')
            ->limit(10)
            ->get();

        $zipcodes = [];
        if ($selectOri->isNotEmpty()) {
            foreach ($selectOri as $val) {
                $zipcodes[] = $val->zipcode;
            }
        }

        return response()->json($zipcodes);
    }
}
