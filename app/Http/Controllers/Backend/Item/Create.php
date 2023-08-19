<?php

namespace App\Http\Controllers\Backend\Item;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Create extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Int $id,Request $request)
    {
        if ($request->isMethod('POST')){
            if (\Facades\App\Services\Backend\Item::create($request)) {
                return redirect()->route('admin.item',$id)->with('success','Item Has been successfully added');
            } else{
                return redirect()->route('admin.item',$id)->with('danger','Item can not be created!');
            }
        }
    }
}
