<?php

namespace App\Services\Backend;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class Job
{
    public function rows(Int $per_page)
    {

        $rows = \Facades\App\Models\Job::orderBy('created_at','DESC')->paginate($per_page);

        return $rows;

    }

    public function get(Int $id)
    {

        $row = \Facades\App\Models\Job::find($id);

        if (empty($row->id)) return redirect()->route('admin.job')->with('warning','Data not found!');

        return $row;

    }

    public function create(Request $request)
    {   

        $request->validate([
            'vendor_id' =>'required',
            'title' =>'required',
            'status' =>'required',
        ]);
        $data = $request->only(['vendor_id','title','description','comments','status']);
        $row = \Facades\App\Models\Job::create($data);

        if(!empty($row->id)) return true;
        return false;

    }
    public function update(Int $id,Request $request)
    {
        $row = \Facades\App\Models\Job::find($id);
        $request->validate([
            'vendor_id' =>'required',
            'title' =>'required',
            'status' =>'required',
        ]);
        
        $data = $request->only(['vendor_id','title','description','comments','status']);

        if (!empty($row->id)) {

            $row->update($data);

            return true;
        }

        return false;

    }
    public function delete($request)
    {
        $data=\Facades\App\Models\Job::find($request->id);
        
        if(!empty($data->id)){
            $data->delete();
            return true;
        }
        return false;
    }
}