<?php

namespace App\Http\Controllers\Backend\Vehicle;

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
            if (\Facades\App\Services\Backend\Vehicle::create($request)) {
                return redirect()->route('admin.vehicle')->with('success','Vehicle Has been successfully added');
            } else{
                return redirect()->route('admin.vehicle')->with('danger','Vehicle can not be created!');
            }
        }
        return view('admin.vehicle.create');
    }
}
