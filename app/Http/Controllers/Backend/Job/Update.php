<?php

namespace App\Http\Controllers\Backend\Job;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Update extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Int $id,Request $request)
    {
        if ($request->isMethod('POST')){
            if (\Facades\App\Services\Backend\Job::update($id,$request)) {
                return redirect()->route('admin.job.update',$id)->with('success','Job Has been updated successfully');
            } else{
                return redirect()->route('admin.job.update',$id)->with('danger','Job can not be updated!');
            }
        }
        $data=[];
        $data['row']=\Facades\App\Services\Backend\Job::get($id);
        $data['vendors']=\Facades\App\Models\Vendor::all();
        return view('admin.job.update',compact('data'));
    }
}
