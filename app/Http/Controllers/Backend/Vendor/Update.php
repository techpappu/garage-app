<?php

namespace App\Http\Controllers\Backend\Vendor;

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
            if (\Facades\App\Services\Backend\Vendor::update($id,$request)) {
                return redirect()->route('admin.vendor.update',$id)->with('success','Vendor Has been updated successfully');
            } else{
                return redirect()->route('admin.vendor.update',$id)->with('danger','Vendor can not be updated!');
            }
        }
        $data=[];
        $data['row']=\Facades\App\Services\Backend\Vendor::get($id);
        return view('admin.vendor.update',compact('data'));
    }
}
