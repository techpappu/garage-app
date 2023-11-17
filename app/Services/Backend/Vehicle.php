<?php

namespace App\Services\Backend;

use Illuminate\Http\Request;

class Vehicle
{
    public function rows(Int $per_page)
    {

        $rows = \Facades\App\Models\Vehicle::orderBy('created_at','DESC')->paginate($per_page);

        return $rows;

    }

    public function get(Int $id)
    {

        $row = \Facades\App\Models\Vehicle::find($id);

        if (empty($row->id)) return redirect()->route('admin.vehicle')->with('warning','Data not found!');

        return $row;

    }

    public function create(Request $request)
    {   
        $request->validate([
            'name' =>'required',
            'chassis_no' =>'required',
            'manufacturer' =>'required',
            'capacity' =>'required',
            'engine_manufacturer' =>'required',
            'engine_model' =>'required',
            'start_date' =>'required',
            'next_maintenance_date' =>'required',
            'status' =>'required',
        ]);
        $data = $request->only(['name','chassis_no','manufacturer','capacity','engine_manufacturer','engine_model','start_date','next_maintenance_date','status']);
        $row = \Facades\App\Models\Vehicle::create($data);

        if(!empty($row->id)) return true;
        return false;

    }
    public function update(Int $id,Request $request)
    {
        $row = \Facades\App\Models\Vehicle::find($id);
        $request->validate([
            'name' =>'required',
            'chassis_no' =>'required',
            'manufacturer' =>'required',
            'capacity' =>'required',
            'engine_manufacturer' =>'required',
            'engine_model' =>'required',
            'start_date' =>'required',
            'next_maintenance_date' =>'required',
            'status' =>'required',
        ]);
        
        $data = $request->only(['name','chassis_no','manufacturer','capacity','engine_manufacturer','engine_model','start_date','next_maintenance_date','status']);

        if (!empty($row->id)) {

            $row->update($data);

            return true;
        }

        return false;

    }
    public function delete($request)
    {
        $data=\Facades\App\Models\Vehicle::find($request->id);
        
        if(!empty($data->id)){
            $data->delete();
            return true;
        }
        return false;
    }
}