<?php

namespace App\Http\Controllers\Backend\Vehicle;

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
            if(\Facades\App\Services\Backend\Vehicle::delete($request)){
                return redirect()->route('admin.vehicle')->with('success','Vehicle has been successfully Deleted');
            } else{
                return redirect()->route('admin.vehicle')->with('danger','Vehicle can not be Deleted!');
            }
        }
    }
}
