<?php

namespace App\Http\Controllers\Backend\Vehicle;

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
            if (\Facades\App\Services\Backend\Vehicle::update($id,$request)) {
                return redirect()->route('admin.vehicle.update',$id)->with('success','Vehicle Has been updated successfully');
            } else{
                return redirect()->route('admin.vehicle.update',$id)->with('danger','Vehicle can not be updated!');
            }
        }
        $data=[];
        $data['row']=\Facades\App\Services\Backend\Vehicle::get($id);
        return view('admin.vehicle.update',compact('data'));
    }
}
