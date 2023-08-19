<?php

namespace App\Http\Controllers\Backend\Job;

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
            if (\Facades\App\Services\Backend\Job::create($request)) {
                return redirect()->route('admin.job')->with('success','Job Has been successfully added');
            } else{
                return redirect()->route('admin.job')->with('danger','Job can not be created!');
            }
        }
        $data=[];
        $data['vendors']=\Facades\App\Models\Vendor::all();
        return view('admin.job.create',compact('data'));
    }
}
