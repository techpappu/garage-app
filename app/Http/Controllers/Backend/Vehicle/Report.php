<?php

namespace App\Http\Controllers\Backend\Vehicle;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Report extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Int $id,Request $request)
    {
        $data=[];
        $data['row']=\Facades\App\Services\Backend\Vehicle::get($id);
        return view('admin.vehicle.report',compact('data'));
    }
}
