<?php

namespace App\Http\Controllers\Backend\Item;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Delete extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Int $id,Request $request)
    {
        if ($request->isMethod('POST')) {
            if(\Facades\App\Services\Backend\Item::delete($request)){
                return redirect()->route('admin.item',$id)->with('success','Job has been successfully Deleted');
            } else{
                return redirect()->route('admin.item',$id)->with('danger','Job can not be Deleted!');
            }
        }
    }
}
