<?php

namespace App\Http\Controllers\Backend\Vendor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Create extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        if ($request->isMethod('POST')){
            if (\Facades\App\Services\Backend\Vendor::create($request)) {
                return redirect()->route('admin.vendor')->with('success','Vendor Has been successfully added');
            } else{
                return redirect()->route('admin.vendor')->with('danger','Vendor can not be created!');
            }
        }
        return view('admin.vendor.create');
    }
}
