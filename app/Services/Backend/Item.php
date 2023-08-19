<?php

namespace App\Services\Backend;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class Item
{
    public function rows(Int $per_page)
    {

        $rows = \Facades\App\Models\Item::orderBy('created_at','DESC')->paginate($per_page);

        return $rows;

    }

    public function get(Int $id)
    {

        $row = \Facades\App\Models\Item::find($id);

        if (empty($row->id)) return redirect()->route('admin.item')->with('warning','Data not found!');

        return $row;

    }

    public function create(Request $request)
    {   

        $request->validate([
            'job_id' =>'required',
            'description' =>'required',
            'status' =>'required',
        ]);
        $data = $request->only(['job_id','description','status']);
        $row = \Facades\App\Models\Item::create($data);

        if(!empty($row->id)) return true;
        return false;

    }
    public function update(Int $id,Request $request)
    {
        $row = \Facades\App\Models\Item::find($id);
        $request->validate([
            'job_id' =>'required',
            'description' =>'required',
            'status' =>'required',
        ]);
        $data = $request->only(['job_id','description','status']);

        if (!empty($row->id)) {

            $row->update($data);

            return true;
        }

        return false;

    }
    public function delete($request)
    {
        $data=\Facades\App\Models\Item::find($request->id);
        
        if(!empty($data->id)){
            $data->delete();
            return true;
        }
        return false;
    }
}