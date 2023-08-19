<?php

namespace App\Http\Controllers\Backend\Item;

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
            if (\Facades\App\Services\Backend\Item::update($id,$request)) {
                return redirect()->route('admin.item.update',$id)->with('success','Item Has been updated successfully');
            } else{
                return redirect()->route('admin.item.update',$id)->with('danger','Item can not be updated!');
            }
        }
        $data=[];
        $data['row']=\Facades\App\Services\Backend\Item::get($id);
        $data['job']=\Facades\App\Models\Job::all();
        return view('admin.item.update',compact('data'));
    }
}
