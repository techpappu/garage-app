<?php

namespace App\Services\Backend;

use Illuminate\Http\Request;

class Vendor
{
    public function rows(Int $per_page)
    {

        $rows = \Facades\App\Models\Vendor::orderBy('created_at','DESC')->paginate($per_page);

        return $rows;

    }

    public function get(Int $id)
    {

        $row = \Facades\App\Models\Vendor::find($id);

        if (empty($row->id)) return redirect()->route('admin.vendor')->with('warning','Data not found!');

        return $row;

    }

    public function create(Request $request)
    {   
        $request->validate([
            'name' =>'required',
            'address' =>'required',
            'phone' =>'required',
            'contact_name' =>'required',
            'contact_phone' =>'required',
        ]);
        $data = $request->only(['name','address','phone','email','contact_name','contact_phone','contact_email']);
        $row = \Facades\App\Models\Vendor::create($data);

        if(!empty($row->id)) return true;
        return false;

    }
    public function update(Int $id,Request $request)
    {
        $row = \Facades\App\Models\Vendor::find($id);
        $request->validate([
            'name' =>'required',
            'address' =>'required',
            'phone' =>'required',
            'contact_name' =>'required',
            'contact_phone' =>'required',
        ]);
        
        $data = $request->only(['name','address','phone','email','contact_name','contact_phone','contact_email']);

        if (!empty($row->id)) {

            $row->update($data);

            return true;
        }

        return false;

    }
    public function delete($request)
    {
        $data=\Facades\App\Models\Vendor::find($request->id);
        
        if(!empty($data->id)){
            $data->delete();
            return true;
        }
        return false;
    }
}