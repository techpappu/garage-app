<?php

namespace App\Http\Controllers\Backend\Vendor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Delete extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        if ($request->isMethod('POST')) {
            if(\Facades\App\Services\Backend\Vendor::delete($request)){
                return redirect()->route('admin.vendor')->with('success','Vendor has been successfully Deleted');
            } else{
                return redirect()->route('admin.vendor')->with('danger','Vendor can not be Deleted!');
            }
        }
    }
}
